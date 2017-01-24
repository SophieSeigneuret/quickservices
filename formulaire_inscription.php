<?php
$page_title = 'formulaire inscription';
require_once 'views/page_head.php';

?>

<?php
//var_dump($_POST);

$liste_horaire = array('Temps partiel', 'Temps plein', 'Occasionnel', 'Le matin', 'Après midi');


function retire_accents($str) {
    $resultat = strtolower(str_replace(array('é','ï'),array('e','i'),$str));
    return $resultat;
}

// Affichage initial du formulaire ? ou bien réception des données ?
$en_reception = array_key_exists('saisie_nom', $_POST)
    && array_key_exists('saisie_prenom', $_POST)
    && array_key_exists('saisie_email', $_POST);

// Réception du nom
$nom = '';
$nom_valide = true;
if (array_key_exists('saisie_nom', $_POST)) {
    // PHP assure le filtrage de la chaîne d'entrée
    $nom = filter_input(INPUT_POST, 'saisie_nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/\w{1,}/', $nom));
}

// Réception du prenom
$prenom = '';
$prenom_valide = true;
if (array_key_exists('saisie_prenom', $_POST)) {
    $prenom = filter_input(INPUT_POST, 'saisie_prenom', FILTER_SANITIZE_STRING);
    // 2 caractères minimum, le premier est un caractère majuscule
    $prenom_valide = (1 === preg_match('/[A-Z]\w{1,}/', $prenom));
}

