<?php

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

require_once 'defines.php';

$categories = array (
    GARDE_ENF => array(
        '---',
        'une babysitter',
        'des enfants à garder',
    ),
    ENTRETIEN => array(
        '---',
        'une aide à domicile',
        'des travaux à faire',
    ),
    SOUTIEN => array(
        '---',
        'un cours particulier',
        'des élèves',
    ),
);


if ($page_title == 'garde_enfants') {

}