<?php
//session_start();

require_once 'defines.php';
require_once 'views/page_head.php';
require_once 'views/top_header.php';
require_once 'db/db_access.php';

//var_dump($_SERVER['HTTP_REFERER']);
//var_dump($_GET);

$id = $_GET['id'];
$user = get_user_by_id($id);
//var_dump($user);


function affiche_picto($service) {
    switch ($service) {
        case 'garde' :
            echo 'images/picto_garde_enfants.gif';
            break;
        case 'soutien' :
            echo 'images/picto_soutien_scolaire.gif';
            break;
        case 'entretien' :
            echo 'images/picto_entretien.gif';
            break;
    }
}
?>

<section id="detail">
    <a href="<?= ! empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php' ?>">retour</a>
    <img src="<?= ARTICLE_IMG_PATH . $user['photo'] ?>" alt="photo <?= $user['nom'] ?>">
    <div id="cv">
        <h2><?= $user['nom'] ?></h2>
        <ul>
            <li><?= get_age($user['birth_date']) ?> ans</li>
            <li><?= $user['ville'] ?></li>
        </ul>
        <p>Dernière connexion il y a <?= rand (1, 30) ?> jours</p>
    </div>
    <div id="me_contacter">
        <p>Me contacter</p>
        <div id="dialog" title="Contactez <?= $user['nom'] ?>">
            <p><?= $user['telephone'] ?></p>
            <a href="mailto:<?= $user['mail'] ?>"><?= $user['mail'] ?></a>
        </div>
        <button id="opener"><img src="images/picto_tel.png" alt="picto téléphone"></button>
        <a href="mailto:<?= $user['mail'] ?>"><img src="images/picto_enveloppe.png" alt="picto enveloppe"></a>
    </div>
    <div id="encadre">
        <h3>Services offerts</h3>
        <img src="<?= !empty($user['service_1']) ? affiche_picto($user['service_1']) : ''; ?>" alt="<?= empty($user['service_1']) ? '' : 'picto service';?>" />
        <img src="<?= !empty($user['service_2']) ? affiche_picto($user['service_2']) : ''; ?>" alt="<?= empty($user['service_2']) ? '' : 'picto service';?>" />
        <img src="<?= !empty($user['service_3']) ? affiche_picto($user['service_3']) : ''; ?>" alt="<?= empty($user['service_3']) ? '' : 'picto service';?>" />
        <h3>Salaire</h3>
        <p><?= $user['salaire'] ?></p>
        <h3>Disponibiités</h3>
        <p><?= $user['disponibilites'] ?></p>
    </div>
    <div id="presentation">
        <h3>Présentation</h3>
        <p><?= $user['presentation'] ?></p>
        <h3>Les plus</h3>
        <ul>
            <li><span class="bold">Langues parlées : </span><?= $user['langues'] ?></li>
            <li><span class="bold">Permis de conduire : </span>
                <?= $user['permis'] ? 'oui' : 'non'; ?></li>

            <?php if ($user['permis'] == 1) { ?>
                <li><span class="bold">A sa voiture : </span>
                    <?= $user['voiture'] ? 'oui' : 'non'; ?></li>
            <?php } ?>
            <li><span class="bold">Expérience : </span><?= $user['experience'] ?> an(s)</li>
            <li><span class="bold">Services offerts : </span><?= $user['service_1'] ?>
                <?= $user['service_2'] ? "- " . $user['service_2'] : ''; ?>
                <?= $user['service_3'] ? "- " . $user['service_3'] : ''; ?></li>
        </ul>
        <h3>Recommandations</h3>
        <p><?= $user['recommandation'] ?></p>
        <a href="#">Ecrire une recommandation</a>
    </div>
</section>
<?php
require_once 'views/javascript.php';
?>
</html>
