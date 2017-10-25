<?php 
session_start();

include_once(dirname(dirname(__FILE__)).'/view/header.php');
// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
echo "Vous etes déconnecté !";
include_once(dirname(dirname(__FILE__)).'/controller/checklogin.php');