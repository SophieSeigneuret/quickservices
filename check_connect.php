<?php
session_start();
//session_unset();
//session_destroy();

require_once 'donnees.php';
require_once 'defines.php';

//var_dump($_SESSION);

// verifie si le username et le password correspondent à un utilisateur valide
function user_authenticated($username, $password) {
    global $users;
    $result = false;
    foreach ($users as $user_id => $user_infos_connect) {
        if (($user_infos_connect['mail'] === $username)
            && ($user_infos_connect['password'] === md5($password))) {
            // utilisateur trouvé et authentifié
            $result = true;
            break;
        }
    }
    return $result;
};

// utilisateur connecté si la donnée de session username n'est pas vide
function is_logged_in() {
    return (array_key_exists(PS_MAIL, $_SESSION) && (!empty($_SESSION[PS_MAIL])));
}

// reception des données du formulaire de connexion
if (is_logged_in() && array_key_exists('deconnect', $_POST)) {
    $_SESSION = array(); // deconnexion
   // session_unset();
    session_destroy();
//    unset($_SESSION[PS_MAIL]);
//    unset($_COOKIE[session_name()]);
//    setcookie(session_name(), "", 1, "/");
//    session_destroy();

} else if (! is_logged_in()
    && array_key_exists('mail', $_POST)
    && array_key_exists('password', $_POST)
    && array_key_exists('login', $_POST)) {
    // filtrage et validation
    $username = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $username_valide = (false !== filter_var($username, FILTER_VALIDATE_EMAIL));
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password_valide = (1 === preg_match('/\w{6,}/', $password));
    // connexion
    if ($username_valide
        && $password_valide
        && user_authenticated($username, $password)) {
        $_SESSION[PS_MAIL] = $username;
        header('location:index.php');
        exit;
    }
}





//$username = '';
//$username_valide = true;
//$password = '';
//$password_valide = true;

