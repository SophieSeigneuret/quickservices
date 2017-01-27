<nav id="menu">
    <a href="services.php?garde_enfants" class="<?php if (array_key_exists(GARDE_ENF, $_GET)) {echo 'active';} ?>">
        <div class="rubrique">
            <img src="<?php
            if (array_key_exists(GARDE_ENF, $_GET)) {
                echo 'images/picto_garde_enfants_red.gif';
            } else {
                echo 'images/picto_garde_enfants.gif';
            }
            ?>" alt="picto garde d'enfants"/>
            <hr/>
            <h4>Garde<br/>d'enfant</h4>
        </div>
    </a>
    <a href="services.php?entretien_bricolage" class="<?php if (array_key_exists(ENTRETIEN, $_GET)) {echo 'active';} ?>">
        <div class="rubrique">
            <img src="<?php
            if (array_key_exists(ENTRETIEN, $_GET)) {
                echo 'images/picto_entretien_red.gif';
            } else {
                echo 'images/picto_entretien.gif';
            }
            ?>" alt="picto entretien"/>
            <hr/>
            <h4>Entretien<br/>bricolage</h4>
        </div>
    </a>
    <a href="services.php?soutien_scolaire" class="<?php if (array_key_exists(SOUTIEN, $_GET)) {echo 'active';} ?>">
        <div class="rubrique">
            <img src="<?php
            if (array_key_exists(SOUTIEN, $_GET)) {
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