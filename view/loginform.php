
<?php



if(isset($_GET['error'])){
    echo "Attention : mauvais identifiants";
}

?>

<form action="checklogin.php"  method="post">
    <p> Adresse mail :
        <input type="text" name="email" value="<?php if(isset($_GET['email'])){$_GET['email'];}?>" /> </p>
    <p> Mot de passe* :
        <input type="password" name="pwd" /> </p>            
    <input type="submit" value="Valider" />
    </br>
</p>
</form>