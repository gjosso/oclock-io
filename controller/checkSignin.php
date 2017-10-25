<?php


include_once(dirname(dirname(__FILE__)).'/view/header.php');
include_once(dirname(dirname(__FILE__)).'/model/Account.php');

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['pwd2'])) {
    if (!emailExist($_POST['email']) && $_POST['pwd2'] == $_POST['pwd']) {

        // Hachage du mot de passe
        $pass_hash = sha1($_POST['pwd']);

        //creation dans la base et redirection vers la page de login avec les bon arguments
        newAccount($_POST['prenom'],$_POST['nom'],$_POST['email'],$pass_hash); 
        echo "compte créé";
        include_once(dirname(dirname(__FILE__)).'/view/loginform.php');
    } else {
        echo "erreur lors de la creation du compte";
        include_once(dirname(dirname(__FILE__)).'/view/signinform.php');
    }
}else{
    include_once(dirname(dirname(__FILE__)).'/view/signinform.php');
}
?>