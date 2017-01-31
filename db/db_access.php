<?php
/**
 *
 */

require_once 'define.php';


$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, PORT);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : ", $mysqli->connect_error;
}

$mysqli->set_charset("utf8");

// Requete : sélection de tous les users qui font de la garde d'enfants
function get_users_garde() {
    global $mysqli;
    $query_str = "SELECT * FROM `users` WHERE service_1='garde' OR service_2='garde' OR service_3='garde' ORDER BY service_1, service_2, service_3" ;
    //var_dump($query_str);
    $res = $mysqli->query($query_str); // exécution de la requête

    // Chargement des données, ligne par ligne
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($users = $res->fetch_assoc()) {
            $data[$users['id']] = $users;
        }
    }
    //var_dump($data);
    return $data;
}

// Requete : sélection de tous les users qui font de l'entretien
function get_users_entretien() {
    global $mysqli;
    $query_str = "SELECT * FROM `users` WHERE service_1='entretien' OR service_2='entretien' OR service_3='entretien' ORDER BY service_1, service_2, service_3" ;
    //var_dump($query_str);
    $res = $mysqli->query($query_str); // exécution de la requête

    // Chargement des données, ligne par ligne
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($users = $res->fetch_assoc()) {
            $data[$users['id']] = $users;
        }
    }
    //var_dump($data);
    return $data;
}

// Requete : sélection de tous les users qui font du soutien
function get_users_soutien() {
    global $mysqli;
    $query_str = "SELECT * FROM `users` WHERE service_1='soutien' OR service_2='soutien' OR service_3='soutien' ORDER BY service_1, service_2, service_3" ;
    //var_dump($query_str);
    $res = $mysqli->query($query_str); // exécution de la requête

    // Chargement des données, ligne par ligne
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($users = $res->fetch_assoc()) {
            $data[$users['id']] = $users;
        }
    }
    //var_dump($data);
    return $data;
}

// Requete : sélection des 3 derniers users
function get_last_3users() {
    global $mysqli;
    $query_str = 'SELECT * FROM `users` ORDER BY `date_entree` DESC LIMIT 0, 3';
    $res = $mysqli->query($query_str); // exécution de la requête

    // Chargement des données, ligne par ligne
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($users = $res->fetch_assoc()) {
            $data[$users['id']] = $users;
        }
    }
    //var_dump($data);
    return $data;
}

// Requete : sélectionner 1 user par son id
function get_user_by_id($id) {
    global $mysqli;
    $query_str = 'SELECT * FROM `users` WHERE id=' . $id;
    $res = $mysqli->query($query_str);  // execution de la requete

    // chargement des données de la ligne
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        $data = $res->fetch_assoc();
    }
    return $data;
}

// Requete : sélectionner 1 user par son mail
function get_user_by_mail($mail) {
    global $mysqli;
    $query_str = 'SELECT * FROM `users` WHERE mail="' . $mail . '"';
    $res = $mysqli->query($query_str);  // execution de la requete

    // chargement des données de la ligne
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        $data = $res->fetch_assoc();
    }
    return $data;
}



// calcul de l'age de la personne par sa date de naissance
function get_age($date) {
    return intval(date('Y', time() - strtotime($date))) - 1970;  // merci stackoverflow  ;-)
}