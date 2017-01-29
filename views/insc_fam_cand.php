<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= 'quick_services'?></title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" type="image/gif" href="" />

</head>

<?php
//$page_title = 'formulaire inscription';
require_once '../defines.php';
?>
<!--<body id="wrapper">-->
<a href="../index.php"><img id="logo" src="../images/logo_provisoire.jpg" alt="logo quick services"/></a>
<main>

    <div class="container">

        <h2>Que cherchez vous ?</h2>
        <div class="row">

            <div class="col-2">
                <p></p>
            </div>


            <div class="pa_icons_cat">
                <a href="../formulaire_inscription.php">
                    <div class="col-4 icon_categories">
                        <img src="../images/icon_candidate.png" alt="">
                        <h4>Je cherche des enfants à garder</h4>
                    </div>
                </a>
            </div>

            <div class="pa_icons_cat">
                <div class="col-4 icon_categories">
                    <a href="#">
                        <img src="../images/icon_famille.png" alt="">
                        <h4>Je cherche un nounou</h4>
                    </a>
                </div>
            </div>

            <div class="col-2">
                <p></p>
            </div>
        </div>
    </div><!--fin .container-->

</main>

</body>
</html>

