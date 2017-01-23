<form id="form_recherche" method="post">
    <div>
        <label for="nounou">Je cherche </label>
        <select name="nounou" id="nounou">
            <?php foreach ($categories as $domaine => $recherche) {
                ?>
                <option value="1"><?= $recherche[0] ?></option>
                <option value="nounou"><?= $recherche[1] ?></option>
                <option value="enf"><?= $recherche[2] ?></option>
            <?php } ?>
        </select>

    </div>
    <div>
        <label for="lieu">à </label>
        <input type="text" placeholder="adresse, ville, CP" id="lieu" value=""/>
    </div>
    <input type="submit" id="search_submit" value="Rechercher">
</form>