<?php
session_start();
require('../../../config.php');
require('../../../library/db/db.php');
require('../../../library/security/Securise.php');

$post=$_POST;
foreach ($post as $key => $value)
{
	$post[$key]=Securise::nettoyer($value);
}

$db = new db;

var_dump($post);
$db->put_info('benevole',$post);

?>