
<?php
session_start();
session_destroy();

var_dump($_SERVER['PHP_SELF']);

var_dump(preg_replace('#^/(.+)\.php$#i','$1',['http://raidicam/app/views/raid/accueil.php']));

?>