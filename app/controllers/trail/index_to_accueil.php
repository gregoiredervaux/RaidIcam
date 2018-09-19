<?php
session_start();
require('../../../config.php');
require('../../../library/db/db.php');

$bd=new db;
$bd -> put_sponsors();

header('Location: ../../views/trail/accueil.php');

?>
