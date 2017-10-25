<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

    $req = $bdd->prepare('SELECT AVG(alarm_time) FROM alarm_time');
    $req->execute();

    while ($donnees = $req->fetch()) {
        print_r($donnees);
        echo $donnees[0];
    }
    
      $req->closeCursor();
    
    $req = $bdd->prepare('SELECT AVG(snooze_number) FROM alarm_time');
    $req->execute();
  
        while ($donnees = $req->fetch()) {
        print_r($donnees);
        echo $donnees[0];
        }
        
          $req->closeCursor();
          
          