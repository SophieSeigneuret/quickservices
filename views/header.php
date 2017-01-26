<?php
//var_dump($page_title);

?>

<header>
    <!-- logo + connexion/inscription ou mon compte / deconnexion -->
    <?php require_once 'top_header.php'; ?>
    <!-- image de fond qui change selon la section -->
    <div id="img_accueil">
        <img src="<?php if ($page_title == 'Accueil') {
            echo 'images/fond_accueil.jpg';
        } else if ($page_title == 'garde_enfants') {
            echo 'images/fond_garde_enfants.jpg';
        } else if ($page_title == 'bricolage') {
            echo 'images/fond_entretien.jpg';
        } else if ($page_title == 'soutien_scolaire') {
            echo 'images/fond_soutien_scolaire.jpg';
        } ?>" alt="image de fond"/>
        <h1>Trouvez de l'aide. Proposez vos services</h1>
        <!-- menu -->
        <?php require_once 'menu.php'; ?>
    </div>
    <!-- formulaire de recherche rapide -->
    <?php require_once 'form_recherche.php'; ?>
</header>
