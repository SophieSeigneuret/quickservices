<?php
$page_title = 'formulaire connection';
require_once 'donnees.php';

//var_dump($_POST);
//var_dump($is_logged_in);

$is_logged_in = false; // Indique l'état de connexion / déconnexion de l'utilisateur

// verifie si le username et le password correspondent à un utilisateur valide => renvoie true si valide
function user_authenticated($username, $password) {
    global $users;
    $result = false;
    foreach ($users as $user_id => $user_infos_connect) {
        if (($user_infos_connect['mail'] === $username) && ($user_infos_connect['password'] === md5($password))) {
            // utilisateur trouvé et authentifié
            $result = true;
            break;
        }
    }
    return $result;
};


// reception des données
$username = '';
$username_valide = true;
$password = '';
$password_valide = true;

if (!$is_logged_in
    && array_key_exists('mail', $_POST)
    && array_key_exists('password', $_POST)
    && array_key_exists('login', $_POST)
) {
    // validation
    $username = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);  // filtrage de la chaine d'entrée
    $username_valide = (false !== filter_var($username, FILTER_VALIDATE_EMAIL));
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);  // filtrage de la chaine d'entrée
    $password_valide = (1 === preg_match('/\w{6,}/', $password));
    // connexion
    if ($username_valide && $password_valide && user_authenticated($username, $password)) {
        $is_logged_in = true;
        header('location:index.php');
        exit;
    }
}

// appel de page_head.php à la fin du bloc php pour que la redirection via le header soit valide
// header('location:index.php) doit être placé avant tout html
require_once 'views/page_head.php';

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
    <?php if ($is_logged_in) { ?>
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
