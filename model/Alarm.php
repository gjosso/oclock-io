<?php

include_once('connexion_sql.php');

function newAlarm($idmembre, $alarmtime) {
    global $bdd;
// Insertion
    $req = $bdd->prepare('INSERT INTO alarm_time (id_membre, alarm_time, snooze_number) VALUES(:idmembre, :alarmtime, 0)');
    $req->execute(array(
        'idmembre' => $idmembre,
        'alarmtime' => $alarmtime));
}

function updateAlarm($idmembre, $alarmtime) {
    global $bdd;
// Insertion
    $req = $bdd->prepare('UPDATE alarm_time SET alarm_time=:alarmtime WHERE id_membre = :idmembre');
    $req->execute(array(
        'idmembre' => $idmembre,
        'alarmtime' => $alarmtime));
}

function snooze($idmembre) {
    global $bdd;

// Insertion
    $req = $bdd->prepare('UPDATE alarm_time SET alarm_time=alarm_time+500, snooze_number=snooze_number+1 WHERE id_membre = :idmembre');
    $req->execute(array(
        'idmembre' => $idmembre));
}

function alarmExist($idmembre) {
    global $bdd;
    // Insertion
    $req = $bdd->prepare('SELECT count(*) FROM alarm_time WHERE id_membre = :idmembre');
    $req->execute(array(
        'idmembre' => $idmembre));

    while ($donnees = $req->fetch()) {
        if ($donnees[0] >= 1) {
            return 1;
        } else {
            return 0;
        }
    }
    $req->closeCursor();
}

function getAlarm($idmembre) {
    global $bdd;

    // Insertion
    $req = $bdd->prepare('SELECT alarm_time FROM alarm_time WHERE id_membre = :idmembre');
    $req->execute(array(
        'idmembre' => $idmembre));

    while ($donnees = $req->fetch()) {
        return $donnees[0];
    }
    $req->closeCursor();
}


function avgAlarmTime(){
    global $bdd;

    // Insertion
    $req = $bdd->prepare('SELECT AVG(alarm_time) FROM alarm_time');
    $req->execute();

    while ($donnees = $req->fetch()) {
        return $donnees[0];
    }
    $req->closeCursor();
}

function avgSnoozeNum(){
    global $bdd;

    // Insertion
    $req = $bdd->prepare('SELECT AVG(snooze_number) FROM alarm_time');
    $req->execute();

    while ($donnees = $req->fetch()) {
        return $donnees[0];
    }
    $req->closeCursor();
}



?>