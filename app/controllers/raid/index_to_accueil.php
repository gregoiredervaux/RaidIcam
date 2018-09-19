<?php
session_start();
require('../../../config.php');
require('../../../library/db/db.php');

if($settings['maintenance']['raid']['accueil']==1)
{
	header('Location: ../../views/maintenance.php');
}
else
{
	$bd=new db;
	$bd -> put_sponsors();
	header('Location: ../../views/raid/accueil.php');
}
?>
