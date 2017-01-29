<?php
require_once 'defines.php';
require_once 'views/page_head.php';
require_once 'views/header.php';
require_once 'db/db_access.php';

$page_title = ACCUEIL;

$last_3users = get_last_3users();

//var_dump($last_3users);

?>
<main>
    <section id="avantages">
        <h2>Les avantages</h2>
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis, dolor eget sodales cursus, enim massa
            dapibus tellus, vitae ornare quam massa sed lectus. Donec mi nibh, auctor nec luctus auctor, ultricies id
            magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut rhoncus luctus sem, auctor tempus
            urna ultricies et. Integer cursus nibh at elit lacinia, et semper sem finibus.</p>-->
        <div class="avantage">
            <img src="images/picto_efficace.jpg" alt="picto efficace"/>
            <h3>Efficace</h3>
            <p>Tous les jours, des centaines de nouvelles annonces. Publiez une offre d'emploi et vous serez très vite
                contacté(e)&nbsp;!</p>
        </div>
        <div class="avantage">
            <img src="images/picto_securite.jpg" alt="picto sécurité"/>
            <h3>Sécuritaire</h3>
            <p>Tous les profils sont vérifiés. Accédez aux références et antécédents et recrutez sereinement&nbsp;!</p>
        </div>
        <div class="avantage">
            <img src="images/picto_gratuit.jpg" alt="picto gratuit"/>
            <h3>Gratuit</h3>
            <p>Vos recherches sont gratuites, vous ne payez rien en ligne, seulement la personne qui vous offre le
                service mais en direct.</p>
        </div>
    </section>
    <section id="ccm">
        <h2>Comment ça marche ?</h2>
        <div>
            <h3>Vous recherchez de l'aide</h3>
            <p>1 - Publiez une annonce</p>
            <p>2 - Consultez les profils des candidats</p>
            <p>3 - Contactez les candidats qui vous intéressent</p>
            <a href="#">En savoir plus</a>
        </div>
        <div>
            <h3>Vous proposez de l'aide</h3>
            <p>1 - Inscrivez-vous</p>
            <p>2 - Démarquez-vous par un profil visible</p>
            <p>3 - Trouvez un emploi rapidement</p>
            <a href="#">En savoir plus</a>
        </div>
    </section>
    <section id="candidats">
        <h2>Les derniers candidats inscrits</h2>
        <?php foreach ($last_3users as $info) { ?>
            <div>
                <a href="detail.php?id=<?= $info['id'] ?>"><img src="<?= ARTICLE_IMG_PATH . $info['photo'] ?>" alt="photo <?= $info['nom'] ?>"></a>
                <a href="detail.php?id=<?= $info['id'] ?>"><h3><?= $info['nom'] ?></h3></a>
                <p><?= get_age($info['birth_date']) ?> ans</p>
                <p><?= $info['ville'] ?></p>
                <a href="<?php switch ($info['service_1']) {
                    case 'garde' :
                        echo "services.php?garde_enfants";
                        break;
                    case 'soutien' :
                        echo "services.php?soutien_scolaire";
                        break;
                    case 'entretien' :
                        echo "services.php?entretien_bricolage";
                        break;
                } ?>"><h5><?= $info['service_1'] ?></h5></a>
            </div>
        <?php } ?>
    </section>
<!--    <section id="candidats">-->
<!--        <h2>Les derniers candidats inscrits</h2>-->
<!--        --><?php //foreach ($candidats as $key => $infos) { ?>
<!--            <div>-->
<!--                <a href="#"><img src="--><?//= $infos['avatar'] ?><!--" alt="photo Thierry"></a>-->
<!--                <a href="#"><h3>--><?//= $infos['name'] ?><!--</h3></a>-->
<!--                <p>--><?//= $infos['age'] ?><!-- ans</p>-->
<!--                <p>--><?//= $infos['city'] ?><!--</p>-->
<!--                <a href="--><?php //switch ($infos['category']) {
//                    case GARDE_ENF :
//                        echo "garde_enfants.php";
//                        break;
//                    case SOUTIEN :
//                        echo "soutien_scolaire.php";
//                        break;
//                    case ENTRETIEN :
//                        echo "bricolage_entretien.php";
//                        break;
//                } ?><!--"><h5>--><?//= $infos['category'] ?><!--</h5></a>-->
<!--            </div>-->
<!--        --><?php //} ?>
<!--    </section>-->
</main>
<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>
</html>
