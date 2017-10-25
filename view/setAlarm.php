<?php

echo "ton prenom :".$_SESSION['prenom']."</br>";
echo "ton nom :".$_SESSION['nom']."</br>";
echo "ton email :".$_SESSION['email']."</br>";


?>

<html>
    <head>
        <title>Activez votre alarme</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>


        <form action="checkAlarm.php" method="post">

    What time do you want to set your alarm ?
    <input type="time" name="waketime" />
    </br>
    <input type='submit' value='Wake me up!' />
    
</p>
</form>
    </body>
</html>



