<?php
$profils = array (
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
            'entretien' => 'images/picto_entretien_30.png',
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
            'soutien_scolaire' => 'images/picto_soutien_scolaire_30.png',
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
);

?>

<div class="pa_sec_recherche">
    <div class="pa_resultats">
        <div class="row">


                <?php foreach ($profils as $k => $profil) { ?>
                    <div class="col-3 photo_profil">
                        <img src="<?= $profil['image'] ?>" alt="" >

                    </div>

                    <div class="col-9 pa_info_profil" >
                        <div class="row">
                            <div class="col-6">
                                <h3><?= $profil['name'] ?></h3>
                            </div>

                            <div class="col-6 picto_accueil">
                                <img src="<?= $profil['categorie']['garde_enfant'] ?>" alt="">
                                <img src="<?= $profil['categorie']['entretien'] ?>" alt="">
                                <img src="<?= $profil['categorie']['soutien_scolaire'] ?>" alt="">
                            </div>
                        </div>
                        <p><?= $profil['info'] ?></p><br>
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


</div>