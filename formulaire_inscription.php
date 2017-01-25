<?php
$page_title = 'formulaire inscription';
require_once 'views/page_head.php';

?>

<?php
//var_dump($_POST);

$liste_horaire = array('Choisir...', 'Temps partiel', 'Temps plein', 'Occasionnel', 'Le matin', 'Après midi');


function retire_accents($str) {
    $resultat = strtolower(str_replace(array('é','ï'),array('e','i'),$str));
    return $resultat;
}

// Affichage initial du formulaire ? ou bien réception des données ?
$en_reception = array_key_exists('saisie_nom', $_POST)
    && array_key_exists('saisie_prenom', $_POST)
    && array_key_exists('saisie_email', $_POST)
    && array_key_exists('saisie_telephone', $_POST)
    && array_key_exists('saisie_adresse', $_POST)
    && array_key_exists('saisie_cod_postal', $_POST)
    && array_key_exists('saisie_cod_postal', $_POST);

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
    $prenom_valide = (1 === preg_match('/\w{1,}/', $prenom));
}

// Réception du courriel
$email = '';
$email_valide = true;
if (array_key_exists('saisie_email', $_POST)) {
    $email = filter_input(INPUT_POST, 'saisie_email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}
//telephone
$phone = '';
$telephone_valide = true;
if(array_key_exists('saisie_telephone', $_POST)){
    $phone = filter_input(INPUT_POST, 'saisie_telephone' , FILTER_SANITIZE_STRING);
    $telephone_valide = (1 === preg_match('/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', $phone));//mayusculas y minusculas
}

//adresse
$adresse = '';
$adresse_valide = true;
if(array_key_exists('saisie_adresse', $_POST)){
    $adresse = filter_input(INPUT_POST, 'saisie_adresse' , FILTER_SANITIZE_STRING);
    $adresse_valide = (1 === preg_match('/\w{1,}/', $adresse));//mayusculas y minusculas
}

// Code postal
$cdpostal = '';
$cdPostal_valide = true;
if (array_key_exists('saisie_cod_postal', $_POST)) {
    $cdpostal = filter_input(INPUT_POST, 'saisie_cod_postal', FILTER_SANITIZE_STRING);
    $cdPostal_valide = (1 === preg_match('/^[a-zA-Z]{1}[0-9]{1}[a-zA-Z]{1}(\-| |){1}[0-9]{1}[a-zA-Z]{1}[0-9]{1}$/', $cdpostal));
}

// Réception des horaires choisis
$horaire_valides = true;
$temps = array(); // Horaire sélectionné par l'utilisateur
if (array_key_exists('horaire', $_POST)) {
    $temps = $_POST['horaire'];
}
// Horaire est valide si on est affichage initial ou bien si on a au moins un item sélectionné
if ($en_reception && empty($temps)) {
    $horaire_valides = false;
}

// Réception des dates calendrier choisis
$calendrier_valide = true;
$calendrier = array(); // Date sélectionnée par l'utilisateur
if (array_key_exists('datepicker', $_POST)) {
    $calendrier = $_POST['datepicker'];
}
// Date est valide si on est affichage initial ou bien si on a au moins un item sélectionné
if ($en_reception && empty($calendrier)) {
    $calendrier_valide = false;
}

// Réception des textarea
$description_valide = true;
$description = array();
if (array_key_exists('saisie_description', $_POST)) {
    $description = $_POST['saisie_description'];
}
if ($en_reception && empty($description)) {
    $description_valide = false;
}


if ($en_reception && $nom_valide
    && $prenom_valide
    && $email_valide
    && $telephone_valide
    && $adresse_valide
    && $cdPostal_valide
    && $horaire_valides) {
    // Les données de formulaire sont valides
    header('Location:');
    exit;
}

?>
<div id="form_inscripion">
    <a href="index.php"><img id="logo" src="images/logo_provisoire.jpg" alt="logo quick services"/></a>
    <h2>Veuillez vous inscrire ici.</h2>

    <form id="formulaire" action="<?= basename(__FILE__) ?>" method="post">

        <!--Nom-->
        <!-- method GET par defaut, POST si précisé -->
        <div >
            <label for="saisie_nom"><span>*</span> Nom : </label>
            <input type="text" placeholder="votre nom" id="saisie_nom"
                   name="saisie_nom" class="<?= $nom_valide ? '' : 'invalid' ?>" value="<?= $nom ?>"/>
            <?php if ( ! $nom_valide) { ?>
                <p>Le nom n'est pas valide.</p>
            <?php } ?>
        </div>

        <!--prenom-->
        <div >
            <label for="saisie_prenom"><span>*</span> Prénom : </label>
            <input type="text" placeholder="votre prénom" id="saisie_prenom"
                   name="saisie_prenom" class="<?= $prenom_valide ? '' : 'invalid' ?>" value="<?= $prenom ?>"/>
            <?php if ( ! $prenom_valide) { ?>
                <p>Le prenom n'est pas valide</p>
            <?php } ?>
        </div>

        <!--courriel-->
        <div >
            <label for="saisie_email"><span>*</span> Courriel : </label>
            <input type="text" placeholder=" exemple@domaine.com" id="saisie_email"
                   name="saisie_email" class="<?= $email_valide ? '' : 'invalid' ?>" value="<?= $email ?>"/>
            <?php if ( ! $email_valide) { ?>
                <p>L'adresse courriel n'est pas valide.</p>
            <?php } ?>
        </div>

        <!--    telephone -->
        <div >
            <label for="saisie_telephone"><span>*</span> Téléphone : </label>
            <input type="tel" placeholder="(000) 000-0000" id="saisie_telephone"
                   name="saisie_telephone" class="<?=$telephone_valide  ? '' : 'invalid'?>" value="<?=$phone?>"/>

            <?php if(!$telephone_valide){ ?>
                <p>Le numero téléphone n'est pas valide.</p>
            <?php } ?>
        </div>

        <!--Adresse-->
        <div >
            <label for="saisie_adresse"><span>*</span> Adresse : </label>
            <input type="text" placeholder="votre adresse" id="saisie_adresse"
                   name="saisie_adresse" class="<?= $adresse_valide ? '' : 'invalid' ?>" value="<?= $adresse ?>"/>
            <?php if ( ! $adresse_valide) { ?>
                <p>L'adresse n'est pas valide.</p>
            <?php } ?>
        </div>

        <!--code postal-->
        <div>
            <label for="saisie_cod_postal"><span>*</span> Code postal : </label>
            <input type="text" placeholder="h1t 1m4 / H1T 1M4" id="saisie_cod_postal"
                   name="saisie_cod_postal" class="<?= $cdPostal_valide ? '' : 'invalid' ?>" value="<?= $cdpostal ?>"/>
            <?php if ( ! $cdPostal_valide) { ?>
                <p>Le code postal n'est pas valide.</p>
            <?php } ?>
        </div>


        <!--    horaire -->
        <!-- Select liste de horaire -->
        <div >
            <label for="horaire">Horaire : </label>
            <select class="<?= $horaire_valides ? '' : 'invalid' ?>" name="horaire[]" id="horaire" ><!-- multiple="multiple"-->
                <?php foreach ($liste_horaire as $temps) {
                    $option_value = retire_accents($temps);
                    ?>
                    <option value="<?= $option_value ?>"
                        <?= array_key_exists('horaire', $_POST) && in_array($option_value,$_POST['horaire']) ? 'selected="selected"' : '' ?>
                    ><?= $temps ?></option>
                <?php } ?>
            </select>
            <?php if ( ! $horaire_valides) { ?>
                <p>Au moins un horaire doit être sélectionné.</p>
            <?php } ?>
        </div>

        <!--    calendrier -->

        <div>
            <label for="datepicker"><span>*</span> Date : </label>
            <input type="date" name="datepicker" id="datepicker"
                   class="calendrier <?= $calendrier_valide ? '' : 'invalid' ?>" value="<?= $calendrier ?>"/>
            <?php if ( ! $calendrier_valide) { ?>
                <p>Une date doit être sélectionnée.</p>
            <?php } ?>
        </div>


        <!--    Description d l'emploi -->
        <div>
            <label for="saisie_description">Description de l'emploi</label>
            <textarea name="textarea" placeholder="Description..." id="saisie_description"
                      class="<?= $description_valide ? '' : 'invalid' ?>" rows="5" cols="68" ></textarea>
            <?php if ( ! $description_valide) { ?>
                <p>Vous devez faire une description</p>
            <?php } ?>
        </div>

        <div>
            <input type="submit" value="Inscription"/>
        </div>
    </form>
    <p><a href="formulaire_connexion.php">J'ai déjà un compte</a></p>
    <p><span>Pas de compte ? </span><a href="inscription.php">Inscrivez-vous !</a></p>
</div>


</html>