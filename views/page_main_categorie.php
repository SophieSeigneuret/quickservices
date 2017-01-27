<div class="container">
    <div class="row">
        <div class="col-4 pa_column_gouche">
            <div class="pa_carte">
                <div class="carte">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.1014357046893!2d-73.58113268493864!3d45.568398734506374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91ea4dda399a9%3A0xa6ab6a8d65a31ab6!2s4556+Rue+Saint-Zotique+E%2C+Montr%C3%A9al%2C+QC+H1T+1M4!5e0!3m2!1sfr!2sca!4v1485391999912" width="300" height="300"
                            frameborder="0" style="border:0" allowfullscreen></iframe>

<!--                    <img src="images/carte.png" alt="">-->
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
