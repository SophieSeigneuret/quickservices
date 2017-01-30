<?php
// $page_title = 'soutien_scolaire';

require_once 'defines.php';
require_once 'db/db_access.php';

//$service = NULL;
//if (array_key_exists(GARDE_ENF, $_GET)) {
//    $service = GARDE_ENF;
//} else if (array_key_exists(ENTRETIEN, $_GET)) {
//    $service = ENTRETIEN;
//} else if (array_key_exists(SOUTIEN, $_GET)) {
//    $service = SOUTIEN;
//}

require_once 'views/page_head.php';
require_once 'views/header.php';


?>
<main>
    <?php
    require_once 'views/page_main_categorie.php';
    ?>
</main>
<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>
</html>
