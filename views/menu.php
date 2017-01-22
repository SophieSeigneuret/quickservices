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





<!--<nav>-->
<!--    <ul>-->
<!--        <li class="--><?php //if($page_title == 'Accueil'){echo 'active';} ?><!--"><a href="index.php">Index</a></li>-->
<!--        <li class="--><?php //if($page_title == 'Services'){echo 'active';} ?><!--"><a href="services.php">Services</a>-->
<!--            <ul>-->
<!--                <li class="--><?php //if($page_title == 'Garde d’enfants'){echo 'active';} ?><!--"><a href="garde_enfants.php">Garde d’enfants</a></li>-->
<!--                <li class="--><?php //if($page_title == 'Soutien scolaire'){echo 'active';} ?><!--"><a href="soutien_scolaire.php">Soutien scolaire</a></li>-->
<!--                <li class="--><?php //if($page_title == 'Bricolage et entretien'){echo 'active';} ?><!--"><a href="bricolage_entretien.php">Bricolage et entretien</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="--><?php //if($page_title == 'Comme ça marche'){echo 'active';} ?><!--"><a href="comme_ça_marche.php">Comme ça marche</a></li>-->
<!--        <li class="--><?php //if($page_title == 'Contact'){echo 'active';} ?><!--"><a href="contact.php">Contact</a></li>-->
<!---->
<!--    </ul>-->
<!--</nav>-->