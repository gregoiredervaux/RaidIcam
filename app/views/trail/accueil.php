<?php
session_start();
// if(empty($_SESSION['sponsor']))
// {
// 	header("Location: /");
// }

require('../../../config.php');

if($settings['maintenance']['trail']['accueil']==1)
{
	header('Location: ../../views/maintenance.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Raid Icam</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="retrouvez le site web de l'association Raid Icam"/>
	<link rel="shortcut icon" href="library/img/favicon.ico"> 
	<link rel="stylesheet" href="/app/style/accueil.css">
	<link rel="stylesheet" href="/app/style/default.css">

</head>
<body>

	<?php include('header.php') ?>

    <section id="bandeau_descr">
      <div id="titre_bandeau_descr">
        <h1> Mais au fond, la tiote foulée, qu'est-ce que c'est ?</h1>
      </div>
      <div id="contenu_descr">
        <div class="triptique">
          <div class="img_triptique_descr triptique_element">
            <img src="../../../library/img/icons/nuit.png">
          </div>
          <div class="titre_tripique_descr triptique_element">
            <h2>Un trail nocturne</h2>
          </div>
          <div class="text_triptique triptique_element">
            <p>
  				14.5 km de course à la lueur de la frontale, un parcours sans grande difficulté, un peu de dénivelé positif, pour un maximum de plaisir !
            </p>
          </div>
        </div>
        <div class="triptique">
          <div class="img_triptique_descr triptique_element">
            <img src="../../../library/img/icons/nature.png">
          </div>
          <div class="titre_tripique_descr triptique_element">
            <h2>Un magnifique cadre</h2>
          </div>
          <div class="text_triptique triptique_element">
            <p>
              Rendez vous à Ablain-Saint-Nazaire pour découvrir des sentiers entre forêt et champs à travers le Pas-de-calais
            </p>
          </div>
        </div>
        <div class="triptique">
          <div class="img_triptique_descr triptique_element">
            <img src="../../../library/img/icons/finish_line.png">
          </div>
          <div class="titre_tripique_descr triptique_element">
            <h2>Une bonne ambiance</h2>
          </div>
          <div class="text_triptique triptique_element">
            <p>
              Vous pourrez compter sur notre équipe de bénévoles pour vous accueillir et vous rasssier lors du buffet d'après course !
            </p>
          </div>
        </div>
      </div>
    </section>
	
	<!-- <section id="bandeau_sponsors_accueil">
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
	</section> -->
<?php include('../footer.php');?>
</body>
</html>