<?php
//header('Content-Type: text/html;charset=ISO-8859-1');
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/index.cfm">
		<div class="sidebar-brand-icon">
			<img alt="Brand" src="images/logo-deltaneo-sans-texte.png" height="55">
		</div>
		<div class="sidebar-brand-text mx-3">DELTA <span class="neo">NEO</span></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Pages Collapse Menu -->
	
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                
					<i class="fas fa-tools"></i>
				
				<span>Atelier</span>
			</a>
			
					<ul id="collapse1" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
											
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-1" aria-expanded="true" aria-controls="level3-1" style="margin: 0 1rem;">
							
										<i class="fas fa-barcode"></i>
									
									<span>Code Barres</span>
								</a>
						
									<ul id="level3-1" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-1" data-parent="#collapse1">
								
											<li class="nav-item">
												<a href="/atelier/flash/DemarrageProd.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Démarrage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/a/suivi.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger bac</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/flash/bcf.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>BCF</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="#" class="nav-link" style="margin-left: 2rem;">
													
													<span>Suivi Atelier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="#" class="nav-link" style="margin-left: 2rem;">
													
													<span>Suivi Tonnelage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="#" class="nav-link" style="margin-left: 2rem;">
													
													<span>Historique</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="#" class="nav-link" style="margin-left: 2rem;">
													
													<span>Commentaires</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-2" aria-expanded="true" aria-controls="level3-2" style="margin: 0 1rem;">
							
										<i class="fas fa-code"></i>
									
									<span>Dév</span>
								</a>
						
									<ul id="level3-2" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-2" data-parent="#collapse1">
								
											<li class="nav-item">
												<a href="#" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer barecodes percés</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="#" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer barecodes étiquettes</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-3" aria-expanded="true" aria-controls="level3-3" style="margin: 0 1rem;">
							
									<span>Réalisations</span>
								</a>
						
									<ul id="level3-3" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-3" data-parent="#collapse1">
								
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Realisations-atelier" class="nav-link" style="margin-left: 2rem;">
													
													<span>Réalisations</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/RealAtel.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Réal. Atelier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/stockatelier.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Stock Atelier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/heures/heures.cfm?societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Gestion Heures</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/certificatconformite_search.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Certif conformité</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=essaiCI" class="nav-link" style="margin-left: 2rem;">
													
													<span>Essai CI</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=voirCI" class="nav-link" style="margin-left: 2rem;">
													
													<span>Voir CI</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Interroger_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Dossier Technique</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/MenuStat.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Analyse rebuts</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-4" aria-expanded="true" aria-controls="level3-4" style="margin: 0 1rem;">
							
									<span>Prod Bloquées</span>
								</a>
						
									<ul id="level3-4" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-4" data-parent="#collapse1">
								
											<li class="nav-item">
												<a href="/atelier/ajout_bloq.cfm?ajout=0" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajout blocage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/liste_bloq.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/mod_bloq.cfm?modif=0" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/fin_bloq.cfm?fin=0" class="nav-link" style="margin-left: 2rem;">
													
													<span>Fin du blocage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/histo_bloq.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Historique</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/stat_bloq.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Stats</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
								<li class="nav-item">
									<a href="/Qualite/suiviout.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Suivi outils</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-6" aria-expanded="true" aria-controls="level3-6" style="margin: 0 1rem;">
							
									<span>Production</span>
								</a>
						
									<ul id="level3-6" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-6" data-parent="#collapse1">
								
											<li class="nav-item">
												<a href="/atelier/production.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Calcul Prod</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/imprime/suiviretards.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Suivi retards expé</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/livraison/BCF.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Bon Contrôle Final</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/production1.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Cahier Production</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/charg_sec1.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Charge Secteur</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/atelier/cahier_prod_cabl.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Cahier Prod Cable</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://recoupes/" class="nav-link" style="margin-left: 2rem;">
													
													<span>Suivi recoupes</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.130/" class="nav-link" style="margin-left: 2rem;">
													
													<span>Suivi tonnelage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://srv-dc-frap1/" class="nav-link" style="margin-left: 2rem;">
													
													<span>Suivi (F1) Melf/PR/FR</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://srv-dc-frap2/" class="nav-link" style="margin-left: 2rem;">
													
													<span>Suivi (F2) Coupes</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/gmao/menurestreint.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Maintenance</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-8" aria-expanded="true" aria-controls="level3-8" style="margin: 0 1rem;">
							
									<span>Qualité</span>
								</a>
						
									<ul id="level3-8" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-8" data-parent="#collapse1">
								
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=creation_rapport_cf" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer rapport contrôle final</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/MenuQualiteRestr.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Qualité</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="#" class="nav-link" style="margin-left: 2rem;">
													
													<span>News</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/heures/secouristes.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Secouristes</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/heures/habilitations.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Habilitations</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-9" aria-expanded="true" aria-controls="level3-9" style="margin: 0 1rem;">
							
									<span>Etiquettes</span>
								</a>
						
									<ul id="level3-9" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-9" data-parent="#collapse1">
								
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Produit" class="nav-link" style="margin-left: 2rem;">
													
													<span>Produits</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=ProdStock" class="nav-link" style="margin-left: 2rem;">
													
													<span>Pour le stock</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Produitp" class="nav-link" style="margin-left: 2rem;">
													
													<span>Petites Etiq Prod</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Produit3" class="nav-link" style="margin-left: 2rem;">
													
													<span>Avec lot N° CI</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Produit4" class="nav-link" style="margin-left: 2rem;">
													
													<span>Avec Lot Matière</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-10" aria-expanded="true" aria-controls="level3-10" style="margin: 0 1rem;">
							
									<span>Créer Code Barres</span>
								</a>
						
									<ul id="level3-10" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-10" data-parent="#collapse1">
								
											<li class="nav-item">
												<a href="/a/creer_standard.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Standard</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/a/creer_bacs.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Bacs</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/a/creer_bacs16.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Bacs VM</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
				</ul>
			

		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                
					<i class="fas fa-truck-moving"></i>
				
				<span>Livraisons</span>
			</a>
			
					<ul id="collapse2" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
											
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-11" aria-expanded="true" aria-controls="level3-11" style="margin: 0 1rem;">
							
									<span>Livraisons</span>
								</a>
						
									<ul id="level3-11" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-11" data-parent="#collapse2">
								
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Livraison" class="nav-link" style="margin-left: 2rem;">
													
													<span>Livrer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/livraisonBCF.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Livrer sur BCF</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/roumanie/livraisonRom.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Livrer DRT</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/blman.cfm?" class="nav-link" style="margin-left: 2rem;">
													
													<span>BL manuel sans CI</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/listeblman.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste BL manuels</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/menuBLCons.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Dép. Stock consig</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-12" aria-expanded="true" aria-controls="level3-12" style="margin: 0 1rem;">
							
									<span>Gestion des Colis</span>
								</a>
						
									<ul id="level3-12" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-12" data-parent="#collapse2">
								
											<li class="nav-item">
												<a href="/Livraison/Boncolis.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Bon de colisage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/Boncolis.cfm?action=suivi" class="nav-link" style="margin-left: 2rem;">
													
													<span>Suivi colis</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/MenuFacpack.htm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Packing list</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-13" aria-expanded="true" aria-controls="level3-13" style="margin: 0 1rem;">
							
									<span>Gestion des CI</span>
								</a>
						
									<ul id="level3-13" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-13" data-parent="#collapse2">
								
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Solder" class="nav-link" style="margin-left: 2rem;">
													
													<span>Solder</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Desolder" class="nav-link" style="margin-left: 2rem;">
													
													<span>Désolder</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-14" aria-expanded="true" aria-controls="level3-14" style="margin: 0 1rem;">
							
									<span>Gestion des BL</span>
								</a>
						
									<ul id="level3-14" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-14" data-parent="#collapse2">
								
											<li class="nav-item">
												<a href="/Livraison/FramBl.cfm?menu1=Fiche-BL" class="nav-link" style="margin-left: 2rem;">
													
													<span>Fiche</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/FramBl.cfm?menu1=Modification-BL" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier Compléter</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/FramBl.cfm?menu1=Annulation-BL" class="nav-link" style="margin-left: 2rem;">
													
													<span>Annuler</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/FramBl.cfm?menu1=Impression-BL" class="nav-link" style="margin-left: 2rem;">
													
													<span>Valider - Imprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/devaliderBl.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Dévalider</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/FramBl.cfm?menu1=Editer-BL" class="nav-link" style="margin-left: 2rem;">
													
													<span>Rééditer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/ChangeNumBl.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Changer Numéro</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-15" aria-expanded="true" aria-controls="level3-15" style="margin: 0 1rem;">
							
									<span>Etiquettes</span>
								</a>
						
									<ul id="level3-15" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-15" data-parent="#collapse2">
								
											<li class="nav-item">
												<a href="/Client/FramClient.cfm?menu1=Client" class="nav-link" style="margin-left: 2rem;">
													
													<span>Client</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Fournisseur" class="nav-link" style="margin-left: 2rem;">
													
													<span>Fournisseur</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/FramClient.cfm?menu1=Transitaire" class="nav-link" style="margin-left: 2rem;">
													
													<span>Transitaires</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/FramBl.cfm?menu1=Galia-Odette" class="nav-link" style="margin-left: 2rem;">
													
													<span>Galia-Odette</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Odette" class="nav-link" style="margin-left: 2rem;">
													
													<span>Odette</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/boncolis.cfm?action=imprimer" class="nav-link" style="margin-left: 2rem;">
													
													<span>Imprimer Colisage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/etiq_cabl.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Câblage</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-16" aria-expanded="true" aria-controls="level3-16" style="margin: 0 1rem;">
							
									<span>Transporteurs</span>
								</a>
						
									<ul id="level3-16" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-16" data-parent="#collapse2">
								
											<li class="nav-item">
												<a href="/Livraison/transporteur.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Transporteurs</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/frais_transport.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Frais Transports</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Livraison/palettes.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Colis / Palettes</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/Qualite/MenuQualiteRestr.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Qualité</span>
									</a>
							
						</li>
						
								<li class="nav-item">
									<a href="#" class="nav-link" style="margin: 0 1rem;">
										
										<span>News</span>
									</a>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                
					<i class="fas fa-clipboard"></i>
				
				<span>C.I.</span>
			</a>
			
					<ul id="collapse3" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
											
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-19" aria-expanded="true" aria-controls="level3-19" style="margin: 0 1rem;">
							
									<span>Commandes</span>
								</a>
						
									<ul id="level3-19" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-19" data-parent="#collapse3">
								
											<li class="nav-item">
												<a href="/Gestion/FramGes1.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Suppression-commande" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Modification-commande" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Ajout-cadence" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajouter cadence</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Modif/supres-cadence" class="nav-link" style="margin-left: 2rem;">
													
													<span>Mod/Sup cadence</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-20" aria-expanded="true" aria-controls="level3-20" style="margin: 0 1rem;">
							
									<span>Demande</span>
								</a>
						
									<ul id="level3-20" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-20" data-parent="#collapse3">
								
											<li class="nav-item">
												<a href="/gestion/demand_ci.cfm?sans_client=1" class="nav-link" style="margin-left: 2rem;">
													
													<span>Demande création CI</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/gestion/voir_demand.cfm?trouver=0" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste demande création CI</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-21" aria-expanded="true" aria-controls="level3-21" style="margin: 0 1rem;">
							
									<span>Edition</span>
								</a>
						
									<ul id="level3-21" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-21" data-parent="#collapse3">
								
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Editer_CommandeInterne" class="nav-link" style="margin-left: 2rem;">
													
													<span>Editer CI</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Creer_ARC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Accusé Réception</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-22" aria-expanded="true" aria-controls="level3-22" style="margin: 0 1rem;">
							
									<span>Besoins</span>
								</a>
						
									<ul id="level3-22" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-22" data-parent="#collapse3">
								
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Ajouter_Besoins" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajouter</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Mod/Supp_Besoins" class="nav-link" style="margin-left: 2rem;">
													
													<span>Mod/Sup</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=Interro_Besoins" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-23" aria-expanded="true" aria-controls="level3-23" style="margin: 0 1rem;">
							
									<span>Opérations</span>
								</a>
						
									<ul id="level3-23" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-23" data-parent="#collapse3">
								
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Ajouter_Operations" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajouter</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Modifier_Operations" class="nav-link" style="margin-left: 2rem;">
													
													<span>Mod/Sup</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/livraison/Boncolis.cfm?action=suivi" class="nav-link" style="margin: 0 1rem;">
										
										<span>Suivi colis</span>
									</a>
							
						</li>
						
								<li class="nav-item">
									<a href="/livraison/transporteur.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Transporteurs</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/facture/facattenteprecision.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Factures Bloquées</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/qualite/facattentedecision.cfm?decideur=commercial" class="nav-link" style="margin: 0 1rem;">
										
										<span>Paiements bloqués</span>
									</a>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                
					<i class="fas fa-truck-loading"></i>
				
				<span>Stocks</span>
			</a>
			
					<ul id="collapse4" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
											
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-28" aria-expanded="true" aria-controls="level3-28" style="margin: 0 1rem;">
							
									<span>Transaction</span>
								</a>
						
									<ul id="level3-28" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-28" data-parent="#collapse4">
								
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=EN" class="nav-link" style="margin-left: 2rem;">
													
													<span>Entrée stock magasin</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=SA" class="nav-link" style="margin-left: 2rem;">
													
													<span>Sortie magasin vers atelier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=RT" class="nav-link" style="margin-left: 2rem;">
													
													<span>Retour atelier vers magasin</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=RF" class="nav-link" style="margin-left: 2rem;">
													
													<span>Retour magasin vers fournisseur</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/roumanie/Rassemblerrom.cfm?type=CM" class="nav-link" style="margin-left: 2rem;">
													
													<span>Rassemblement DRT</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=CM" class="nav-link" style="margin-left: 2rem;">
													
													<span>Correction stock magasin</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=CA" class="nav-link" style="margin-left: 2rem;">
													
													<span>Correction stock atelier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=RA" class="nav-link" style="margin-left: 2rem;">
													
													<span>Rebuts atelier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=RM" class="nav-link" style="margin-left: 2rem;">
													
													<span>Rebuts magasin</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=sections" class="nav-link" style="margin-left: 2rem;">
													
													<span>Sortie sections outillages</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/bordereau_RF_recap.cfm?type=RF" class="nav-link" style="margin-left: 2rem;">
													
													<span>Récapitulatif des bordereaux RF</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
								<li class="nav-item">
									<a href="/Stock/StockCreer.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Créer</span>
									</a>
							
						</li>
						
								<li class="nav-item">
									<a href="/Stock/StockTran.cfm?type=Modifier_Matiere" class="nav-link" style="margin: 0 1rem;">
										
										<span>Modifier</span>
									</a>
							
						</li>
						
								<li class="nav-item">
									<a href="/Stock/StockTran.cfm?type=Supprimer_Matiere" class="nav-link" style="margin: 0 1rem;">
										
										<span>Supprimer</span>
									</a>
							
						</li>
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-32" aria-expanded="true" aria-controls="level3-32" style="margin: 0 1rem;">
							
									<span>Interroger</span>
								</a>
						
									<ul id="level3-32" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-32" data-parent="#collapse4">
								
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=Interroger_Fiche" class="nav-link" style="margin-left: 2rem;">
													
													<span>Fiche</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=Consommations" class="nav-link" style="margin-left: 2rem;">
													
													<span>Consommations</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=Interroger_Mouvements" class="nav-link" style="margin-left: 2rem;">
													
													<span>Mouvements</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/Stock_histoire.cfm?date=0&amp;codematiere=0" class="nav-link" style="margin-left: 2rem;">
													
													<span>Stock à une date</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=Total_Mouvements" class="nav-link" style="margin-left: 2rem;">
													
													<span>Conso Matière</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/StockTran.cfm?type=Besoins" class="nav-link" style="margin-left: 2rem;">
													
													<span>Besoins</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/Choix_tout_besoin.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Tous les besoins</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/roumanie/saisieetatcomrom.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Commandes DRT</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/framRFQ.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste RFQ</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/fourn/incoherence_prix.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Incohérence prix</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
								<li class="nav-item">
									<a href="/Stock/StockTran.cfm?type=Mouvement_Matiere" class="nav-link" style="margin: 0 1rem;">
										
										<span>Valeur</span>
									</a>
							
						</li>
						
								<li class="nav-item">
									<a href="/Stock/StockTran.cfm?type=Utilisation_Matiere" class="nav-link" style="margin: 0 1rem;">
										
										<span>Utilisation</span>
									</a>
							
						</li>
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-35" aria-expanded="true" aria-controls="level3-35" style="margin: 0 1rem;">
							
									<span>Etiquettes</span>
								</a>
						
									<ul id="level3-35" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-35" data-parent="#collapse4">
								
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Fournisseur" class="nav-link" style="margin-left: 2rem;">
													
													<span>Fournisseur</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/FramClient.cfm?menu1=Client" class="nav-link" style="margin-left: 2rem;">
													
													<span>Client</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramCi.cfm?menu1=Produit" class="nav-link" style="margin-left: 2rem;">
													
													<span>Produit</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Palette" class="nav-link" style="margin-left: 2rem;">
													
													<span>Magasin palette</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Matiere" class="nav-link" style="margin-left: 2rem;">
													
													<span>Magasin petite</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/stock/etiq.cfm?menu1=etiqdetail" class="nav-link" style="margin-left: 2rem;">
													
													<span>Outils</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/fpdf/application/etiquetteColorants.php" class="nav-link" style="margin-left: 2rem;">
													
													<span>Moulage</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
								<li class="nav-item">
									<a href="/Stock/ArchivCertifConf.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Archiver Cert. Conf.</span>
									</a>
							
						</li>
						
								<li class="nav-item">
									<a href="/Stock/stock_atelier.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Stock atelier &gt; 3sem</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-38" aria-expanded="true" aria-controls="level3-38" style="margin: 0 1rem;">
							
									<span>Inventaires Tournants</span>
								</a>
						
									<ul id="level3-38" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-38" data-parent="#collapse4">
								
											<li class="nav-item">
												<a href="/Stock/ListeInventTourn.cfm?type=ma" class="nav-link" style="margin-left: 2rem;">
													
													<span>Matières</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/ListeInventTourn.cfm?type=ou" class="nav-link" style="margin-left: 2rem;">
													
													<span>Outillages</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/ListeInventTourn.cfm?type=pf" class="nav-link" style="margin-left: 2rem;">
													
													<span>Produits Finis</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Stock/ArchivFicheInvent.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Archiver Fiche Inv</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/stock/stat_invent.cfm?date=0" class="nav-link" style="margin-left: 2rem;">
													
													<span>Stat Inventaire</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/stock/invent_force.cfm?date=0" class="nav-link" style="margin-left: 2rem;">
													
													<span>Inventaires forcés</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/livraison/listeblman.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Liste BL manuels</span>
									</a>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                
					<i class="fas fa-drafting-compass"></i>
				
				<span>Technique</span>
			</a>
			
					<ul id="collapse5" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
											
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-40" aria-expanded="true" aria-controls="level3-40" style="margin: 0 1rem;">
							
									<span>Dossier Technique</span>
								</a>
						
									<ul id="level3-40" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-40" data-parent="#collapse5">
								
											<li class="nav-item">
												<a href="/Tech/TechRefInt.cfm?menu=Interroger_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger</span>
												</a>
											</li>
										
											<div class="sidebar-heading bg-light text-dark" style="padding-left: 2rem;">Fiche produit</div>
										
											<li class="nav-item">
												<a href="/Tech/TechRefCreer.cfm?menu1=Créer Référence" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Modifier_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Duppliquer_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Dupliquer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Transferer_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Transférer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Supprimer_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-41" aria-expanded="true" aria-controls="level3-41" style="margin: 0 1rem;">
							
									<span>Nomenclature</span>
								</a>
						
									<ul id="level3-41" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-41" data-parent="#collapse5">
								
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Ajouter" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajout</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Modifier" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Interroger" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/tech/nomencl_dupliq.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Dupliquer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Supprimer" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Simul_mat.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Simulation matière</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-42" aria-expanded="true" aria-controls="level3-42" style="margin: 0 1rem;">
							
									<span>Gamme</span>
								</a>
						
									<ul id="level3-42" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-42" data-parent="#collapse5">
								
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Ajouter_Gamme" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajout</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Modifier_Gamme" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Interroger_Gamme" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Supprimer_Gamme" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-43" aria-expanded="true" aria-controls="level3-43" style="margin: 0 1rem;">
							
									<span>Outillages</span>
								</a>
						
									<ul id="level3-43" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-43" data-parent="#collapse5">
								
											<div class="sidebar-heading bg-light text-dark" style="padding-left: 2rem;">Outillage</div>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Interroger_Outil" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom2.cfm?menu1=Creer_Outil" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Ajouter_Outil" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajout</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Modifier_Outil" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Dupliquer_Outil" class="nav-link" style="margin-left: 2rem;">
													
													<span>Dupliquer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Tech_trans_outil.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Transfert</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Supprimer_Outil" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/TechRefOuListe.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste Moules</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Commentaire_Outil" class="nav-link" style="margin-left: 2rem;">
													
													<span>Commentaire Outil</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/listeoutils_search.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste outils</span>
												</a>
											</li>
										
											<div class="sidebar-heading bg-light text-dark" style="padding-left: 2rem;">Fiche Essai</div>
										
											<li class="nav-item">
												<a href="/fourn/crea_outi.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Création essai outillage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/fourn/list_essai_outi.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste des essais outillage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/fourn/liste_essai_outi_solder.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste des essais soldés</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-44" aria-expanded="true" aria-controls="level3-44" style="margin: 0 1rem;">
							
									<span>Gestion plans clients</span>
								</a>
						
									<ul id="level3-44" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-44" data-parent="#collapse5">
								
											<li class="nav-item">
												<a href="/Tech/Plancligest.cfm?action=classer" class="nav-link" style="margin-left: 2rem;">
													
													<span>Classer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Plancligest.cfm?action=lister" class="nav-link" style="margin-left: 2rem;">
													
													<span>Lister/afficher</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Plancligest.cfm?action=Rechercher" class="nav-link" style="margin-left: 2rem;">
													
													<span>Rechercher</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-45" aria-expanded="true" aria-controls="level3-45" style="margin: 0 1rem;">
							
									<span>Indices</span>
								</a>
						
									<ul id="level3-45" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-45" data-parent="#collapse5">
								
											<li class="nav-item">
												<a href="/Tech/TechIndCreer.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Fram.cfm?menu1=Changer_Valeur" class="nav-link" style="margin-left: 2rem;">
													
													<span>Valeur</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Fram.cfm?menu1=Modifier_Indice" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Fram.cfm?menu1=Supprimer_Indice" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Fram.cfm?menu1=Histo_Indice" class="nav-link" style="margin-left: 2rem;">
													
													<span>Historique</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/TechIndListe.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-46" aria-expanded="true" aria-controls="level3-46" style="margin: 0 1rem;">
							
									<span>Sections</span>
								</a>
						
									<ul id="level3-46" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-46" data-parent="#collapse5">
								
											<li class="nav-item">
												<a href="/Tech/TechSecCreer.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/TechSecListe.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-47" aria-expanded="true" aria-controls="level3-47" style="margin: 0 1rem;">
							
									<span>Machines</span>
								</a>
						
									<ul id="level3-47" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-47" data-parent="#collapse5">
								
											<div class="sidebar-heading bg-light text-dark" style="padding-left: 2rem;">GIM</div>
										
											<li class="nav-item">
												<a href="/Tech/TechMacGimCreer.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/TechMacGim.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Fram.cfm?menu1=Supprimer_Gim" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<div class="sidebar-heading bg-light text-dark" style="padding-left: 2rem;">Machines</div>
										
											<li class="nav-item">
												<a href="/Tech/TechMacMacCreer.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/TechMacMacListe.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Fram.cfm?menu1=Ajouter_Machine" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajouter GIM</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Fram.cfm?menu1=Retirer_Machine" class="nav-link" style="margin-left: 2rem;">
													
													<span>Retirer GIM</span>
												</a>
											</li>
										
											<hr class="sidebar-divider">
										
											<li class="nav-item">
												<a href="/Tech/vitesse/index.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Vitesses</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/tech/vitesse/list_trs.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>T.R.S.</span>
												</a>
											</li>
										
											<hr class="sidebar-divider">
										
											<li class="nav-item">
												<a href="/Tech/qualmach.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Qualif machine</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-48" aria-expanded="true" aria-controls="level3-48" style="margin: 0 1rem;">
							
									<span>Investissements</span>
								</a>
						
									<ul id="level3-48" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-48" data-parent="#collapse5">
								
											<li class="nav-item">
												<a href="http://192.78.232.156/banque/investissements/fiche.cfm?action=creer&amp;societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/banque/investissements/fiche.cfm?action=modifier&amp;societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/banque/investissements/fiche.cfm?action=Editer&amp;societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Editer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/banque/investissements/fiche.cfm?action=supprimer&amp;societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/banque/investissements/fiche.cfm?action=Lister&amp;societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Lister</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/banque/investissements/visas.cfm?societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Visas</span>
												</a>
											</li>
										
											<div class="sidebar-heading bg-light text-dark" style="padding-left: 2rem;">Notes de crédit</div>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/banque/investissements/AffecteCommande.cfm?societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Affecter une commande</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/banque/investissements/AffecteHeures.cfm?societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Affecter heures</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/banque/investissements/notecredit.cfm?action=Lister&amp;societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Lister</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/banque/investissements/notecredit.cfm?action=Editer&amp;societe=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Editer</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/Imprime/FramDate.cfm?menu1=Efficacite_processus_preparation_production" class="nav-link" style="margin: 0 1rem;">
										
										<span>Efficacité processus prep.</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/tech/nvxproduitsencours.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Liste des nvx produits en cours</span>
									</a>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                
					<i class="fas fa-piggy-bank"></i>
				
				<span>Crédits d'impôts</span>
			</a>
			
					<ul id="collapse6" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-51" aria-expanded="true" aria-controls="level3-51" style="margin: 0 1rem;">
							
									<span>Gestion des crédits d'impôts</span>
								</a>
						
									<ul id="level3-51" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-51" data-parent="#collapse6">
								
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/projets.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Gestion des projets</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/projets.cfm?action=intervenants" class="nav-link" style="margin-left: 2rem;">
													
													<span>Intervenants</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/projets.cfm?action=affecterH" class="nav-link" style="margin-left: 2rem;">
													
													<span>Affecter des heures</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/csv.php?soc=DC" class="nav-link" style="margin-left: 2rem;">
													
													<span>Heures par fichiers(CSV)</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/projets.cfm?action=achats" class="nav-link" style="margin-left: 2rem;">
													
													<span>Affecter des achats</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/amortissements.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Amortissements</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/projets.cfm?action=r%E9cap&amp;nature=T" class="nav-link" style="margin-left: 2rem;">
													
													<span>Récap projet</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-52" aria-expanded="true" aria-controls="level3-52" style="margin: 0 1rem;">
							
									<span>C.I.R.</span>
								</a>
						
									<ul id="level3-52" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-52" data-parent="#collapse6">
								
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/valorisationCIR.cfm?action=subventions" class="nav-link" style="margin-left: 2rem;">
													
													<span>Subventions</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/valorisationCIR.cfm?action=tauxcir" class="nav-link" style="margin-left: 2rem;">
													
													<span>Taux annuels</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/valorisationCIR.cfm?action=recapinterv" class="nav-link" style="margin-left: 2rem;">
													
													<span>Récap/intervenant</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/tauxhoraire.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Taux horaires</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/valorisationCIR.cfm?action=synthese" class="nav-link" style="margin-left: 2rem;">
													
													<span>Synthèse annuelle</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/sauvesynthese.cfm?Ci=CIR" class="nav-link" style="margin-left: 2rem;">
													
														<i class="fas fa-file-pdf"></i>
													
													<span>Sauvegarde en PDF</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://www.enseignementsup-recherche.gouv.fr/cid59828/guide-du-credit-d-impot-recherche-2013.html" class="nav-link" style="margin-left: 2rem;">
													
													<span>Guide fiscal CIR</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-53" aria-expanded="true" aria-controls="level3-53" style="margin: 0 1rem;">
							
									<span>C.I.I.</span>
								</a>
						
									<ul id="level3-53" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-53" data-parent="#collapse6">
								
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/valorisationCII.cfm?action=tauxcii" class="nav-link" style="margin-left: 2rem;">
													
													<span>Taux annuels</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/valorisationCII.cfm?action=recapinterv" class="nav-link" style="margin-left: 2rem;">
													
													<span>Récap/intervenant</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/tauxhoraire.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Taux horaires</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/valorisationCII.cfm?action=synthese" class="nav-link" style="margin-left: 2rem;">
													
													<span>Synthèse annuelle</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/sauvesynthese.cfm?Ci=CII" class="nav-link" style="margin-left: 2rem;">
													
														<i class="fas fa-file-pdf"></i>
													
													<span>Sauvegarde en PDF</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://www.entreprises.gouv.fr/politique-et-enjeux/credit-impot-innovation" class="nav-link" style="margin-left: 2rem;">
													
													<span>Guide fiscal CII</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-54" aria-expanded="true" aria-controls="level3-54" style="margin: 0 1rem;">
							
									<span>Gestion des minimis</span>
								</a>
						
									<ul id="level3-54" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-54" data-parent="#collapse6">
								
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/Minimi.cfm?action=param" class="nav-link" style="margin-left: 2rem;">
													
													<span>Gestion des seuils</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/Minimi.cfm?action=projets" class="nav-link" style="margin-left: 2rem;">
													
													<span>Gestion des projets</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/Minimi.cfm?action=synthese" class="nav-link" style="margin-left: 2rem;">
													
													<span>Synthèse annuelle</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="http://192.78.232.156/cir/sauvesynthese.cfm?Ci=Minimi" class="nav-link" style="margin-left: 2rem;">
													
														<i class="fas fa-file-pdf"></i>
													
													<span>Sauvegarde en PDF</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                
					<i class="fas fa-code-branch"></i>
				
				<span>Gestion CN</span>
			</a>
			
					<ul id="collapse7" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/gppercage.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Gestion production</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/taches/listetache.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Gestion des tâches</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/compo.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Composition graphique</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/supports.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Supports</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/polices.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Polices &amp; logos</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/graphpercagesilverlight/percage.web/" class="nav-link" style="margin: 0 1rem;">
										
										<span>Graphpercage</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/uploader.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Uploader fichier dans la base</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/grille.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Transformation (rotat, grille, dual)</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/generateur.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Générateur de fichier machine</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/downloader.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Downloader fichier machine</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/fichprod.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Fiches de production</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/fichtech.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Fiches techniques</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/barillets.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Barillets</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GestionCN/historique.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Historique</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-69" aria-expanded="true" aria-controls="level3-69" style="margin: 0 1rem;">
							
									<span>Code barre &amp; formats photo</span>
								</a>
						
									<ul id="level3-69" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-69" data-parent="#collapse7">
								
											<li class="nav-item">
												<a href="/a/creer_standard.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Code barre standard</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/a/creer_bacs.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Codes barre bacs</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/GestionCN/format_photo_scan.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Scanner une étiquette</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/GestionCN/ci_format_photo.cfm?editer=1" class="nav-link" style="margin-left: 2rem;">
													
													<span>Rééditer une étiquette</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/GestionCN/format_photo_prix.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Fixer les prix</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-70" aria-expanded="true" aria-controls="level3-70" style="margin: 0 1rem;">
							
									<span>Paramétrage</span>
								</a>
						
									<ul id="level3-70" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-70" data-parent="#collapse7">
								
											<li class="nav-item">
												<a href="/GestionCN/parametrage.cfm?action=operateurs" class="nav-link" style="margin-left: 2rem;">
													
													<span>Opérateurs</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/GestionCN/parametrage.cfm?action=contreplaques" class="nav-link" style="margin-left: 2rem;">
													
													<span>Contreplaques</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/GestionCN/parametrage.cfm?action=forets" class="nav-link" style="margin-left: 2rem;">
													
													<span>Forets</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/GestionCN/parametrage.cfm?action=matieres" class="nav-link" style="margin-left: 2rem;">
													
													<span>Matières</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/GestionCN/parametrage.cfm?action=machines" class="nav-link" style="margin-left: 2rem;">
													
													<span>Machines</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/GestionCN/parametrage.cfm?action=textures" class="nav-link" style="margin-left: 2rem;">
													
													<span>Textures</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/GestionCN/editparam.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Paramètres généraux</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/GestionCN/tarifs.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Tarifs</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                
					<i class="fas fas fa-euro-sign"></i>
				
				<span>Commercial</span>
			</a>
			
					<ul id="collapse8" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-71" aria-expanded="true" aria-controls="level3-71" style="margin: 0 1rem;">
							
									<span>Affaires</span>
								</a>
						
									<ul id="level3-71" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-71" data-parent="#collapse8">
								
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Calculer_Prix" class="nav-link" style="margin-left: 2rem;">
													
													<span>Calcul</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramAffaire.cfm?menu1=InterroAffaire" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger affaire</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramAffaire.cfm?menu1=ModifAffaire" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier affaire</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramAffaire.cfm?menu1=RechAffaire" class="nav-link" style="margin-left: 2rem;">
													
													<span>Recherche affaire/CP Delta</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramAffaire.cfm?menu1=ListAffClients&amp;nbfram=2" class="nav-link" style="margin-left: 2rem;">
													
													<span>Listing affaires par client</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramAffaire.cfm?menu1=ListAffDates" class="nav-link" style="margin-left: 2rem;">
													
													<span>Listing affaires par dates</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-72" aria-expanded="true" aria-controls="level3-72" style="margin: 0 1rem;">
							
									<span>Offre de prix</span>
								</a>
						
									<ul id="level3-72" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-72" data-parent="#collapse8">
								
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Creer_Prix" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer nouvelle offre</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramPrix.cfm?menu1=Modifier_Prix" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier offre</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramPrix.cfm?menu1=Modifier_Indicer" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer contre-offre</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramPrix.cfm?menu1=Supprimer_Prix" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramPrix.cfm?menu1=Interroger_Prix" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramPrix.cfm?menu1=Transferer_Prix" class="nav-link" style="margin-left: 2rem;">
													
													<span>Transférer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramNom.cfm?menu1=Liste_Prix" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramPrix.cfm?menu1=Editer_Prix" class="nav-link" style="margin-left: 2rem;">
													
													<span>Editer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramPrix.cfm?menu1=Reediter_Prix" class="nav-link" style="margin-left: 2rem;">
													
													<span>Rééditer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramPrix.cfm?menu1=Dupliquer" class="nav-link" style="margin-left: 2rem;">
													
													<span>Dupliquer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramTableau.cfm?menu1=gestion_tableau" class="nav-link" style="margin-left: 2rem;">
													
													<span>Gestion tableau</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/gestionrelances.cfm?lettre=TOUT" class="nav-link" style="margin-left: 2rem;">
													
													<span>Gestion des relances</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/evolutionoffreprixindicees.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Evolution prix indicés</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/FramAffaire.cfm?menu1=NouvelleDemande" class="nav-link" style="margin-left: 2rem;">
													
													<span>Saisie nouvelle demande de prix</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-73" aria-expanded="true" aria-controls="level3-73" style="margin: 0 1rem;">
							
									<span>Statistiques</span>
								</a>
						
									<ul id="level3-73" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-73" data-parent="#collapse8">
								
											<li class="nav-item">
												<a href="/Tech/StatNbReponsesJour.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Nombre de relances par jour</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/StatNbDemandeClient.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Nombre de demandes par client</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/StatNbDemandePrix.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Nombre de demandes de prix</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/stat_delai_jour.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Délai de réponses en jours</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/StatDelaiReponsesMois.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Délai de réponses/client/mois</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/statapplicationsproduits.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>% Nouveaux produits par application</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/statoffreparcommercial.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>% Offres commandées par commercial</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Statreu_sec_cli.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Taux de réussite par secteur &amp; client</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Stat_ca_offre.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>C.A. des offres métals</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Stat_ca_offre_cab.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>C.A. des offres câblages</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Tech/Stat_reussit_section.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Taux de réussite par section</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                
					<i class="fas fa-users"></i>
				
				<span>Clients</span>
			</a>
			
					<ul id="collapse9" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-74" aria-expanded="true" aria-controls="level3-74" style="margin: 0 1rem;">
							
									<span>Prospects</span>
								</a>
						
									<ul id="level3-74" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-74" data-parent="#collapse9">
								
											<li class="nav-item">
												<a href="/Client/CreerProspect.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/modifierprospect.cfm?search=1" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/interroprospect.cfm?search=1" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/supprimerprospect.cfm?search=1" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/CreerClient.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Transfert -&gt; Client</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/tri.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Tri &amp; localisation</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-75" aria-expanded="true" aria-controls="level3-75" style="margin: 0 1rem;">
							
									<span>Clients</span>
								</a>
						
									<ul id="level3-75" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-75" data-parent="#collapse9">
								
											<li class="nav-item">
												<a href="/Client/CreerClient.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/InterroClient.cfm?menu=INTERROGER_CLIENT" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/ModifierClientCode.cfm?menu=MODIFIER" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/SuppClientCode.cfm?menu=SUPPRIMER_CLIENT" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-76" aria-expanded="true" aria-controls="level3-76" style="margin: 0 1rem;">
							
									<span>Contacts</span>
								</a>
						
									<ul id="level3-76" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-76" data-parent="#collapse9">
								
											<li class="nav-item">
												<a href="/Client/ListDonneesCode.cfm?menu=LISTE" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/FramClient.cfm?menu1=AJOUTER" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajouter</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/FramClient.cfm?menu1=Modifier_Donnees" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/FramClient.cfm?menu1=SUPPRIMER" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-77" aria-expanded="true" aria-controls="level3-77" style="margin: 0 1rem;">
							
									<span>Agents</span>
								</a>
						
									<ul id="level3-77" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-77" data-parent="#collapse9">
								
											<li class="nav-item">
												<a href="/Client/creerAgent.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/modifagent.cfm?menu=MODIF_AGENT" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/interagent.cfm?menu=INTER_AGENT" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/suppragent.cfm?menu=SUPPR_AGENT" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/portagent.cfm?menu=PORTEFEUILLE" class="nav-link" style="margin-left: 2rem;">
													
													<span>Portefeuille</span>
												</a>
											</li>
										
											<div class="sidebar-heading bg-light text-dark" style="padding-left: 2rem;">Contacts agent</div>
										
											<li class="nav-item">
												<a href="/Client/ListDonneesAgent.cfm?menu=LISTE" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/AjoutDonneesAgent.cfm?menu=AJOUTER" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajouter</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/DonneesModAgent.cfm?menu=Modifier_Donnees" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Client/SuppDonneesAgent.cfm?menu=SUPPRIMER" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-78" aria-expanded="true" aria-controls="level3-78" style="margin: 0 1rem;">
							
									<span>Statistiques</span>
								</a>
						
									<ul id="level3-78" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-78" data-parent="#collapse9">
								
											<li class="nav-item">
												<a href="/Client/Tarif_client.cfm?menu=TARIF_CLIENT" class="nav-link" style="margin-left: 2rem;">
													
													<span>Tarif client</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Gestion/rapport_clients.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Analyse CA/Secteur/Client</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/facture/calculcouts_temp.php" class="nav-link" style="margin-left: 2rem;">
													
													<span>Stats. facturation</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                
					<i class="fas fa-shopping-cart"></i>
				
				<span>Fournisseurs</span>
			</a>
			
					<ul id="collapse10" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-79" aria-expanded="true" aria-controls="level3-79" style="margin: 0 1rem;">
							
									<span>Fournisseurs</span>
								</a>
						
									<ul id="level3-79" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-79" data-parent="#collapse10">
								
											<li class="nav-item">
												<a href="/Fourn/CreerFourn.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Selection_Fournisseur" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Mod/Supp_Fournisseur" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier/Supprimer</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-80" aria-expanded="true" aria-controls="level3-80" style="margin: 0 1rem;">
							
									<span>Approvisionner</span>
								</a>
						
									<ul id="level3-80" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-80" data-parent="#collapse10">
								
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Creer_Appro" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/MenuStockApproMod.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramAppro.cfm?menu1=Supprimer_Appro" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramAppro.cfm?menu1=Interroger_Appro" class="nav-link" style="margin-left: 2rem;">
													
													<span>Interroger</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramAppro.cfm?menu1=Solder_Appro" class="nav-link" style="margin-left: 2rem;">
													
													<span>Solder</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramAppro.cfm?menu1=Desolder_Appro" class="nav-link" style="margin-left: 2rem;">
													
													<span>Désolder</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramAppro.cfm?menu1=Editer_Commande" class="nav-link" style="margin-left: 2rem;">
													
													<span>Editer</span>
												</a>
											</li>
										
											<div class="sidebar-heading bg-light text-dark" style="padding-left: 2rem;">Liste appros</div>
										
											<li class="nav-item">
												<a href="/Fourn/Liste_Commandes_manuelles.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Commandes manuelles</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/StockTran.cfm?type=Liste_Appro" class="nav-link" style="margin-left: 2rem;">
													
													<span>Par matière</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="#" class="nav-link" style="margin-left: 2rem;">
													
													<span>Par date (appro manuelle)</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/ListeCdeFourn.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Par fournisseur</span>
												</a>
											</li>
										
											<div class="sidebar-heading bg-light text-dark" style="padding-left: 2rem;">Gestion ARC</div>
										
											<li class="nav-item">
												<a href="/Fourn/ARC.cfm?menu1=attente" class="nav-link" style="margin-left: 2rem;">
													
													<span>Attente (-3jours)</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/ARC.cfm?menu1=retard" class="nav-link" style="margin-left: 2rem;">
													
													<span>Retard (+3jours)</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/ARC.cfm?menu1=Suivre" class="nav-link" style="margin-left: 2rem;">
													
													<span>A suivre</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/RelanceAppro.cfm?Menu=Relance" class="nav-link" style="margin-left: 2rem;">
													
													<span>Relance message</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-81" aria-expanded="true" aria-controls="level3-81" style="margin: 0 1rem;">
							
									<span>Fiches essai</span>
								</a>
						
									<ul id="level3-81" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-81" data-parent="#collapse10">
								
											<li class="nav-item">
												<a href="/Fourn/list_essai_metal.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste des essais métal</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/list_essai_cable.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste des essais cablage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/list_essai_trait.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste des essais sous traitance</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/liste_essai_solder.cfm?var_met=1&amp;var_cab=0&amp;var_trait=0" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste des essais soldés métal</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/liste_essai_solder.cfm?var_met=0&amp;var_cab=1&amp;var_trait=0" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste des essais soldés cablage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/liste_essai_solder.cfm?var_met=0&amp;var_cab=0&amp;var_trait=1" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste des essais soldés ST</span>
												</a>
											</li>
										
											<div class="sidebar-heading bg-light text-dark" style="padding-left: 2rem;">Statistiques</div>
										
											<li class="nav-item">
												<a href="/Fourn/stat_metal.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Statistique métal</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/stat_cab.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Statistique cablage</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/stat_ST.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Statistique ST</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-82" aria-expanded="true" aria-controls="level3-82" style="margin: 0 1rem;">
							
									<span>Références</span>
								</a>
						
									<ul id="level3-82" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-82" data-parent="#collapse10">
								
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Ajouter_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajouter</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Mod/Supp_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier/Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Negociation" class="nav-link" style="margin-left: 2rem;">
													
													<span>Négociation</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Consulter_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Consulter</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Indicer_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Indicer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/FramFourn.cfm?menu1=Desindicer_Reference" class="nav-link" style="margin-left: 2rem;">
													
													<span>Desindicer</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-83" aria-expanded="true" aria-controls="level3-83" style="margin: 0 1rem;">
							
									<span>Outils</span>
								</a>
						
									<ul id="level3-83" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-83" data-parent="#collapse10">
								
											<li class="nav-item">
												<a href="/Fourn/RechProdFour.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Matière/Four</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/CompareFourn.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Compare four</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/rechmati.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste matières</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/EvoPrix2.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Evolution prix</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/filtre_monofourn.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Mat. Mono-fournisseur</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/listefourauto.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Fourn automobile</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/fourn/certif_expire.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Certificat expiré</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/saisiestat_ajax.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Statistiques</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Fourn/stat_achat_choix.cfm?etape=0&amp;choix=0" class="nav-link" style="margin-left: 2rem;">
													
													<span>Valeurs achats</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Archivage/archive_achat.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Factures fournisseurs</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                
					<i class="fas fa-tasks"></i>
				
				<span>Etats de gestion</span>
			</a>
			
					<ul id="collapse11" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/Imprime/FramDate.cfm?menu1=Prevision" class="nav-link" style="margin: 0 1rem;">
										
										<span>Prévisions CA</span>
									</a>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                
					<i class="fas fa-file-invoice"></i>
				
				<span>Facture</span>
			</a>
			
					<ul id="collapse12" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-85" aria-expanded="true" aria-controls="level3-85" style="margin: 0 1rem;">
							
									<span>Liste des BL</span>
								</a>
						
									<ul id="level3-85" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-85" data-parent="#collapse12">
								
											<li class="nav-item">
												<a href="/Facture/BLnonFac.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Tous</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Tous_Bl" class="nav-link" style="margin-left: 2rem;">
													
													<span>Sur une période</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/blazero.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>BL à zero</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/blnonvalide.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>BL non validé</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramBlFac.cfm?menu1=Mise_a_zero_bl" class="nav-link" style="margin-left: 2rem;">
													
													<span>Valorisation à zero</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-86" aria-expanded="true" aria-controls="level3-86" style="margin: 0 1rem;">
							
									<span>Facture</span>
								</a>
						
									<ul id="level3-86" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-86" data-parent="#collapse12">
								
											<li class="nav-item">
												<a href="/Facture/genefac1.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Création</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Modifier_Facture" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modification</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Ajouter_Produit" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ajout produit</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac2.cfm?menu1=Facture_Ref" class="nav-link" style="margin-left: 2rem;">
													
													<span>Sans BL</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Reediter_Facture" class="nav-link" style="margin-left: 2rem;">
													
													<span>Réedition</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Valider_Facture" class="nav-link" style="margin-left: 2rem;">
													
													<span>Validation</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Devalider_Facture" class="nav-link" style="margin-left: 2rem;">
													
													<span>Dévalidation</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Validation_groupee" class="nav-link" style="margin-left: 2rem;">
													
													<span>Validation groupée</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Liste_facture_client" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste par client</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/liste_fac_mail.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste fac e-mail</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Liste_facture" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Liste_section" class="nav-link" style="margin-left: 2rem;">
													
													<span>C.A. par section</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=CA_clients" class="nav-link" style="margin-left: 2rem;">
													
													<span>C.A. par client</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=CA_prod" class="nav-link" style="margin-left: 2rem;">
													
													<span>C.A. par produit</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=CA_vente" class="nav-link" style="margin-left: 2rem;">
													
													<span>Production vendue</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/Framdate.cfm?menu1=Liste_BL" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste BLNF</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/facture/ob10/fac_ob10.cfm?gene=1" class="nav-link" style="margin-left: 2rem;">
													
													<span>Fichier OB10</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/infoarchivagefaccli.htm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Infos archivage</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-87" aria-expanded="true" aria-controls="level3-87" style="margin: 0 1rem;">
							
									<span>Prestations</span>
								</a>
						
									<ul id="level3-87" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-87" data-parent="#collapse12">
								
											<li class="nav-item">
												<a href="/Facture/FramFac2.cfm?menu1=Prestation" class="nav-link" style="margin-left: 2rem;">
													
													<span>Création</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Modifier_Prestation" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modification</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Interroger_Prestation" class="nav-link" style="margin-left: 2rem;">
													
													<span>Impression</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Valider_Prestation" class="nav-link" style="margin-left: 2rem;">
													
													<span>Validation</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Devalider_Prestation" class="nav-link" style="margin-left: 2rem;">
													
													<span>Dévalidation</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FacPresListe.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-88" aria-expanded="true" aria-controls="level3-88" style="margin: 0 1rem;">
							
									<span>Avoirs</span>
								</a>
						
									<ul id="level3-88" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-88" data-parent="#collapse12">
								
											<li class="nav-item">
												<a href="/Facture/geneavoir1.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Création</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramAv.cfm?menu1=Interroger_Avoir" class="nav-link" style="margin-left: 2rem;">
													
													<span>Imprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramAv.cfm?menu1=Valider_Avoir" class="nav-link" style="margin-left: 2rem;">
													
													<span>Validation</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FacBLDate.cfm?menu=Validation_avoir_groupee" class="nav-link" style="margin-left: 2rem;">
													
													<span>Validation groupée</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramAv.cfm?menu1=Devalider_Avoir" class="nav-link" style="margin-left: 2rem;">
													
													<span>Dévalidation</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramAv.cfm?menu1=Modifier_Avoir" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modification</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/Framfac.cfm?menu1=Prix_Revient" class="nav-link" style="margin-left: 2rem;">
													
													<span>Prix de revient</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FacAvListe.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/liste_av_mail.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste avoir e-mail</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Liste_avoir_client" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste par client</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-89" aria-expanded="true" aria-controls="level3-89" style="margin: 0 1rem;">
							
									<span>Proforma</span>
								</a>
						
									<ul id="level3-89" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-89" data-parent="#collapse12">
								
											<li class="nav-item">
												<a href="/Facture/genefacpro.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Création</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Modifier_Proforma" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modification</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Gene_Proforma" class="nav-link" style="margin-left: 2rem;">
													
													<span>Générer-Imprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Supprimer_Proforma" class="nav-link" style="margin-left: 2rem;">
													
													<span>Supprimer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Liste_proforma" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-90" aria-expanded="true" aria-controls="level3-90" style="margin: 0 1rem;">
							
									<span>Packing list</span>
								</a>
						
									<ul id="level3-90" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-90" data-parent="#collapse12">
								
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Creation_Packinglist" class="nav-link" style="margin-left: 2rem;">
													
													<span>Création</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Modification_Packinglist" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modification</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/FramFac.cfm?menu1=Suppression_Packinglist" class="nav-link" style="margin-left: 2rem;">
													
													<span>Suppression</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Edition_Packinglist" class="nav-link" style="margin-left: 2rem;">
													
													<span>Ré-édition</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-91" aria-expanded="true" aria-controls="level3-91" style="margin: 0 1rem;">
							
									<span>Paramètres</span>
								</a>
						
									<ul id="level3-91" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-91" data-parent="#collapse12">
								
											<li class="nav-item">
												<a href="/Facture/compte.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Radical comptes clients</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/MenuTva.htm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Comptes compta</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/ChangeNum.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>N° Facture</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/ChangeNumPro.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>N° Proforma</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/ChangeAv.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>N° Avoir</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/MenuDevise.htm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Devises</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/DateFact.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Date facturation</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-92" aria-expanded="true" aria-controls="level3-92" style="margin: 0 1rem;">
							
									<span>Transfert</span>
								</a>
						
									<ul id="level3-92" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-92" data-parent="#collapse12">
								
											<li class="nav-item">
												<a href="/Facture/FacNonTrans.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Facture non transférée</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/AvNonTrans.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Avoir non transféré</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Generer_Transfert" class="nav-link" style="margin-left: 2rem;">
													
													<span>Générer transfert</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/Transfert.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Trasférer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/listeJV.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Journal des ventes</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=echangebien" class="nav-link" style="margin-left: 2rem;">
													
													<span>Echange de biens</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/Facture/calculcouts_temp.php" class="nav-link" style="margin: 0 1rem;">
										
										<span>Statistiques</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-94" aria-expanded="true" aria-controls="level3-94" style="margin: 0 1rem;">
							
									<span>Purge</span>
								</a>
						
									<ul id="level3-94" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-94" data-parent="#collapse12">
								
											<li class="nav-item">
												<a href="/Facture/FramFac.cfm?menu1=Supprimer_Facture" class="nav-link" style="margin-left: 2rem;">
													
													<span>Facture/Prestation</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Effacer_Factures" class="nav-link" style="margin-left: 2rem;">
													
													<span>Sur une période</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramAv.cfm?menu1=Supprimer_Avoir" class="nav-link" style="margin-left: 2rem;">
													
													<span>Avoir</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Effacer_Avoirs" class="nav-link" style="margin-left: 2rem;">
													
													<span>Sur une période</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Facture/FramDate.cfm?menu1=Annule_transfert" class="nav-link" style="margin-left: 2rem;">
													
													<span>Annuler un transfert</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/facture/pointfac.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Point facturation</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/graph/application/graphique1.php?param=indicateur_facture&amp;an=2019&amp;mois=10" class="nav-link" style="margin: 0 1rem;">
										
										<span>Délai facturation</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/Facture/indicateur_facture2.php?an=2019&amp;mois=10" class="nav-link" style="margin: 0 1rem;">
										
										<span>% CA fact après 3j</span>
									</a>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                
					<i class="fas fa-search"></i>
				
				<span>Qualité</span>
			</a>
			
					<ul id="collapse13" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/Qualite/anomalie/index.cfm?navtype=7" class="nav-link" style="margin: 0 1rem;">
										
										<span>Fiches qualité</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-99" aria-expanded="true" aria-controls="level3-99" style="margin: 0 1rem;">
							
									<span>FNCM</span>
								</a>
						
									<ul id="level3-99" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-99" data-parent="#collapse13">
								
											<li class="nav-item">
												<a href="/Qualite/CreerFNCM.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/MajFNCM.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Mettre à jour</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/framelisteFNCM.htm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/FNCMedit.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Editer ficher</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/cotationFNCM.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Cotation</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-100" aria-expanded="true" aria-controls="level3-100" style="margin: 0 1rem;">
							
									<span>Métrologie</span>
								</a>
						
									<ul id="level3-100" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-100" data-parent="#collapse13">
								
											<li class="nav-item">
												<a href="/Qualite/AppMesure.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Appareils de mesure</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/appmesur_repar.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>En réparation</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/appmesur_rebut.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Appareils rebutés</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/appmesur_hist.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Historique vérification</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-101" aria-expanded="true" aria-controls="level3-101" style="margin: 0 1rem;">
							
									<span>Procédures</span>
								</a>
						
									<ul id="level3-101" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-101" data-parent="#collapse13">
								
											<li class="nav-item">
												<a href="/Qualite/MajBaseProc.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Mettre a jour la base</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/listProc.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste procédures</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/FrameProced.cfm?Menu=EditProc" class="nav-link" style="margin-left: 2rem;">
													
													<span>Edition procédure</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/FrameProced.cfm?Menu=EditPageDiffusion" class="nav-link" style="margin-left: 2rem;">
													
													<span>Page de diffusion</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/FrameProced.cfm?Menu=FramesaisieDiffusion" class="nav-link" style="margin-left: 2rem;">
													
													<span>Saisie diffusion</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/Listimp.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Liste des imprimés</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-102" aria-expanded="true" aria-controls="level3-102" style="margin: 0 1rem;">
							
									<span>Productivité</span>
								</a>
						
									<ul id="level3-102" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-102" data-parent="#collapse13">
								
											<li class="nav-item">
												<a href="/gestion/productivite/index.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Productivité</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/boite_idees/gestboiteidees.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Boite à idées</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/boite_idees/idee_soldee.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Idées soldées</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-103" aria-expanded="true" aria-controls="level3-103" style="margin: 0 1rem;">
							
									<span>Réunions qualité</span>
								</a>
						
									<ul id="level3-103" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-103" data-parent="#collapse13">
								
											<li class="nav-item">
												<a href="/Qualite/CreerReunion.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Créer</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/ModifReunion.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Modifier</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/CrEdit.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>CR Réunion</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/Qualite/convocation.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Mail convocation</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-104" aria-expanded="true" aria-controls="level3-104" style="margin: 0 1rem;">
							
									<span>Paramètres</span>
								</a>
						
									<ul id="level3-104" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-104" data-parent="#collapse13">
								
											<li class="nav-item">
												<a href="/utilitaires/participants.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Responsables</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/qualite/Type_RecordView.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Type</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-105" aria-expanded="true" aria-controls="level3-105" style="margin: 0 1rem;">
							
									<span>SAV</span>
								</a>
						
									<ul id="level3-105" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-105" data-parent="#collapse13">
								
											<li class="nav-item">
												<a href="/qualite/Problemes_RecordView.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Problèmes</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/qualite/Procedures_RecordView.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Procédures</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
                
					<i class="fas fa-warehouse"></i>
				
				<span>Services Tech.</span>
			</a>
			
					<ul id="collapse14" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				
							<hr class="sidebar-divider">
						
								<li class="nav-item">
									<a href="/GMAO/" class="nav-link" style="margin: 0 1rem;">
										
										<span>Maintenance/GMAO</span>
									</a>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-107" aria-expanded="true" aria-controls="level3-107" style="margin: 0 1rem;">
							
									<span>Releves</span>
								</a>
						
									<ul id="level3-107" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-107" data-parent="#collapse14">
								
											<li class="nav-item">
												<a href="/gmao/heures_machines.cfm?activetabmachine=tabEG01&amp;activetabreleve=tabHisto" class="nav-link" style="margin-left: 2rem;">
													
													<span>Compresseurs</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/servicestech/releves/edf.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>EDF / GDF</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/servicestech/releves/eau.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Eau de ville</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/servicestech/releves/puits.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Eau de puits</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/servicestech/releves/temp.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Température</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-108" aria-expanded="true" aria-controls="level3-108" style="margin: 0 1rem;">
							
									<span>Déchets</span>
								</a>
						
									<ul id="level3-108" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-108" data-parent="#collapse14">
								
											<li class="nav-item">
												<a href="/servicestech/dechets/debourbeur.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Vidange débourbeur</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/servicestech/dechets/dangereux.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Déchets dangereux</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
							<hr class="sidebar-divider">
													
								<li class="nav-item">
									<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#level3-109" aria-expanded="true" aria-controls="level3-109" style="margin: 0 1rem;">
							
									<span>Badgeuse</span>
								</a>
						
									<ul id="level3-109" class="navbar-nav collapse bg-gradient-dark level3-min" aria-labelledby="level3-109" data-parent="#collapse14">
								
											<li class="nav-item">
												<a href="/servicestech/badgeuse/badgeuse.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Gestion des badges</span>
												</a>
											</li>
										
											<li class="nav-item">
												<a href="/servicestech/badgeuse/liste_acces_badge.cfm" class="nav-link" style="margin-left: 2rem;">
													
													<span>Gestion des accès</span>
												</a>
											</li>
										
								</ul>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
                    <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
                
					<i class="fas fas fa-first-aid"></i>
				
				<span>Infirmerie</span>
			</a>
			
					<ul id="collapse15" class="navbar-nav collapse accordion bg-gradient-secondary" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				
								<li class="nav-item">
									<a href="/infirmerie/index.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Déclarer accident</span>
									</a>
							
						</li>
						
								<li class="nav-item">
									<a href="/infirmerie/Historique.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Historique</span>
									</a>
							
						</li>
						
								<li class="nav-item">
									<a href="/infirmerie/Statistique.cfm" class="nav-link" style="margin: 0 1rem;">
										
										<span>Statistique</span>
									</a>
							
						</li>
						
				</ul>
			
		</li>
		
		<li class="nav-item">
			
				    <a href="/gestion_menu.php" class="nav-link">
                
					<i class="fas fa-list"></i>
				
				<span>Gestion Menu</span>
			</a>
			
		</li>
		

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">
	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline" style="margin-top: 0.75rem;">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>
<!-- End of Sidebar -->