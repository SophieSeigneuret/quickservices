<?php
//require_once 'defines.php';


$candidats = array (
    '1' => array(
        'avatar' => 'images/christina.jpg',
        'name' => 'Christina',
        'age' => 24,
        'city' => 'Montréal',
        'category'  => GARDE_ENF,
    ),
    '2' => array(
        'avatar' => 'images/thierry.jpg',
        'name' => 'Thierry',
        'age' => 29,
        'city' => 'Laval',
        'category'  => SOUTIEN,
    ),
    '3' => array(
        'avatar' => 'images/marie.jpg',
        'name' => 'Marie',
        'age' => 36,
        'city' => 'Québec',
        'category'  => ENTRETIEN,
    ),
);


$recherche = array(
    DEMANDE,
    OFFRE,
);


$options_OD = array(
    GARDE_ENF => array (
        DEMANDE => 'une babysitter',
        OFFRE => 'des enfants à garder',
    ),
    ENTRETIEN => array (
        DEMANDE => 'une aide à domicile',
        OFFRE => 'des travaux à faire',
    ),
    SOUTIEN => array (
        DEMANDE => 'un cours particulier',
        OFFRE => 'des élèves',
    ),
);

//$categories = array (
//    GARDE_ENF => array(
//        'Garde enfants',
//        'une babysitter',
//        'des enfants à garder',
//    ),
//    ENTRETIEN => array(
//        'Entretien / Bricolage',
//        'une aide à domicile',
//        'des travaux à faire',
//    ),
//    SOUTIEN => array(
//        'Soutien scolaire',
//        'un cours particulier',
//        'des élèves',
//    ),
//);




$users = array(
    45 => array(
        'mail' => 'steve@gmail.com',
        'password' => md5('toto17'),
    ),
    22 => array(
        'mail' => 'yassine@gmail.com',
        'password' => md5('fido123'),
    ),
    11 => array(
        'mail' => 'mamadou@gmail.com',
        'password' => md5('tata78'),
    ),
    15 => array(
        'mail' => 'sophie@gmail.com',
        'password' => md5('123456'),
    ),
    98 => array(
        'mail' => 'willy@gmail.com',
        'password' => md5('rouge1'),
    ),
    66 => array(
        'mail' => 'abderraouf@gmail.com',
        'password' => md5('shakino123'),
    ),
    54 => array(
        'mail' => 'ismahen@gmail.com',
        'password' => md5('pink17'),
    ),
    38 => array(
        'mail' => 'amin@gmail.com',
        'password' => md5('marroon8'),
    ),
);