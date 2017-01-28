<?php
/**
 *
 */
define('DB_HOST', '127.0.0.1'); // Host DB localhost
//define('DB_USERNAME', 'root'); // username
define('DB_USERNAME', 'quick_pilar'); // username
define('DB_PASSWORD', 'ehsZQwuW3yZvShdM'); // password

//define('DB_PASSWORD', 'root'); // password
define('DB_NAME', 'quickservices'); // nom de la DB
define('PORT', 8889); // port

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, PORT);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : ", $mysqli->connect_error;
}


//// redaction de la requete sur les users
//// selection de toutes les users
//$query_str = 'SELECT * FROM `users`';
//
//// execution de la requete
//$result = $mysqli->query($query_str);
//
//// chargement des donnees ligne par ligne (boucle while)
//$data = array();
//if ($result && ($result->num_rows > 0)) {
//    while ($users = $result->fetch_assoc()) {
//        $data[$users['id']] = $users;
//    }
//}
//
//var_dump($data);


//var_dump($users);

/**
 * Fournit un tableu d'article
 * @return array
 */
function get_users() {
    global $mysqli;
    // Rédaction de la requete sur les users
    $query_str = 'SELECT * FROM `users`'; // Sélection de tous les users

    $res = $mysqli->query($query_str); // xécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($users = $res->fetch_assoc()) {
            $data[$users['id']] = $users;
        }
    }
    //var_dump($data);
    return $data;
}



function get_last_3users() {
    global $mysqli;
    // Rédaction de la requete sur les users
    $query_str = 'SELECT * FROM `users` ORDER BY `date_entree` DESC LIMIT 0, 3'; // Sélection des 3 derniers users

    $res = $mysqli->query($query_str); // xécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($users = $res->fetch_assoc()) {
            $data[$users['id']] = $users;
        }
    }
    //var_dump($data);
    return $data;
}
