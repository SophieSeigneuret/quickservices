<header>
<!--    <h1>--><?//= $page_title ?><!--</h1>-->
<!--    --><?php //require('menu.php')?>
    <div id="top">
        <a href="index.php"><img id="logo" src="images/logo_provisoire.jpg" alt="logo quick services" /></a>
        <div id="connexion">
            <a href="connexion.php">connexion</a>
            <a href="inscription.php">inscription</a>
        </div>
    </div>
    <div id="img_accueil">
        <img src="images/fond_accueil.jpg" alt="image de fond" />
        <h2>Trouvez de l'aide. Proposez vos services</h2>
        <nav id="menu">
            <div class="rubrique">
                <a href="garde_enfants.php"><img src="images/picto_garde_enfants.png" alt="picto garde d'enfants" /></a>
                <hr/>
                <a href="garde_enfants.php" ><h4 class="<?php if($page_title == 'garde_enfants'){echo 'active';} ?>">Garde<br/>d'enfant</h4></a>
            </div>
            <div class="rubrique">
                <a href="bricolage_entretien.php"><img src="images/picto_entretien.gif" alt="picto entretien" /></a>
                <hr/>
                <a href="bricolage_entretien.php"><h4 class="<?php if($page_title == 'bricolage'){echo 'active';} ?>">Entretien<br/>bricolage</h4></a>
            </div>
            <div class="rubrique">
                <a href="soutien_scolaire.php"><img src="images/picto_soutien_scolaire.gif" alt="picto soutien scolaire" /></a>
                <hr/>
                <a href="soutien_scolaire.php"><h4 class="<?php if($page_title == 'soutien_scolaire'){echo 'active';} ?>">Soutien<br/>scolaire</h4></a>
            </div>
        </nav>

    </div>

</header>
