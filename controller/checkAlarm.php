<?php

session_start();
include_once(dirname(dirname(__FILE__)) . '/model/connexion_sql.php');
include_once(dirname(dirname(__FILE__)) . '/view/header.php');
include_once(dirname(dirname(__FILE__)) . '/model/Alarm.php');

$avg_alarm_time = avgAlarmTime();
$avg_snooze_number = avgSnoozeNum()*5;

if (isset($_POST['waketime'])) {
    $waketime = $_POST['waketime'];

    if (isset($_POST['snooze'])) {
        snooze($_SESSION['id']);
        include_once(dirname(dirname(__FILE__)) . '/view/Snooze.php');
    } elseif (alarmExist($_SESSION['id'])) {
        updateAlarm($_SESSION['id'], $waketime);
        include_once(dirname(dirname(__FILE__)) . '/view/Snooze.php');
    } else {
        newAlarm($_SESSION['id'], $waketime);
        include_once(dirname(dirname(__FILE__)) . '/view/Snooze.php');
    }
} else {
    include_once(dirname(dirname(__FILE__)) . '/view/setalarm.php');
}
?>