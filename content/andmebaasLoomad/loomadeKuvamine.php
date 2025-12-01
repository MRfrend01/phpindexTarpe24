<?php
require ('conf.php');
// tebelist kustutamine
global $yhendus;
if(isset($_REQUEST["kustuta"])){
$kask=$yhendus->prepare("DELETE from loomad WHERE loomId=?");
$kask->bind_param("i",$_REQUEST["kustuta"]);
$kask->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Loomad Sql - andmebaasist</title>
    <link rel="stylesheet" href="andmebaasstyle.css">
</head>
<body>
<h1>Loomade tabeli sisu</h1>
<table>
    <tr>
        <td>loomanimi</td>
        <td>kaal</td>
        <td>värv</td>
    </tr>

<?php
global $yhendus;
$kask=$yhendus->prepare("SELECT loomId, loomanimi, kaal, varv From loomad");
$kask->bind_result($loomId, $loomanimi, $kaal, $varv);
$kask->execute();

while($kask->fetch()){
    echo "<tr>";
    echo "<td bgcolor='$varv'>".$loomanimi."</td>";
    echo "<td>".$kaal."</td>";
    echo "<td>".$varv."</td>";
    echo "<td><a href='?kustuta=$loomId'>xxx</a></td>";
    echo "</tr>";
}
?>
</table>
<a href="loomalisamine.php">lisa loom...</a>

</body>

</html>
