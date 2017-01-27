<?php
session_start();
require_once 'views/page_head.php';
require_once 'views/top_header.php';
?>

<section id="detail">
    <a href="">retour</a>
    <img src="images/marie.jpg" alt="photo profil">
    <div id="cv">
        <h2>Marie</h2>
        <ul>
            <li>36 ans</li>
            <li>Montréal</li>
        </ul>
        <p>Dernière connexion il y a 5 jours</p>
    </div>
    <div id="me_contacter">
        <p>Me contacter</p>
        <a href=""><img src="images/picto_tel.png" alt="picto téléphone"></a>
        <a href=""><img src="images/picto_enveloppe.png" alt="picto enveloppe"></a>
    </div>
    <div id="encadre">
        <h3>Services offerts</h3>
        <img src="images/picto_garde_enfants.gif" alt="garde enfants">
        <img src="images/picto_entretien.gif" alt="entretien">
        <h3>Salaire</h3>
        <p>10-15 $/h</p>
        <h3>Disponibiités</h3>
        <p>dès aujourd'hui</p>
    </div>
    <div id="presentation">
        <h3>Présentation</h3>
        <p>Bonjour ! Je suis étudiante et à la recherche de quelques activités qui peuvent m'aider à payer mes études et
            mon loyer. Venant d'une famille nombreuse, il a toujours été important de s'occuper des tâches ménagères à
            la maison, depuis que je suis jeune, d'aider à la maison sur toutes sortes de choses. Je serai donc ravie de
            pouvoir vous aider si vous avez besoin d'aide, de quelque nature que ce soit. N'hésitez pas à me contacter
            pour plus d'informations !</p>
        <h3>Les plus</h3>
        <ul>
            <li><span class="bold">Langues parlées : </span>Français, Anglais</li>
            <li><span class="bold">Permis de conduire : </span>Oui</li>
            <li><span class="bold">Expérience : </span>6 ans</li>
            <li><span class="bold">Services proposés : </span>Babysitting ponctuel, Ménage - Repassage</li>
        </ul>
        <h3>Recommandations</h3>
        <p>Pas de recommandations pour l'instant.</p>
        <a href="#">Ecrire une recommandation</a>
    </div>
</section>