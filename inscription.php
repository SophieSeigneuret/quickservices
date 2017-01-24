 <?php
require_once 'defines.php';
$page_title = 'inscription etape 1';
?>
<?php
require_once 'views/page_head.php';
require_once 'views/header_inscription.php';
?>
<main>
    <!--  <?php
    // require_once 'views/insc_choise_cat.php';
    ?> -->

    <div class="container">
        <h2>Quel domaine vous intéresse ?</h2>
        <div class="row">
            <div class="pa_icons_cat">
                <a href="views/insc_fam_cand.php">
                    <div class="col-4 icon_categories">
                        <img src="images/picto_garde_enfants.gif" alt="">
                        <h4>Garde d'enfant</h4>
                        <p>Nounou, babysitting, etc.</p>
                    </div>
                </a>
            </div>

            <div class="pa_icons_cat">
                <div class="col-4 icon_categories">
                    <a href="#">
                        <img src="images/picto_entretien.gif" alt="">
                        <h4>Entretien / bricolage</h4>
                        <p>Ménage, repassage, jardinage, etc.</p>
                    </a>
                </div>
            </div>

            <div class="pa_icons_cat">
                <div class="col-4 icon_categories">
                    <a href="#">
                        <img src="images/picto_soutien_scolaire.gif" alt="">
                        <h4>Soutien scolaire</h4>
                        <p>Famille d'accueil, garde, promenade, etc.</p>
                    </a>
                </div>
            </div>
        </div>
    </div><!--fin .container-->

</main>
<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>
</html>


