<?php
$page_title = 'formulaire inscription';
require_once 'views/page_head.php';

?>

<?php
//var_dump($_POST);

$liste_sports = array('Soccer', 'Danse', 'Aérobie', 'Cyclisme', 'Aïkido');


function retire_accents($str) {
    $resultat = strtolower(str_replace(array('é','ï'),array('e','i'),$str));
    return $resultat;
}
/*var_dump(retire_accents('Aérobie'));
var_dump(retire_accents('Aïkido'));*/

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

//password

$password = '';
$password_valide = true;
if(array_key_exists('saisie_password', $_POST)){
    $password = filter_input(INPUT_POST, 'saisie_password' , FILTER_SANITIZE_STRING);
    $password_valide = (1 === preg_match('/^[a-zA-Z0-9_]{6}$/', $password));//mayusculas y minusculas
}


// Réception des sports choisis
$sports_valides = true;
$sports = array(); // Sports sélectionnés par l'utilisateur
if (array_key_exists('sports', $_POST)) {
    $sports = $_POST['sports'];
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
            <input type="text" placeholder="(entrez votre nom)" id="saisie_nom" name="saisie_nom" value="<?= $nom ?>"/>
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
                <p>PASSWORD doit ...</p>
            <?php } ?>
        </div>


        <!--    horaire -->
        <div class="">
            <label for="saisie_password">A quel heure ? : </label>
            <select name="" id="" multiple="multiple" >
                <option value="1">Temps partiel</option>
                <option value="1">Temps plein</option>
                <option value="1">Occasionnel</option>
            </select>

        </div>


        <!-- Select activités sportives (sports) -->
        <div class="<?= $sports_valides ? '' : 'invalid' ?>">
            <label for="sports">Sport : </label>
            <select name="sports[]" id="sports" multiple="multiple">
                <?php foreach ($liste_sports as $sport) {
                    $option_value = retire_accents($sport);
                    ?>
                    <option value="<?= $option_value ?>"
                        <?= array_key_exists('sports', $_POST) && in_array($option_value,$_POST['sports']) ? 'selected="selected"' : '' ?>
                    ><?= $sport ?></option>
                <?php } ?>
            </select>
            <?php if ( ! $sports_valide) { ?>
                <p>Au moins un sport doit être sélectionné.</p>
            <?php } ?>
        </div>

        <!--    calendrie -->
        <div class="">
            <label for="date">Date: </label>
            <input type="text" value="" name="date" id="champ_date" size="12" maxlength="10">
            <div id="calendarMain"></div>
            <script type="text/javascript">
                //<![CDATA[
                calInit("calendarMain", "", "champ_date", "jsCalendar", "day", "selectedDay");
                //]]>
            </script>
        </div>

        <!--    Description d l'emploi -->
        <div class="">
            <label for="date">Description de l'emploi</label>
            <textarea name="textarea" rows="5" cols="50">
  Vous pouvez écrire quelque
  chose ici.
</textarea>

        </div>




        <div>
            <input type="submit" value="Soumettre"/>
        </div>
    </form>
    <p><a href="formulaire_connexion.php">J'ai déjà un compte</a></p>
    <p>Pas de compte ? <a href="inscription.php">Inscrivez-vous !</a></p>
</div>

