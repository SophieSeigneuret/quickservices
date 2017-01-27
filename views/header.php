<?php
//var_dump($page_title);

?>
<header>
    <!-- logo + connexion/inscription ou mon compte / deconnexion -->
    <?php require_once 'top_header.php'; ?>
    <!-- image de fond qui change selon la section -->
    <div id="img_accueil" class="<?php if (array_key_exists(GARDE_ENF, $_GET)) {
        echo 'header_garde';
    } else if (array_key_exists(ENTRETIEN, $_GET)) {
        echo 'header_entretien';
    } else if (array_key_exists(SOUTIEN, $_GET)) {
        echo 'header_soutien';
    } else {
        echo 'header_accueil';
    } ?>">
        <img src="<?php if (array_key_exists(GARDE_ENF, $_GET)) {
            echo 'images/fond_garde_enfants.jpg';
        } else if (array_key_exists(ENTRETIEN, $_GET)) {
            echo 'images/fond_entretien.jpg';
        } else if (array_key_exists(SOUTIEN, $_GET)) {
            echo 'images/fond_soutien_scolaire.jpg';
        } else {
            echo 'images/fond_accueil.jpg';
        } ?>" alt="image de fond"/>
        <h1>Trouvez de l'aide. Proposez vos services</h1>
        <!-- menu -->
        <?php require_once 'menu.php'; ?>
    </div>
    <!-- formulaire de recherche rapide -->
    <?php require_once 'form_recherche.php'; ?>
</header>