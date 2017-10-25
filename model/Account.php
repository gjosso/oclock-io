<?php

include_once('connexion_sql.php');

function checkAccount($email, $pass_hash) {
    global $bdd;

    // lecture
    $req = $bdd->prepare('SELECT COUNT(*) FROM `membres` WHERE email=:email AND password=:pass');
    $req->execute(array(
        'email' => $email,
        'pass' => $pass_hash));

    while ($donnees = $req->fetch()) {
        if ($donnees[0] >= 1){
            return 1;
        } else {
            return 0;
        }
    }
    $req->closeCursor();
}


function getAccount($email) {
    global $bdd;

    // lecture
    $req = $bdd->prepare('SELECT * FROM `membres` WHERE email=:email');
    $req->execute(array(
        'email' => $email));

    while ($donnees = $req->fetch()) {
        return $donnees;
        $req->closeCursor();   
    }

}

function newAccount($prenom,$nom,$email,$password){

    global $bdd;


// Insertion
$req = $bdd->prepare('INSERT INTO membres(prenom, nom, password, email, date_inscription) VALUES(:prenom, :nom, :pass, :email, CURDATE())');
$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'pass' => $password,
    'email' => $email));
}


function emailExist($email) {
    global $bdd;

    // Insertion
    $req = $bdd->prepare('SELECT COUNT(*) FROM `membres` WHERE email=:email');
    $req->execute(array(
        'email' => $email));

    while ($donnees = $req->fetch()) {
        if ($donnees[0] >= 1) {
            return 1;
        } else {
            return 0;
        }
    }
    $req->closeCursor();
}


?>
