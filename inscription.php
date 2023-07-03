<?php
require "bdd.php";

if (!empty($_POST['civilite']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['datenaissance']) && !empty($_POST['mail'])) {
    $civilite = htmlspecialchars($_POST['civilite']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $datenaissance = htmlspecialchars($_POST['datenaissance']);
    $mail = htmlspecialchars($_POST['mail']);

    $rqt_email_exists = $bdd->prepare("SELECT id FROM tbl_client WHERE mail = :mail");
    $rqt_email_exists->bindParam("mail", $mail);
    $rqt_email_exists->execute();
    $email_exists = $rqt_email_exists->rowCount();

    if ($email_exists > 0) {
        $error = "Cette adresse e-mail est déjà utilisée.";
    } else {
        $dateTimeNaissance = date_create($datenaissance);
        $dateTimeActuelle = date_create();
        $diff = $dateTimeNaissance->diff($dateTimeActuelle);
        $age = $diff->format('%Y');
        if ($age >= 18) {
            $stmt = $bdd->prepare("INSERT INTO tbl_client (id_civilite, nom, prenom, datenaissance, mail) VALUES (:civilite, :nom, :prenom, :datenaissance, :mail)");
            $stmt->bindParam("civilite", $civilite);
            $stmt->bindParam("nom", $nom);
            $stmt->bindParam("prenom", $prenom);
            $stmt->bindParam("datenaissance", $datenaissance);
            $stmt->bindParam("mail", $mail);
            if ($stmt->execute()) {
                $success = "Inscription réussie !";
            } else {
                $error = "Erreur lors de l'inscription : " . $stmt->error;
            }
        } else {
            $error = "Vous devez être majeur !";
        }
    }
} else {
    $error = "Veuillez remplir tous les champs !";
}
