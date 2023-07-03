<?php
header('Content-type: text/html; charset=utf-8');
ob_start();
flush();
ob_flush();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GPAO - Test</title>

    <!-- Custom fonts for this template-->
    <link href="lib/sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="lib/sb-admin-2/css/google-fonts.css" rel="stylesheet">
    <link href="lib/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Personnalisation du thème sb-admin-2-->
    <link href="gpao.css" rel="stylesheet">
    <link href="impression.css" rel="stylesheet" type="text/css" media="print">
    <!-- Bootstrap core JavaScript-->
    <script src="lib/sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="lib/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="lib/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="gpao.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=11">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <?php
    include("new-menu.php"); // Appel du script du menu ici, remplacer par une page hors DB pour le test
    ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                            <h4 class="m-0 font-weight-bold text-primary">GPAO - Test développeur</h4>
                        </div>
                        <div class="card-body text-center">
                            <?php
                            require "bdd.php";
                            include "inscription.php";
                            $rqte_civilite = $bdd->prepare("SELECT id_civilite, civilite FROM tbl_civilite");
                            $rqte_civilite->execute();
                            $civilites = $rqte_civilite->fetchAll();
                            ?>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="civilite">Civilité :</label>
                                    <select class="form-control" id="civilite" name="civilite">
                                        <?php
                                        foreach ($civilites as $civilite) {
                                            ?>
                                            <option value="<?php echo $civilite["id_civilite"]; ?>"><?php echo $civilite["civilite"]; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nom">Nom :</label>
                                    <input type="text" class="form-control" id="nom" name="nom"
                                           value="<?php if (isset($_POST['nom'])) {
                                               echo $_POST['nom'];
                                           } ?>">
                                </div>
                                <div class="form-group">
                                    <label for="prenom">Prénom :</label>
                                    <input type="text" class="form-control" id="prenom" name="prenom"
                                           value="<?php if (isset($_POST['prenom'])) {
                                               echo $_POST['prenom'];
                                           } ?>">
                                </div>
                                <div class="form-group">
                                    <label for="date_naissance">Date de naissance :</label>
                                    <input type="date" class="form-control" id="date_naissance" name="datenaissance"
                                           value="<?php if (isset($_POST['datenaissance'])) {
                                               echo $_POST['datenaissance'];
                                           } ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Adresse e-mail :</label>
                                    <input type="email" class="form-control" id="email" name="mail"
                                           value="<?php if (isset($_POST['mail'])) {
                                               echo $_POST['mail'];
                                           } ?>">
                                </div>
                                <input type="submit" class="btn btn-primary" name="inscription" value="Valider">
                                <?php if (isset($error)) {
                                    echo "<p class='alert-danger'>" . $error . "</p>";
                                } ?>

                                <?php if (isset($success)) {
                                    echo "<p class='alert-success'>" . $success . "</p>";
                                } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Custom scripts for all pages-->
<script src="lib/sb-admin-2/js/sb-admin-2.min.js"></script>
</body>
</html>
