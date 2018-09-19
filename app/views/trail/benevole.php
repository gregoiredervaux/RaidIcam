<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Benevoles</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="retrouvez le site web de l'association Raid Icam"/>
	<link rel="shortcut icon" href="../../../library/img/favicon.ico"> 
	<link rel="stylesheet" href="../../style/bootstrap.css">
	<link rel="stylesheet" href="../../style/default.css">
	<link rel="stylesheet" href="../../style/benevole.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>
<body>
<!--******************************************************
************************ HEADER **************************
*******************************************************-->

<?php include("header.php"); ?>

<!--******************************************************
************************* BODY ***************************
*******************************************************-->
<?php 
if(empty($_SESSION['demande_benevole']))
{
	?>
<!-- <section class="formulaire">
	<form action="../../controllers/trail/verif_donnee_benevole.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<legend>On a juste besoin de quelques infos !</legend>
		</div>

		<div class="col-8 center">
			<div class="row">
				<div class="col-6">
					<label for="prenom">Prénom ?</label>
					<input type="text" name="prenom" id="prenom" autofocus required class="form-control" placeholder="Prénom">
				</div>
				<div class="col-6">
					<label for="nom">Nom ?</label>
					<input type="text" name="nom" id="nom" required class="form-control" placeholder="Nom">
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<label for="email">Quel est votre e-mail ?</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="name@exemple.com" required>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<label for="numero">Quel est votre numéro de téléphone ?</label>
					<input type="tel" name="numero" class="form-control" id="numero" required>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<label for="datenaissance">Quelle est votre date de naissance ?</label>
					<input type="date" name="datenaissance" class="form-control" id="datenaissance" required>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<label for="binome">Avec qui souhaitez-vous faire bénévole ?</label>
					<input type="text" name="binome" class="form-control" id="benevole">
					<small id="passwordHelpInline" class="text-muted">
						Nous formons toujours des binômes de bénévoles. Faire des postes de sécurité seul peut vraiment être ennuyant et nous souhaitons que vous passiez un très bon moment. Vous ne pouvez indiquer qu'une seule personne.
					</small>
				</div>
			</div>


			<br>
			<label for="permis">Possédez-vous le permis ? </label>
			<div class="custom-control custom-radio">
				<input type="radio" name="permis" class="custom-control-input" id="ouipermis" value="1" required>
				<label class="custom-control-label" for="ouipermis">Oui</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" name="permis" class="custom-control-input" value="nonpermis" id="0">
				<label class="custom-control-label" for="nonpermis">Non</label>
			</div> 

			<br>

			<label for="voiture">Aurez-vous votre voiture le jour du Trail ? </label>
			<div class="custom-control custom-radio">
				<input type="radio" name="voiture" class="custom-control-input" id="ouivoiture" value="1" required>
				<label class="custom-control-label" for="ouivoiture">Oui</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" name="voiture" class="custom-control-input" id="nonvoiture" value="0">
				<label class="custom-control-label" for="nonvoiture">Non</label>
			</div> 
		</div>


		<div class="form-group" id="doc">
			<legend>Documents à transmettre</legend>
		</div>


		<div class="form-group">
			<label for="fichierpermis">Vous possédez votre permis ? Nous avons besoin d'une photo recto-verso de votre permis de conduire !</label>
			<input type="file" class="form-control-file" id="fichierpermis" name="fichierpermis">
		</div>

		<div class="form-group">
			<button class="btn btn-primary" type="submit" value="Envoyer">Envoyer</button>
		</div>
	</form>
</section> -->
<section class="formulaire">
	<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScH_agrBPWFqyl-_qh2BIHIs32UXBj7WzwchMOIOg546ZYozw/viewform?embedded=true" width="100%" height="2000px" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours...</iframe>
</section>
<?php
	}?>

<?php include('../footer.php');?>
</body>