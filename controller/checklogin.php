<?php

include_once(dirname(dirname(__FILE__)).'/view/header.php');
include_once(dirname(dirname(__FILE__)).'/model/connexion_sql.php');
include_once(dirname(dirname(__FILE__)).'/model/Account.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['email']) && isset($_POST['pwd'])) {
    $pass_hash = sha1($_POST['pwd']);
    $email = $_POST['email'];
    global $bdd;

    if (checkAccount($email, $pass_hash)) {
        session_start();
        $account = getAccount($_POST['email']);
        $_SESSION['email'] = $account['email'];
        $_SESSION['prenom'] = $account['prenom'];
        $_SESSION['nom'] = $account['nom'];
        $_SESSION['id'] = $account['id'];
        include_once(dirname(dirname(__FILE__)).'/controller/setAlarm.php');
    } else {
        echo "attention erreur lors du login";
        include_once(dirname(dirname(__FILE__)).'/view/loginform.php');
    }
}else{
    include_once(dirname(dirname(__FILE__)).'/view/loginform.php');
}

?>