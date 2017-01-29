<?php
//require_once 'defines.php';


//$candidats = array (
//    '1' => array(
//        'avatar' => 'images/christina.jpg',
//        'name' => 'Christina',
//        'age' => 24,
//        'city' => 'Montréal',
//        'category'  => GARDE_ENF,
//    ),
//    '2' => array(
//        'avatar' => 'images/thierry.jpg',
//        'name' => 'Thierry',
//        'age' => 29,
//        'city' => 'Laval',
//        'category'  => SOUTIEN,
//    ),
//    '3' => array(
//        'avatar' => 'images/marie.jpg',
//        'name' => 'Marie',
//        'age' => 36,
//        'city' => 'Québec',
//        'category'  => ENTRETIEN,
//    ),
//);


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




//$users = array(
//    45 => array(
//        'mail' => 'steve@gmail.com',
//        'password' => md5('toto17'),
//    ),
//    22 => array(
//        'mail' => 'yassine@gmail.com',
//        'password' => md5('fido123'),
//    ),
//    11 => array(
//        'mail' => 'mamadou@gmail.com',
//        'password' => md5('tata78'),
//    ),
//    15 => array(
//        'mail' => 'sophie@gmail.com',
//        'password' => md5('123456'),
//    ),
//    98 => array(
//        'mail' => 'willy@gmail.com',
//        'password' => md5('rouge1'),
//    ),
//    66 => array(
//        'mail' => 'abderraouf@gmail.com',
//        'password' => md5('shakino123'),
//    ),
//    54 => array(
//        'mail' => 'ismahen@gmail.com',
//        'password' => md5('pink17'),
//    ),
//    38 => array(
//        'mail' => 'amin@gmail.com',
//        'password' => md5('marroon8'),
//    ),
//);


/*$profils = array (
    '1' => array(
        'image' => 'images/profil_01.png',
        'name' => 'Paola',
        'categorie' => array(
            'garde_enfant' => 'images/picto_garde_enfants_30.png',
            'entretien' => 'images/picto_entretien_30.png',
            'soutien_scolaire' => 'images/picto_soutien_scolaire_30.png',
        ),
        'info' => 'On vient de déménager et j\'ai pu trouver en une demi-journée unesuper femme de ménage, Marta. Elle a même pu m\'aider pour vider les boîtes, c\'est vraiment bien...'
    ),

    '2' => array(
        'image' => 'images/profil_02.png',
        'name' => 'Sophie',
        'categorie' => array(
            'garde_enfant' => 'images/picto_garde_enfants_30.png',
            'entretien' => '',
            'soutien_scolaire' => 'images/picto_soutien_scolaire_30.png',
        ),
        'info' => 'Nounou à domicile sur call au moins une semaine d\'avance peut-être la nuit ou même plus d\'une journée... '
    ),

    '3' => array(
        'image' => 'images/profil_03.png',
        'name' => 'Valérie',
        'categorie' => array(
            'garde_enfant' => 'images/picto_garde_enfants_30.png',
            'entretien' => 'images/picto_entretien_30.png',
            'soutien_scolaire' => 'images/picto_soutien_scolaire_30.png',
        ),
        'info' => 'Bonjour, Nous sommes à la recherche d\'une nounou pour garder
                    notre petit garçon de 19 mois du lundi au jeudi de 7:30 a 16:30. Nous...  '
    ),

    '4' => array(
        'image' => 'images/profil_04.png',
        'name' => 'Steve',
        'categorie' => array(
            'garde_enfant' => 'images/picto_garde_enfants_30.png',
            'entretien' => 'images/picto_entretien_30.png',
            'soutien_scolaire' => '',
        ),
        'info' => ' Bonjours, si vous avez besoin d\'un petit coup de main à la maison pour effectuer
        des tâche par exemple jardiner, garder les enfants, fair... '
    ),

    '5' => array(
        'image' => 'images/profil_05.png',
        'name' => 'Michael',
        'categorie' => array(
            'garde_enfant' => 'images/picto_garde_enfants_30.png',
            'entretien' => 'images/picto_entretien_30.png',
            'soutien_scolaire' => 'images/picto_soutien_scolaire_30.png',
        ),
        'info' => 'Bonjour! Je m\'apelle Michael. Je suis ensegnant de profession dans un cpe depuis 3 ans.
        J\'ai mon diplome en technique d\'education a l\'enf... '
    ),
);*/