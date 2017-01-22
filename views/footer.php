<?php

$annonces_garde = array('Babysitting ponctuel', 'Garde régulière', 'Garde partagée', 'Au pair', 'Nounou à domicile',);

$annonces_entretien = array('Ménage - Repassage', 'Cuisine', 'Bricolage', 'Jardinier', 'Déménagement',);

$annonces_cours = array('Sciences', 'Histoire - Géographie', 'Littératures - Langues', 'Art - Musique', 'Informatique',);

?>

<footer>
    <section>
        <h2>Catégories d'annonces</h2>
        <div>
            <ul>
                <?php foreach ($annonces_garde as $metier_garde) { ?>
                    <li><a href="#"><?= $metier_garde ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div>
            <ul>
                <?php foreach ($annonces_entretien as $metier_entretien) { ?>
                    <li><a href="#"><?= $metier_entretien ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div>
            <ul>
                <?php foreach ($annonces_cours as $metier_cours) { ?>
                    <li><a href="#"><?= $metier_cours ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </section>
    <hr/>
    <section>
        <p>© Pilar - Sophie 2017 <span>|</span> <a href="#">Nous contacter</a> <span>|</span> <a href="#">A propos de
                nous</a> <span>|</span> <a href="#">Mentions légales</a> <span>|</span> <a href="#">CGU</a></p>
        <div id="liens_sociaux">
            <a href="http://facebook.com" target="_blank"><img src="images/social_facebook.gif" alt="facebook"></a>
            <a href="http://twitter.com" target="_blank"><img src="images/social_twitter.gif" alt="twitter"></a>
            <a href="http://googleplus.com" target="_blank"><img src="images/social_googleplus.gif"
                                                                 alt="google plus"></a>
        </div>
    </section>
</footer>
