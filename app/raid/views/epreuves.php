<!DOCTYPE html>
<html>
<head>
	<title>Epreuves</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="retrouvez le site web de l'association Raid Icam"/>
	<link rel="shortcut icon" href="../../../library/img/favicon.ico"> 
	<link rel="stylesheet" href="../../style/default.css">
</head>
<body>
<!--******************************************************
************************ HEADER **************************
*******************************************************-->

<?php include("header.php"); ?>

<!--******************************************************
************************* BODY ***************************
*******************************************************-->

	<section id="page_epreuves">
		<nav id="nav_epreuves">
			<div id="depart_vide"></div>
			<div class="img_nav_epreuve">
				<img src="/library/img/epreuves/start.png">
			</div>
			<div class="img_nav_chemin">
				<?php echo('<img src="/library/img/epreuves/chemin/chemin_'.rand(1,11).'.png" class="img_nav_chemin">')?>
			</div>
			<div class="img_nav_epreuve">
				<img src="/library/img/epreuves/vtt.png">
			</div>
			<div class="img_nav_chemin">
				<?php echo('<img src="/library/img/epreuves/chemin/chemin_'.rand(1,11).'.png" class="img_nav_chemin">')?>
			</div>
			<div class="img_nav_epreuve">
				<img src="/library/img/epreuves/surprise.png">
			</div>
			<div class="img_nav_chemin">
				<?php echo('<img src="/library/img/epreuves/chemin/chemin_'.rand(1,11).'.png" class="img_nav_chemin">')?>
			</div>
			<div class="img_nav_epreuve">
				<img src="/library/img/epreuves/course.png">
			</div>
			<div class="img_nav_chemin">
				<?php echo('<img src="/library/img/epreuves/chemin/chemin_'.rand(1,11).'.png" class="img_nav_chemin">')?>
			</div>
			<div class="img_nav_epreuve">
				<img src="/library/img/epreuves/CO.png">
			</div>
			<div class="img_nav_chemin">
				<?php echo('<img src="/library/img/epreuves/chemin/chemin_'.rand(1,11).'.png" class="img_nav_chemin">')?>
			</div>
			<div class="img_nav_epreuve">
				<img src="/library/img/epreuves/runbike.png">
			</div>
			<div class="img_nav_chemin">
				<?php echo('<img src="/library/img/epreuves/chemin/chemin_'.rand(1,11).'.png" class="img_nav_chemin">')?>
			</div>
			<div class="img_nav_epreuve">
				<img src="/library/img/epreuves/roller.png">
			</div>
			<div class="img_nav_chemin">
				<?php echo('<img src="/library/img/epreuves/chemin/chemin_'.rand(1,11).'.png" class="img_nav_chemin">')?>
			</div>
			<div class="img_nav_epreuve">
				<img src="/library/img/epreuves/kayak.png">
			</div>
			<div class="img_nav_chemin">
				<?php echo('<img src="/library/img/epreuves/chemin/chemin_'.rand(1,11).'.png" class="img_nav_chemin">')?>
			</div>
			<div class="img_nav_epreuve">
				<img src="/library/img/epreuves/finish.png">
			</div>
		</nav>
		<section id="descr_des_epreuves">
			<h1 id="titre_epreuves" class="conteneur_epreuves">
				Petit aperçu du menu !
			</h1>
			<div id="descr_velo" class="conteneur_epreuves">
				<div class="descr_epreuve">
					<div class="ligne_tableau titre_tableau">
						<div class="case_tableau vide"></div>
						<div class="diff_expert case_tableau">
							<img src="/library/img/epreuves/medaille.png" class="medaille img_tableau">
							<p class="descr_diff_expert">
								Parcour Expert
							</p>
						</div>
						<div class="diff_aventure case_tableau">
							<img src="/library/img/epreuves/aventure.png" class="fun img_tableau">
							<p class="descr_diff_expert">
								Parcour Aventure
							</p>
						</div>
					</div>
					<div class="distance ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_distance img_tableau" src="/library/img/epreuves/distance.png">
						</div>
						<div class="case_tableau num-2"> 250 km</div>
						<div class="case_tableau num-3"> 150 km</div>
					</div>
					<div class="denivele ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_denivele img_tableau" src="/library/img/epreuves/denivele.png">
						</div>
						<div class="case_tableau num-2">600 m</div>
						<div class="case_tableau num-3">150 m</div>
					</div>
				</div>
				<div class="conteneur_epreuves_img conteneur_img_velo">
					<p>Vélo</p>
				</div>
			</div>
			<div id="descr_surprise" class="conteneur_epreuves">
				<div class="descr_epreuve">
					<div class="ligne_tableau titre_tableau">
						<div class="case_tableau vide"></div>
						<div class="diff_expert case_tableau">
							<img src="/library/img/epreuves/medaille.png" class="medaille img_tableau">
							<p class="descr_diff_expert">
								Parcour Expert
							</p>
						</div>
						<div class="diff_aventure case_tableau">
							<img src="/library/img/epreuves/aventure.png" class="fun img_tableau">
							<p class="descr_diff_expert">
								Parcour Aventure
							</p>
						</div>
					</div>
					<div class="distance ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_distance img_tableau" src="/library/img/epreuves/distance.png">
						</div>
						<div class="case_tableau num-2"> 250 km</div>
						<div class="case_tableau num-3"> 150 km</div>
					</div>
					<div class="denivele ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_denivele img_tableau" src="/library/img/epreuves/denivele.png">
						</div>
						<div class="case_tableau num-2">600 m</div>
						<div class="case_tableau num-3">150 m</div>
					</div>
				</div>
				<div class="conteneur_epreuves_img conteneur_img_surprise">
					<p>Surprise</p>
				</div>
			</div>
			<div id="descr_course" class="conteneur_epreuves">
				<div class="descr_epreuve">
					<div class="ligne_tableau titre_tableau">
						<div class="case_tableau vide"></div>
						<div class="diff_expert case_tableau">
							<img src="/library/img/epreuves/medaille.png" class="medaille img_tableau">
							<p class="descr_diff_expert">
								Parcour Expert
							</p>
						</div>
						<div class="diff_aventure case_tableau">
							<img src="/library/img/epreuves/aventure.png" class="fun img_tableau">
							<p class="descr_diff_expert">
								Parcour Aventure
							</p>
						</div>
					</div>
					<div class="distance ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_distance img_tableau" src="/library/img/epreuves/distance.png">
						</div>
						<div class="case_tableau num-2"> 250 km</div>
						<div class="case_tableau num-3"> 150 km</div>
					</div>
					<div class="denivele ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_denivele img_tableau" src="/library/img/epreuves/denivele.png">
						</div>
						<div class="case_tableau num-2">600 m</div>
						<div class="case_tableau num-3">150 m</div>
					</div>
				</div>
				<div class="conteneur_epreuves_img conteneur_img_course">
					<p>course</p>
				</div>
			</div>
			<div id="descr_CO" class="conteneur_epreuves">
				<div class="descr_epreuve">
					<div class="ligne_tableau titre_tableau">
						<div class="case_tableau vide"></div>
						<div class="diff_expert case_tableau">
							<img src="/library/img/epreuves/medaille.png" class="medaille img_tableau">
							<p class="descr_diff_expert">
								Parcour Expert
							</p>
						</div>
						<div class="diff_aventure case_tableau">
							<img src="/library/img/epreuves/aventure.png" class="fun img_tableau">
							<p class="descr_diff_expert">
								Parcour Aventure
							</p>
						</div>
					</div>
					<div class="distance ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_distance img_tableau" src="/library/img/epreuves/distance.png">
						</div>
						<div class="case_tableau num-2"> 250 km</div>
						<div class="case_tableau num-3"> 150 km</div>
					</div>
					<div class="denivele ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_denivele img_tableau" src="/library/img/epreuves/denivele.png">
						</div>
						<div class="case_tableau num-2">600 m</div>
						<div class="case_tableau num-3">150 m</div>
					</div>
				</div>
				<div class="conteneur_epreuves_img conteneur_img_CO">
					<p>CO</p>
				</div>
			</div>
			<div id="descr_runbike" class="conteneur_epreuves">
				<div class="descr_epreuve">
					<div class="ligne_tableau titre_tableau">
						<div class="case_tableau vide"></div>
						<div class="diff_expert case_tableau">
							<img src="/library/img/epreuves/medaille.png" class="medaille img_tableau">
							<p class="descr_diff_expert">
								Parcour Expert
							</p>
						</div>
						<div class="diff_aventure case_tableau">
							<img src="/library/img/epreuves/aventure.png" class="fun img_tableau">
							<p class="descr_diff_expert">
								Parcour Aventure
							</p>
						</div>
					</div>
					<div class="distance ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_distance img_tableau" src="/library/img/epreuves/distance.png">
						</div>
						<div class="case_tableau num-2"> 250 km</div>
						<div class="case_tableau num-3"> 150 km</div>
					</div>
					<div class="denivele ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_denivele img_tableau" src="/library/img/epreuves/denivele.png">
						</div>
						<div class="case_tableau num-2">600 m</div>
						<div class="case_tableau num-3">150 m</div>
					</div>
				</div>
				<div class="conteneur_epreuves_img conteneur_img_runbike">
					<p>Run & Bike</p>
				</div>
			</div>
			<div id="descr_roller" class="conteneur_epreuves">
				<div class="descr_epreuve">
					<div class="ligne_tableau titre_tableau">
						<div class="case_tableau vide"></div>
						<div class="diff_expert case_tableau">
							<img src="/library/img/epreuves/medaille.png" class="medaille img_tableau">
							<p class="descr_diff_expert">
								Parcour Expert
							</p>
						</div>
						<div class="diff_aventure case_tableau">
							<img src="/library/img/epreuves/aventure.png" class="fun img_tableau">
							<p class="descr_diff_expert">
								Parcour Aventure
							</p>
						</div>
					</div>
					<div class="distance ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_distance img_tableau" src="/library/img/epreuves/distance.png">
						</div>
						<div class="case_tableau num-2"> 250 km</div>
						<div class="case_tableau num-3"> 150 km</div>
					</div>
					<div class="denivele ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_denivele img_tableau" src="/library/img/epreuves/denivele.png">
						</div>
						<div class="case_tableau num-2">600 m</div>
						<div class="case_tableau num-3">150 m</div>
					</div>
				</div>
				<div class="conteneur_epreuves_img conteneur_img_roller">
					<p>Roller</p>
				</div>
			</div>
			<div id="descr_kayak" class="conteneur_epreuves">
				<div class="descr_epreuve">
					<div class="ligne_tableau titre_tableau">
						<div class="case_tableau vide"></div>
						<div class="diff_expert case_tableau">
							<img src="/library/img/epreuves/medaille.png" class="medaille img_tableau">
							<p class="descr_diff_expert">
								Parcour Expert
							</p>
						</div>
						<div class="diff_aventure case_tableau">
							<img src="/library/img/epreuves/aventure.png" class="fun img_tableau">
							<p class="descr_diff_expert">
								Parcour Aventure
							</p>
						</div>
					</div>
					<div class="distance ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_distance img_tableau" src="/library/img/epreuves/distance.png">
						</div>
						<div class="case_tableau num-2"> 250 km</div>
						<div class="case_tableau num-3"> 150 km</div>
					</div>
					<div class="denivele ligne_tableau">
						<div class="case_tableau num-1">
							<img class="img_denivele img_tableau" src="/library/img/epreuves/denivele.png">
						</div>
						<div class="case_tableau num-2">600 m</div>
						<div class="case_tableau num-3">150 m</div>
					</div>
				</div>
				<div class="conteneur_epreuves_img conteneur_img_kayak">
					<p>Kayak</p>
				</div>
			</div>
		</section>
	</section>
</body>
</html>