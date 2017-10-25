<?php

$alarmtime = getAlarm($_SESSION['id']);

      //  $d=strtotime($waketime);
      //  $wakeSnoozed= strtotime($waketime)+300;
      //  $wakeSnoozed=date("h:i", $wakeSnoozed);
?>

   <p>Hello <?php echo $_SESSION['prenom']; ?> !</p>
    <p> You alarm is set up at <?php echo $alarmtime; ?></p>
    <br>
    <form action='checkAlarm.php' method='post'>
<p>
   <input type='submit' value='Snooze'/>
   <input type="hidden" name="snooze" value="1" />
      <input type="hidden" name="waketime" value="<?php echo $alarmtime; ?>" />
</p>
</form>

    <p> En moyenne, les utilisateurs vont se lever à : <?php echo $avg_alarm_time; ?> </p>
    <p> Les utilisateurs ont snoozés en moyenne : <?php echo $avg_snooze_number; ?> minutes </p>
    

    </body>
</html>
