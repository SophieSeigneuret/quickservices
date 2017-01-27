<?php
/**
 *
 */
require_once 'db/define.php';

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : ", $mysqli->connect_error;
}

//var_dump($users);

/**
 * Fournit un tableu d'article
 * @return array
 */
function get_users($where = '') {
    global $mysqli;
    // Rédaction de la requete sur les articles
    $query_str = 'SELECT * FROM `users` ' . $where; // Sélection de tous les articles

    $res = $mysqli->query($query_str); // xécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($users = $res->fetch_assoc()) {
            $data[$users['id']] = $users;
        }
    }
    return $data;
}

