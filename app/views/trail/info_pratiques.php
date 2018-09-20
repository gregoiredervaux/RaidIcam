<?php
session_start();

require('../../../config.php');

if($settings['maintenance']['trail']['info_pratiques']==1)
{
	header('Location: ../../views/maintenance.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Information pratiques</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="retrouvez le site web de l'association Raid Icam"/>
	<link rel="shortcut icon" href="../../../library/img/favicon.ico"> 
	<link rel="stylesheet" href="../../style/default.css">
	<link rel="stylesheet" href="../../style/info_pratiques.css">

</head>
<body>
<!--******************************************************
************************ HEADER **************************
*******************************************************-->

<?php include("header.php"); ?>

<!--******************************************************
************************* BODY ***************************
*******************************************************-->

<div id="titre_principale">
	<h1>Informations Pratiques</h1>
	<a href="library/Reglement_Participants_2018.pdf" class="btn">
		Téléchargez le règlement participant 2018
		<img src="/library/img/icons/crayon.png" class="icon small">
	</a>
</div>

<article>
	<section class="column num-1">
		<h2>
			Dates et Lieux
			<img src="/library/img/icons/calendrier.png" class="icon">
		</h2>
		<p>La première édition aura lieu le <strong>samedi 17 novembre à 17h</strong> sur la commune d’Ablain-Saint-Nazaire.</p>
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40695.62120143268!2d2.6753819991702517!3d50.39495997470303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd395639674c9f%3A0x40af13e816404f0!2sAblain-Saint-Nazaire%2C+France!5e0!3m2!1sfr!2sca!4v1537215573088" width="100%" height="250" frameborder="0" marginheight="0" marginwidth="0" ></iframe>

		<h2>
			Tarifs
			<img src="/library/img/icons/sous.png" class="icon">
		</h2>
		<p>Comprend la course, l'animation, et le buffet post course !</p>
		<div id="facture">
			<table id="recap_facture">
				<tr class="head">
					<th class="premier">désignation</th>
					<th>prix unitaire</th>
					<th>quantitée</th>
					<th>Montant H.T</th>
				</tr>
				<tr class="ligne">
					<th class="premier">part. tiote foulée</th>
					<th>15€</th>
					<th>1</th>
					<th>15€</th>
				</tr>
				<tr class="ligne">
					<th class="premier">frais bancaires</th>
					<th>1€</th>
					<th>1</th>
					<th>1€</th>
				</tr>
			</table>
			<table id="prix_facture">
				<tr class="head">
					<th>CT</th>
					<th>Montant</th>
				</tr>
				<tr class="ligne">
					<th>H.T</th>
					<th>16€</th>				
				</tr>
				<tr class="ligne">
					<th>TVA</th>
					<th>*0%</th>
				</tr>
				<tr class="ligne">
					<th>T.T.C</th>
					<th>16€</th>
				</tr>
			</table>
			<p>*en tant que association à but non lucratif, nous ne sommes pas assujéttie à la TVA</p>
		</div>

		<h2>
			Inscription
			<img src="/library/img/icons/crayon.png" class="icon">
		</h2>
		<?php include("condition_inscription.php");?>
		<a class="btn" href="/library/Certificat_Medical_Raid_ICAM_2018.pdf" >
			Télécharger un modèle de certificat médical
			<img src="/library/img/icons/docteur.png" class="icon small">
		</a>
	</section>
	<section class="column num-2">
		<h2>
			Déroulement
			<img src="/library/img/icons/medaille_couleur.png" class="icon">
		</h2>

		<p>
			Le chronométrage se fera à l'aide de puces jetables, Elle vous sera remis lors du check administratif, et il vous faudra la rendre ou la garder sur vous à la fin de Trail.<br>
			Un buffet est prévu pour tous les participants à la fin de la course.<br>
			Prière d'être présent à 17h, pour le commencement du pointage. Nous nous réservons le droit de refuser une personne qui arrive avec trop de retard pour prendre le début de la course, et nous ne reporterons en aucun cas l'heure du départ pour ce motif.<br>
			La course se déroule dans un cadre naturel, et nous seront très strict quant au respect de l'environement. Nous visons à réduire au maximum notre empreinte environementale, nous vous demandons de faire de même.
		</p>

		<h2>
			Matériel demandé obligatoire
			<img src="/library/img/icons/trousse.png" class="icon">
		</h2>
		<ul>
			<li>1 lampe frontale de bonne facture rechargée</li>
			<li>1 téléphone portable (en cas de problème pour contacter l'organisation) </li>
			<li>1 gilet ou des vetements réfléchissant</li>
		</ul>
		
		<h2>Matériel conseillé
			<img src="/library/img/icons/trousse.png" class="icon">
		</h2>
		<ul>
			<li>1 trousse de secours contenant : des pansements, des bandes, des compresses, un désinfectant et une couverture de survie</li>
			<li>1 système d'hydratation type gourde ou camelbag</li>
			<li>1 vetement de pluie (type k-way ou Gore tex)</li>
			<li>1 vetement de sport chaud et un collant</li>
			<li>des barres energétiques</li>
		</ul>
	</section>
</article>

</body>
</html>
