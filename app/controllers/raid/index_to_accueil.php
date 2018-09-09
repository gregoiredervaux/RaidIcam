<?php
session_start();
require('../../../library/db/db.php');

$db = new db;
$ls_sponsor=$db->get_sponsor();

$_SESSION['sponsor']=[];
#on nettoye les donnée et on les stoques dans la session.
foreach ($ls_sponsor as $num_part => $ls_valeur)
{
	$_SESSION['sponsor'][$num_part]=[];
	foreach($ls_valeur as $key => $valeur)
		if(!is_integer($key))
		{
			$_SESSION['sponsor'][$num_part][$key] = $valeur;
		}	
}

var_dump($_SESSION['sponsor']);

header('Location: ../../views/raid/accueil.php')
?>
