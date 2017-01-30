<?php
require_once 'defines.php';
require_once 'db/db_access.php';


$users = get_users();
//var_dump($users);


function affiche_picto($service) {
    switch ($service) {
        case 'garde' :
//            echo 'images/picto_garde_enfants.gif';
            echo 'images/picto_soutien_scolaire_profil.gif';
            break;
        case 'soutien' :
//            echo 'images/picto_soutien_scolaire.gif';
            echo 'images/picto_garde_enfants_profil.gif';
            break;
        case 'entretien' :
//            echo 'images/picto_entretien.gif';
            echo 'images/picto_entretien_profil.gif';
            break;
    }
}

?>

<div class="pa_sec_recherche">
    <div class="pa_resultats">
        <div class="row">

            <?php foreach ($users as $profil) { ?>
                <div class="col-3 photo_profil">
                    <img src="<?= ARTICLE_IMG_PATH . $profil['photo'] ?>" alt="photo <?= $profil['nom'] ?>">
                </div>
                <div class="col-9 pa_info_profil" >
                    <div class="row">
                        <div class="col-6">
                            <h3><a href="detail.php"><?= $profil['nom'] ?></a></h3>
                        </div>
                         <div class="col-6 picto_accueil">
                             <img src="<?= !empty($profil['service_1']) ? affiche_picto($profil['service_1']) : ''; ?>" alt="<?= empty($profil['service_1']) ? '' : 'picto service';?>" />
                             <img src="<?= !empty($profil['service_2']) ? affiche_picto($profil['service_2']) : ''; ?>" alt="<?= empty($profil['service_2']) ? '' : 'picto service';?>" />
                             <img src="<?= !empty($profil['service_3']) ? affiche_picto($profil['service_3']) : ''; ?>" alt="<?= empty($profil['service_3']) ? '' : 'picto service';?>" />
                         </div>
                    </div>
                            <p><?= utf8_encode($profil['info_profil']) ?></p><br>
                            <p><a href="detail.php"><span>En savoir plus...</span></a></p>
                    </div>
                <hr>
            <?php } ?>

        </div>
    </div>
</div>

        <div class="pa_navigation_cat">
            <a href="#" class="prev_pag"><</a>
            <a href="#" class="pag_selecteur current">1</a>
            <a href="#" class="pag_selecteur">2</a>
            <a href="#" class="pag_selecteur">3</a>
            <a href="#" class="pag_selecteur">4</a>
            <a href="#" class="pag_selecteur">5</a>
            <a href="#" class="next_pag">></a>
        </div>
