<?php
$page_title = 'formulaire connection';
require_once 'views/page_head.php';

?>


<div id="form_connexion">
    <a href="index.php"><img id="logo" src="images/logo_provisoire.jpg" alt="logo quick services"/></a>
    <h2>Identifiez-vous</h2>
    <form action="" method="post">
        <div>
            <label for="mail">Courriel</label>
            <input type="email" name="mail" id="mail" placeholder="Courriel" value=""/>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe" value=""/>
        </div>
        <input type="submit" value="CONNEXION">
        <a href="#">Mot de passe oublié ?</a>
    </form>
    <p>Pas de compte ? <a href="inscription.php">Inscrivez-vous !</a></p>
</div>