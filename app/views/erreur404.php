<?php
include '../../config.php';
// // Définition des variables
// $email_webmaster = $settings['email'];
 
// // Information à personnaliser
// $email_sujet = 'Erreur 404 sur le site';
// $email_message = 'Bonjour. Une erreur 40 viens de se produire sur le site web que vous gérez.'."n";
// $email_message .= 'Voici des informations sur ce site:'."n";
// $email_message .= 'Heure: '.date("d/m/Y H:i")."n";
// $email_message .= 'Page concernée: '.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."n";
// $email_message .= 'Page précédente: '.$_SERVER['HTTP_REFERER'].' (si vide = connexion direct)'."n";
// $email_message .= 'Adresse IP du visiteur: '.$_SERVER['REMOTE_ADDR']."n";
// $email_message .= 'User agent: '.$_SERVER['HTTP_USER_AGENT'];
 
// // Envoyer l'email
// @mail($email_webmaster, $email_sujet, $email_message, "FROM: Erreur_404");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Raid Icam</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="retrouvez le site web de l'association Raid Icam"/>
	<link rel="shortcut icon" href="library/img/favicon.ico"> 
	<style>

		html{
			background-image: url('/library/img/fond_index.png');
			background-size: cover;
			background-repeat: no-repeat;
		}

		body{
			display:flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			height: 100vh;
			background-color: rgba(255, 165, 0, 0.8);
			color:white;
		}
		h1{
			font-family: Capture it;
			font-size: 3em;
		}

		h2{
			font-family: segoeuil;
			font-size: 1.5em;
			max-width: 85%
		}

		img{
			width:10%;
			height: auto;
		}

		#message{
			display:flex;
			justify-content: center;
			align-items: center;
		}


    </style>
</head>
<body>
	<h1>
		OUUUPS ! Cassé... <br>
	</h1>
	<div id="message">
		<h2>Vous n'avez pas honte de taper n'importe quoi dans la barre de recherche ?!</h2>
		<img src="/library/img/icons/voleur.png" alt="voleur">
	</div>
	<p>Ou alors on a un petit problème technique, on va résoudre ca le plus vite possible !</p>
	<?php
    if (!empty($_SERVER['HTTP_REFERER'])) {
      echo '<p><a href="'.$_SERVER['HTTP_REFERER'].'">Retour page précédente</a></p>';
    }
    ?></p>
</body>
</html>