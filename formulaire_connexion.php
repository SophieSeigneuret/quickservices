<?php
require_once 'check_connect.php';

// appel de page_head.php à la fin du bloc php pour que la redirection via le header soit valide
// header('location:index.php) doit être placé avant tout html
require_once 'views/page_head.php';

// POURQUOI REDETRUIRE LA SESSION ICI?
$_SESSION = array();
session_destroy();

?>

    <div id="form_connexion">
        <a href="index.php"><img id="logo" src="images/logo_provisoire.jpg" alt="logo quick services"/></a>
        <h2>Identifiez-vous</h2>
        <form action="<?= basename(__FILE__) ?>" method="post">
            <div>
                <label for="mail">Courriel</label>
                <input type="text" name="mail" id="mail" placeholder="Courriel" class="<?= $username_valide ? '' : 'invalid' ?>"
                       value="<?= array_key_exists('mail', $_POST) ? $_POST['mail'] : '' ?>"/>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe" class="<?= $password_valide ? '' : 'invalid' ?>" value=""/>
            </div>
            <input type="submit" name="login" value="CONNEXION">
            <a href="#">Mot de passe oublié ?</a>
        </form>
        <p>Pas de compte ? <a href="inscription.php">Inscrivez-vous !</a></p>
    </div>

<div id="msg_erreur">
    <!-- messages d'erreur si mail et password non reconnus -->
    <?php if (is_logged_in()) {  ?>

        <p>vous êtes connecté</p>
    <?php } else if (!empty($_POST)) { ?>
        <p>Courriel et/ou mot de passe non reconnu(s)</p>
    <?php } ?>

    <!-- messages d'erreur si mail et password pas au bon format -->
    <?php if (!$username_valide && !empty($_POST)) { ?>
        <p>Format de courriel non valide</p>
    <?php } ?>

    <?php if (!$password_valide && !empty($_POST)) { ?>
        <p>Le mot de passe doit contenir au moins 6 caractères</p>
    <?php } ?>
</div>
