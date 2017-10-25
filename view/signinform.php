<?php

if(isset($_GET["error"]) && $_GET["error"]==1){
    echo 'erreur lors de la création du compte veuillez réessayer';
}

?>

<form action="checkSignin.php" method="post">
    <p> Nom* :
        <input type="text" name="nom" /> </p>
    <p> Prenom* :
        <input type="text" name="prenom" /> </p>
    <p> Adresse mail* :
        <input type="text" name="email" /> </p>
    <p> Mot de passe* :
        <input type="password" name="pwd" /> </p>            
    <p>  Confirmer mot de passe* :
        <input type="password" name="pwd2" /> </p>
    <input type="submit" value="Valider" />
    </br>
    * champs obligatoires

</form>
