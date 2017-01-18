<nav>
    <ul>
        <li class="<?php if($page_title == 'Accueil'){echo 'active';} ?>"><a href="index.php">Index</a></li>
        <li class="<?php if($page_title == 'Services'){echo 'active';} ?>"><a href="services.php">Services</a>
            <ul>
                <li class="<?php if($page_title == 'Garde d’enfants'){echo 'active';} ?>"><a href="garde_enfants.php">Garde d’enfants</a></li>
                <li class="<?php if($page_title == 'Soutien scolaire'){echo 'active';} ?>"><a href="soutien_scolaire.php">Soutien scolaire</a></li>
                <li class="<?php if($page_title == 'Bricolage et entretien'){echo 'active';} ?>"><a href="bricolage_entretien.php">Bricolage et entretien</a></li>
            </ul>
        </li>
        <li class="<?php if($page_title == 'Comme ça marche'){echo 'active';} ?>"><a href="comme_ça_marche.php">Comme ça marche</a></li>
        <li class="<?php if($page_title == 'Contact'){echo 'active';} ?>"><a href="contact.php">Contact</a></li>

    </ul>
</nav>