<?php

$annonces = array('Jardinier', 'Femme de ménage', 'Aide à domicile', 'Bricolage',
    'Cours particulier', 'Professeur de langue', 'Professeur de musique',
    'Garde partagée', 'Nounou', 'Babysitter');

?>

<footer>
    <section>
        <h2>Catégories d'annonces</h2>
        <?php foreach ($annonces as $metier) { ?>
            <span>| </span><a href="#"><?= $metier ?></a>
        <?php } ?>
    </section>
    <section>
        <p>© Pilar - Sophie 2017 <span>|</span> <a href="#">Nous contacter</a> <span>|</span> <a href="#">Mentions
                légales</a> <span>|</span> <a href="#">CGU</a></p>
        <div id="liens_sociaux">
            <a href="http://facebook.com" target="_blank"><img src="images/social_facebook.gif" alt="facebook"></a>
            <a href="http://twitter.com" target="_blank"><img src="images/social_twitter.gif" alt="twitter"></a>
            <a href="http://googleplus.com" target="_blank"><img src="images/social_googleplus.gif" alt="google plus"></a>
        </div>
    </section>
</footer>
