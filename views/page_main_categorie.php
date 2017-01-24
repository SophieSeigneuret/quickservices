<div class="container">
    <div class="row">
        <div class="col-4 pa_column_gouche">
            <div class="pa_carte">
                <div class="carte">
                    <img src="images/carte.png" alt="">
                </div>
            </div>
            <div class="pa_form_categorie">
                <?php
                require_once 'form_categorie.php';
                ?>
            </div>
        </div>

        <div class="col-8 pa_column_droite">
            <?php
            require_once 'profil_catgorie.php';
            ?>
        </div>
    </div>
</div><!--fin .container-->
