<?php
require_once 'donnees.php';
?>


<header>
    <div id="top">
        <a href="index.php"><img id="logo" src="images/logo_provisoire.jpg" alt="logo quick services"/></a>
        <div id="connexion">
            <a href="formulaire_connexion.php">connexion</a>
            <a href="inscription.php" >inscription</a>
        </div>
    </div>
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
        <?php require_once 'menu.php'; ?>
    </div>
    <?php require_once 'form_recherche.php'; ?>
</header>
