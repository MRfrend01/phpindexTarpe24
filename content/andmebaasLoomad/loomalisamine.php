<?php
require('conf.php');
//lisamine
global $yhendus;
if(isset($_REQUEST["loomanimi"]) && $_REQUEST["loomanimi"]!==0){
$kask=$yhendus->prepare("INSERT INTO loomad(loomanimi, kaal, varv) values(?,?,?)");
$kask->bind_param("sis",$_REQUEST["loomanimi"], $_REQUEST["kaal"], $_REQUEST["varv"]);

$kask->execute();
header("Location:loomadeKuvamine.php");
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Looma lisamine sql tabeli sisse</title>
</head>
<body>
<h1>
    looma lisamine
</h1>
<form action="" name="looma">
    <label for="loomanimi">sisesta looma nimi</label>
    <input type="text" name="loomanimi" id="loomanimi">
    <br>
    <label for="kaal">Kaal</label>
    <input type="number" name="kaal" id="kaal">
    <br>
    <label for="varv">Looma värv</label>
    <input type="color" name="varv" id="varv">
    <br>
    <input type="submit" value="lisa">

</form>
</body>
</html>
