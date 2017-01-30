<?php
//var_dump($_SERVER['REQUEST_METHOD']); //para saber a que metodo esta el formulario
//var_dump($_POST);
//var_dump($_GET);
//var_dump($_REQUEST);

// Affichage initial du formulaire ? ou bien réception des données ?
$en_reception = array_key_exists('items', $_POST);

// Réception choix items
$items = array(); // items cochées par l'utilisateur
$item_valide = true;
    if (array_key_exists('items', $_POST)) {
        $items = $_POST['items'];
    }
    // Items est valide si on est affichage initial ou bien si on a au moins une item cochée
    if ($en_reception && empty($items)) {
        $item_valide = false;
    }

    if ($en_reception &&  $item_valide) {
        // Les données de formulaire sont valides
        header('Location:');
        exit;
    }
?>


<form id="formulaire" action="<?= basename(__FILE__) ?>" method="post">
    <h3>Recherche avancée</h3>
    <h4>Type service</h4>

    <!-- items-->
    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">Tout</label>
    </div>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">Temps partiel</label>
    </div>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">Régulier</label>
    </div>


    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">Ponctuel</label>
    </div>

    <h4>Langue parlée</h4>
    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">Français</label>
    </div>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">Anglais</label>
    </div>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">Espagnol</label>
    </div>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">Chinois</label>
    </div>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">Autre</label>
    </div>


    <h4>Transport</h4>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">A son permis</label>
    </div>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">A sa voiture</label>
    </div>

    <h4>Salaire</h4>
    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout"> - de 10$/h</label>
    </div>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">10 - 15$/h</label>
    </div>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout">16 - 29$/h</label>
    </div>

    <div class="<?= $item_valide ? '' : 'invalid' ?>">
        <input type="checkbox" id="item_tout" name="items[]" value="item_tout"
            <?= array_key_exists('items', $_POST) && in_array('item_tout', $_POST['items']) ? ' checked="checked"': ''?> />
        <label for="item_tout"> + 30$/h</label>
    </div>


    <?php if ( ! $item_valide) { ?>
        <p>Au moins un item doit être cochée.</p>
    <?php } ?>


    <div>
        <input type="submit" value="Soumettre"/>
    </div>
</form>