// Réception du courriel
$email = '';
$email_valide = true;
if (array_key_exists('saisie_email', $_POST)) {
    $email = filter_input(INPUT_POST, 'saisie_email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}

// Code postal
$cdpostal = '';
$cdPostal_valide = true;
if (array_key_exists('saisie_cod_postal', $_POST)) {
    $cdpostal = filter_input(INPUT_POST, 'saisie_cod_postal', FILTER_SANITIZE_STRING);
    $cdPostal_valide = (false !== filter_var($cdpostal, FILTER_VALIDATE_EMAIL));
}

//password
$password = '';
$password_valide = true;
if(array_key_exists('saisie_password', $_POST)){
    $password = filter_input(INPUT_POST, 'saisie_password' , FILTER_SANITIZE_STRING);
    $password_valide = (1 === preg_match('/^[a-zA-Z0-9_]{6}$/', $password));//mayusculas y minusculas
}

// Réception des horaires choisis
$horaire_valides = true;
$temps = array(); // Sports sélectionnés par l'utilisateur
if (array_key_exists('horaire', $_POST)) {
    $temps = $_POST['horaire'];
}
// Sports est valide si on est affichage initial ou bien si on a au moins un sport sélectionné
if ($en_reception && empty($sports)) {
    $sports_valides = false;
}

if ($en_reception && $nom_valide && $prenom_valide && $email_valide && $villes_valide && $sports_valides) {
    // Les données de formulaire sont valides
    header('Location:ok.php');
    exit;
}

?>
<div id="form_inscripion">
    <a href="index.php"><img id="logo" src="images/logo_provisoire.jpg" alt="logo quick services"/></a>
    <h2>Veuillez vous inscrire ici.</h2>

    <form id="formulaire" action="<?= basename(__FILE__) ?>" method="post">

        <!--Nom-->
        <!-- method GET par defaut, POST si précisé -->
        <div class="<?= $nom_valide ? '' : 'invalid' ?>">
            <label for="saisie_nom">Nom : </label>
            <input type="text" placeholder="(entrez votre nom)" id="saisie_nom" name="saisie_nom"  value="<?= $nom ?>"/>
            <?php if ( ! $nom_valide) { ?>
                <p>Le nom doit contenir au moins un caractère.</p>
            <?php } ?>
        </div>




        <!--Nom-->
        <!-- method GET par defaut, POST si précisé -->
        <div class="<?= $nom_valide ? '' : 'invalid' ?>">
            <label for="saisie_nom">Nom : </label>
            <input type="text" placeholder="(entrez votre nom)" id="saisie_nom" name="saisie_nom"  value="<?= $nom ?>"/>
            <?php if ( ! $nom_valide) { ?>
                <p>Le nom doit contenir au moins un caractère.</p>
            <?php } ?>
        </div>





        <!--prenom-->
        <div class="<?= $prenom_valide ? '' : 'invalid' ?>">
            <label for="saisie_prenom">Prénom : </label>
            <input type="text" placeholder="(entrez votre prénom)" id="saisie_prenom" name="saisie_prenom" value="<?= $prenom ?>"/>
            <?php if ( ! $prenom_valide) { ?>
                <p>Le prénom doit contenir 2 caractères minimum, le premier étant un caractère majuscule.</p>
            <?php } ?>
        </div>

        <!--courriel-->
        <div class="<?= $email_valide ? '' : 'invalid' ?>">
            <label for="saisie_email">Courriel : </label>
            <input type="text" placeholder="(entrez votre courriel)" id="saisie_email" name="saisie_email" value="<?= $email ?>"/>
            <?php if ( ! $email_valide) { ?>
                <p>L'adresse courriel n'est pas valide.</p>
            <?php } ?>
        </div>

        <!--code postal-->
        <div class="<?= $cdPostal_valide ? '' : 'invalid' ?>">
            <label for="saisie_cod_postal">Code postal : </label>
            <input type="text" placeholder="(entrez votre code postal)" id="saisie_cod_postal" name="saisie_cod_postal" value="<?= $cdpostal ?>"/>
            <?php if ( ! $cdPostal_valide) { ?>
                <p>Le code postal n'est pas valide.</p>
            <?php } ?>
        </div>

        <!--    password -->
        <div class="<?=$password_valide  ? '' : 'invalid'?>">
            <label for="saisie_password">Password : </label>
            <input type="password" placeholder="(entrez votre password)" id="saisie_password" name="saisie_password" value="<?=$password?>"/>

            <?php if(!$password_valide){ ?>
                <p>Le code postal n'est pas valide.</p>
            <?php } ?>
        </div>


        <!--    horaire -->
        <!-- Select liste de horaire -->
        <div class="<?= $horaire_valides ? '' : 'invalid' ?>">
            <label for="horaire">Horaire : </label>
            <select name="horaire[]" id="horaire" multiple="multiple">
                <?php foreach ($liste_horaire as $temps) {
                    $option_value = retire_accents($temps);
                    ?>
                    <option value="<?= $option_value ?>"
                        <?= array_key_exists('horaire', $_POST) && in_array($option_value,$_POST['horaire']) ? 'selected="selected"' : '' ?>
                    ><?= $temps ?></option>
                <?php } ?>
            </select>
            <?php if ( ! $horaire_valides) { ?>
                <p>Au moins un sport doit être sélectionné.</p>
            <?php } ?>
        </div>

        <!--    calendrie -->

        <label for="datepicker">Date </label>
        <input type="text" name="date_debut" id="datepicker" value=""/>



        <!--    Description d l'emploi -->
        <div class="">
            <label for="date">Description de l'emploi</label>
            <textarea name="textarea" rows="5" cols="68">
            Vous pouvez écrire quelque chose ici.
            </textarea>

        </div>

        <div>
            <input type="submit" value="Soumettre"/>
        </div>
    </form>
    <p><a href="formulaire_connexion.php">J'ai déjà un compte</a></p>
    <p>Pas de compte ? <a href="inscription.php">Inscrivez-vous !</a></p>
</div>

<script>
    /* DATEPICKER */
    // ajouter 1 jour au datepicker début et fin de saison
    var min_date = new Date(forfait_voulu.debut_saison);
    min_date.setDate(min_date.getDate()+1);
    var max_date = new Date(forfait_voulu.fin_saison);
    max_date.setDate(max_date.getDate()+1);
    // rajout du datepicker jQuery
    $("#datepicker").datepicker({
        showOn: 'button',
        buttonImage: 'images/calendar_icon.gif',
        numberOfMonths: 2,
        showButtonPanel: true,
        dateFormat: "dd-mm-yy",
        minDate: min_date,
        maxDate: max_date
    });

    /* VALIDER DATEPICKER */
    var champ_datepicker = $("#datepicker");
    var img_calendrier = $("#resa_client button");
    if (champ_datepicker.val().trim().length < MIN_NB_CAR) {
        champ_datepicker.addClass("error");  // ajoute la classe error
        if (!champ_datepicker.next().is(".error_msg")) {
            img_calendrier.after("<p class='error_msg'>Champ obligatoire</p>");  // ajoute un paragraphe de message apres l'element input
        }
        formulaire_valide = false;
    } else {
        champ_datepicker.removeClass("error");
        img_calendrier.next(".error_msg").remove();
    }



</script>
<?php

//require_once 'views/javascript.php';
?>
</html>