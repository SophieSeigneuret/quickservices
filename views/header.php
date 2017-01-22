<?php
require_once 'donnees.php';
?>


<header>
    <!--    <h1>--><? //= $page_title ?><!--</h1>-->
    <!--    --><?php //require('menu.php')?>
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
        <nav id="menu">
            <a href="garde_enfants.php" class="<?php if ($page_title == 'garde_enfants') {echo 'active';} ?>">
                <div class="rubrique">
                    <img src="<?php
                    if ($page_title == 'garde_enfants') {
                        echo 'images/picto_garde_enfants_red.gif';
                    } else {
                        echo 'images/picto_garde_enfants.gif';
                    }
                    ?>" alt="picto garde d'enfants"/>
                    <hr/>
                    <h4>Garde<br/>d'enfant</h4>
                </div>
            </a>
            <a href="bricolage_entretien.php" class="<?php if ($page_title == 'bricolage') {echo 'active';} ?>">
                <div class="rubrique">
                    <img src="<?php
                    if ($page_title == 'bricolage') {
                        echo 'images/picto_entretien_red.gif';
                    } else {
                        echo 'images/picto_entretien.gif';
                    }
                    ?>" alt="picto entretien"/>
                    <hr/>
                    <h4>Entretien<br/>bricolage</h4>
                </div>
            </a>
            <a href="soutien_scolaire.php" class="<?php if ($page_title == 'soutien_scolaire') {echo 'active';} ?>">
                <div class="rubrique">
                    <img src="<?php
                    if ($page_title == 'soutien_scolaire') {
                        echo 'images/picto_soutien_scolaire_red.gif';
                    } else {
                        echo 'images/picto_soutien_scolaire.gif';
                    }
                    ?>" alt="picto soutien scolaire"/>
                    <hr/>
                    <h4>Soutien<br/>scolaire</h4>
                </div>
            </a>
        </nav>
    </div>

    <form id="form_recherche" method="post">


<!--        --><?php
/*        var_dump($categories);

            */?>

        <div>
            <label for="nounou">Je cherche </label>
            <select name="nounou" id="nounou">
                <?php foreach ($categories as $domaine => $recherche) {
                    ?>
                    <option value="1"><?= $recherche[0] ?></option>
                    <option value="nounou"><?= $recherche[1] ?></option>
                    <option value="enf"><?= $recherche[2] ?></option>
                <?php } ?>
            </select>

        </div>
        <div>
            <label for="lieu">à </label>
            <input type="text" placeholder="adresse, ville, CP" id="lieu" value=""/>
        </div>
        <input type="submit" id="search_submit" value="Rechercher">
    </form>

</header>
,