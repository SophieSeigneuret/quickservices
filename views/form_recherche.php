<form id="form_recherche" method="post">
    <div>
        <label for="rapid_search">Je cherche </label>
        <select name="rapid_search" id="rapid_search">
            <?php if (array_key_exists(GARDE_ENF, $_GET)) {
                foreach ($options_OD[GARDE_ENF] as $od => $service_string) { ?>
                    <option value="<?= $od ?>"><?= $service_string ?></option>
                <?php } ?>
            <?php } else if (array_key_exists(ENTRETIEN, $_GET)) {
                foreach ($options_OD[ENTRETIEN] as $od => $service_string) { ?>
                    <option value="<?= $od ?>"><?= $service_string ?></option>
                <?php } ?>
            <?php } else if (array_key_exists(SOUTIEN, $_GET)) {
                foreach ($options_OD[SOUTIEN] as $od => $service_string) { ?>
                    <option value="<?= $od ?>"><?= $service_string ?></option>
                <?php } ?>
            <?php } else {
                foreach ($options_OD as $domaine => $recherche) { ?>
                    <optgroup label="<?= $domaine ?>">
                        <?php foreach ($recherche as $od => $service_string) { ?>
                            <option value="<?= $od ?>"><?= $service_string ?></option>
                        <?php } ?>
                    </optgroup>
                <?php } ?>
            <?php } ?>
        </select>
    </div>
    <div>
        <label for="lieu">à </label>
        <input type="text" placeholder="adresse, ville, CP" id="lieu" value=""/>
    </div>
    <input type="submit" id="search_submit" value="Rechercher">
</form>
