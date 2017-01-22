<div class="container">
    <div class="row">
        <div class="col-4 pa_column_gouche">
            <div class="pa_carte">
                <?php
                require_once 'pa_carte_categorie.php';
                ?>
            </div>
            <div class="pa_form_categorie">
                <?php
                require_once 'pa_form_categorie.php';
                ?>
            </div>
        </div>

        <div class="col-8 pa_column_droite">
            <?php
            require_once 'pa_profil_catgorie.php';
            ?>
        </div>
    </div>
</div><!--fin .container-->
