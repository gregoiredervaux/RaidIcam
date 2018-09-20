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
	header('Location: ../../views/raid/accueil.php');
}
?>
