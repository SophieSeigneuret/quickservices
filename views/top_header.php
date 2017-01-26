<?php
//session_start();
//require_once 'donnees.php';
require 'check_connect.php';

?>

<div id="top">
    <a href="index.php"><img id="logo" src="images/logo_provisoire.jpg" alt="logo quick services"/></a>
    <div id="connexion">
        <?php if(is_logged_in()) { ?>
            <a href="#">mon compte</a>
            <form action="index.php" method="post">
                <input type="submit" name="deconnect" value="deconnexion">
            </form>
        <?php } else { ?>
            <a href="formulaire_connexion.php">connexion</a>
            <a href="inscription.php">inscription</a>
        <?php } ?>
    </div>
</div>