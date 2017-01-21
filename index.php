<?php
require_once 'defines.php';
$page_title = 'Accueil';
?>
<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
require_once 'views/aside.php';
?>
<main>
    <h2>Les avantages</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis, dolor eget sodales cursus, enim massa
        dapibus tellus, vitae ornare quam massa sed lectus. Donec mi nibh, auctor nec luctus auctor, ultricies id magna.
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut rhoncus luctus sem, auctor tempus urna
        ultricies et. Integer cursus nibh at elit lacinia, et semper sem finibus. Sed porta libero orci, ac pellentesque
        magna bibendum eu. Nulla bibendum iaculis ex ullamcorper rhoncus. Nulla blandit eros quis tortor egestas, quis
        laoreet felis consectetur. Maecenas pellentesque varius mi, non volutpat mauris accumsan vel. </p>
    <section id="avantages">
        <div class="avantages">
            <img src="images/picto_efficace.jpg" alt="picto efficace"/>
            <h3>Efficace</h3>
            <p>Tous les jours, des centaines de nouvelles annonces. Publiez une offre d'emploi et vous serez très vite
                contacté(e) !</p>
        </div>
        <div class="avantages">
            <img src="images/picto_securite.jpg" alt="picto sécurité"/>
            <h3>Sécuritaire</h3>
            <p>Tous les profils sont vérifiés. Accédez aux références et antécédents et recrutez sereinement !</p>
        </div>
        <div class="avantages">
            <img src="images/picto_gratuit.jpg" alt="picto gratuit"/>
            <h3>Gratuit</h3>
            <p>Vos recherches sont gratuites, vous ne payez rien en ligne, seulement la personne qui vous offre le
                service mais en direct.</p>
        </div>
    </section>
    <hr/>
    <section id="ccm">
        <h2>Comment ça marche ?</h2>
        <h3>Vous recherchez de l'aide</h3>
        <p>1 - Publiez une annonce</p>
        <p>2 - Consultez les profils des candidats</p>
        <p>3 - Contactez les candidats qui vous intéressent</p>
        <a href="comme_ça_marche.php">en savoir plus</a>
        <h3>Vous proposez de l'aide</h3>
        <p>1 - Inscrivez-vous</p>
        <p>2 - Démarquez-vous par un profil visible</p>
        <p>3 - Trouvez un emploi rapidement</p>
        <a href="comme_ça_marche.php">en savoir plus</a>
    </section>
</main>
<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>
</html>
