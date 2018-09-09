<?php
session_start();
if(empty($_SESSION['sponsor']))
{
  header("Location: /");
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>RAID ICAM</title>
		<meta name="description" content="retrouvez le site web de l'association Raid Icam"/>
		<link rel="shortcut icon" href="../../../library/img/favicon.ico"> 
		<link href="../../style/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="../../style/default.css">
    <link rel="stylesheet" href="../../style/accueil.css">


	</head>
	<body>

<!--******************************************************
************************ HEADER **************************
*******************************************************-->

<?php include("header.php"); ?>

<!--******************************************************
************************* BODY ***************************
*******************************************************-->

		<section id="carousel">
			<div id="carousel_teaser" class="carousel slide" data-ride="carousel" data-pause=false data-interval=3500>
				<a href="https://player.vimeo.com/video/245872589" rel="shadowbox" class="light_box">
  				<div class="carousel-inner rounded">
    					<img class="text_carousel" src="../../../library/img/accueil/carousel/txt_teaser.png">
						<div class="carousel-item active " >
							<img class="d-block w-100 " src="../../../library/img/accueil/carousel/coureuses.png">
						</div>
						<div class="carousel-item">
  							<img class="d-block w-100 " src="../../../library/img/accueil/carousel/kayak.png">
						</div>
						<div class="carousel-item">
  							<img class="d-block w-100 " src="../../../library/img/accueil/carousel/velo_plage.png">
						</div>
  				</div>
				</a>
      </div>

  		<div id="carousel_teaser" class="carousel slide" data-ride="carousel" data-pause=false data-interval=3500>
        <a href="nos_partenaires.php">
          <div class="carousel-inner rounded" href="nos_partenaires.php">
            <img class="text_carousel" src="../../../library/img/accueil/carousel/txt_partenaires.png">
            <div class="carousel-item active ">
                <img class="d-block w-100 " src="../../../library/img/accueil/carousel/kayak.png">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="../../../library/img/accueil/carousel/velo_plage.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 " src="../../../library/img/accueil/carousel/coureuses.png">
            </div>
          </div>
        </a>
      </div>

			<div id="carousel_teaser" class="carousel slide" data-ride="carousel" data-pause=false data-interval=3500>
        <a href="epreuves.php">
          <div class="carousel-inner rounded">
            <img class="text_carousel" src="../../../library/img/accueil/carousel/txt_epreuves.png">
            <div class="carousel-item active ">
                <img class="d-block w-100 " src="../../../library/img/accueil/carousel/velo_plage.png">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="../../../library/img/accueil/carousel/coureuses.png">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="../../../library/img/accueil/carousel/kayak.png">
            </div>
          </div>
        </a>
      </div>
		</section>

    <section id="carre_cliquable">
      <a href="infos_pratiques.php">
        <div class="carre_info">
          <p class="contenu_info">Informations pratiques</p>
        </div>
      </a>
      <a href="inscription.php">
        <div class="carre_info">
          <p class="contenu_info">Inscriptions</p>
        </div>
      </a>
      <a href="benevolat.php">
        <div class="carre_info">
          <p class="contenu_info">Devenir Benevole</p> 
        </div>
      </a>
    </section>

		<section id="date">
				<p>17 et 18 Mars 2018</p>
		</section>

    <section id="bandeau_descr">
      <div id="titre_bandeau_descr">
        <h1> Mais au fond, le Raid Icam, qu'est-ce que c'est ?</h1>
      </div>
      <div id="contenu_descr">
        <div class="triptique">
          <div class="img_triptique_descr triptique_element">
            <img src="../../../library/img/accueil/bandeau/couronne.png">
          </div>
          <div class="titre_tripique_descr triptique_element">
            <h2>2 jours intenses de course</h2>
          </div>
          <div class="text_triptique triptique_element">
            <p>
              Deux niveaux de difficulté sont disponibles: <br />
              - le parcours aventure, destiné à ceux qui ont envie de tester la discipline. <br />
              - le parcours expert, pour dépasser ses limites !
            </p>
          </div>
        </div>
        <div class="triptique">
          <div class="img_triptique_descr triptique_element">
            <img src="../../../library/img/accueil/bandeau/velo.png">
          </div>
          <div class="titre_tripique_descr triptique_element">
            <h2>De nombreuses activités</h2>
          </div>
          <div class="text_triptique triptique_element">
            <p>
              Au programme: VTT, course d'orientation, trail, kayak, et plein d'autres activités qu'il vous faudra découvrir par vous-même !
            </p>
          </div>
        </div>
        <div class="triptique">
          <div class="img_triptique_descr triptique_element">
            <img src="../../../library/img/accueil/bandeau/paysage.png">
          </div>
          <div class="titre_tripique_descr triptique_element">
            <h2>Un environnement de rêve</h2>
          </div>
          <div class="text_triptique triptique_element">
            <p>
              Nous vous proposons de venir découvrir dans cette édition le site des 2 caps, et l'arrière-pays boulonnais. Attendez-vous à aimer cette région !
            </p>
          </div>
        </div>
      </div>
    </section>

			<div id="bandeau_sponsors_accueil">
				<div id="titre_info">
  				<h1>Ils nous soutiennent</h1>
				</div>
				<div id="sponsor_princ_accueil">
          <?php
            if (!empty($_SESSION['sponsor']))
            {
              foreach($_SESSION['sponsor'] as $num_sponsor => $ls_donnee)
              {
                if($_SESSION['sponsor'][$num_sponsor]['importance'] == 'principal')
                {
                  echo(
                  '<a href="'.$_SESSION['sponsor'][$num_sponsor]['lien'].'"><img src="../../../'.$_SESSION['sponsor'][$num_sponsor]['path'].'""></img>
                  </a>');
                }
              }
            }
          ?>
        </div>
				<div id="sponsor_sec_accueil">
          <?php
            if (!empty($_SESSION['sponsor']))
            {
              foreach($_SESSION['sponsor'] as $num_sponsor => $ls_donnee)
              {
                if($_SESSION['sponsor'][$num_sponsor]['importance'] == 'secondaire')
                {
                  echo(
                  '<a href="'.$_SESSION['sponsor'][$num_sponsor]['lien'].'"><img src="../../../'.$_SESSION['sponsor'][$num_sponsor]['path'].'""></img>
                  </a>');
                }
              }
            }
          ?>
				</div>
				<div id="sponsor_ter_acceuil">
          <?php
            if (!empty($_SESSION['sponsor']))
            {
              foreach($_SESSION['sponsor'] as $num_sponsor => $ls_donnee)
              {
                if($_SESSION['sponsor'][$num_sponsor]['importance'] == 'tertiaire')
                {
                  echo(
                  '<a href="'.$_SESSION['sponsor'][$num_sponsor]['lien'].'"><img src="../../../'.$_SESSION['sponsor'][$num_sponsor]['path'].'""></img>
                  </a>');
                }
              }
            }
          ?>
				</div>
			</div>

<!--       <div class="overlay">
        
      </div>
 -->


<!--******************************************************
************************ FOOTER **************************
*******************************************************-->
		<!-- <?php include("footer.php"); ?>  -->
		</body>
    <!-- <script src="../../style/light_box.js"></script> -->
</html>

