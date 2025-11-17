<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Saimon PHP-tööde leht</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/joonis.css">
    <script src="js/joonisscript.js"></script>
    <script src="js/muusikascript.js"></script>
</head>
<body>
<?php
//päis
include("header.php");
?>
<?php
//navigeerimismenüü
include("nav.php");
?>
<div class="flex-container">
    <div> <strong> PHP - </strong>
        on serveripoolne skriptimiskeel, mida kasutatakse dünaamiliste veebilehtede ja veebirakenduste loomiseks.
        See töötab veebiserveris ning suudab genereerida HTML-i, suhelda andmebaasidega ja töödelda kasutaja sisendit.
    </div>
    <div>
        <?php
        //sisu - laetakse content kaustast
        if(isset($_GET["leht"])){
            include('content/'.$_GET["leht"]);
        } else {
            include('content/kodu.php');
        }
        ?>
    </div>

    <div>
        <img src="image/phpPilt.png" alt="PHP pilt">
    </div>
</div>



<?php
//jalus
include("footer.php");
?>
</body>
</html>