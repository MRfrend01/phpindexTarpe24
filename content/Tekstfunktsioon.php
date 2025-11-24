<?php
function clearVarsExcept($url, $varname){
    $url=basename($url);
    if(str_starts_with($url, "?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];

}


echo "<h2>Tekstfunktsioonid</h2>";
$tekst='Veebirakendus on arvutitarkvara programm';
echo $tekst; //näitab muutuja sisu
echo "<br>";
echo "Mitu sõna on lauses - .str_word_count()= ".str_word_count($tekst). "tk";
//metshein.com -->PHP alused
echo "<br>";
echo "kõik tähed muudab väiksemaks - .strtolower()= ".strtolower($tekst);
echo "<br>";
echo "kõik tähed muudab suuremaks - strtoupper()= ".strtoupper($tekst);
echo "<br>";
echo "loeb kokku märkide arvu tekstis, ka tühikud ja kirjavahemärgid - strlen()= ".strlen($tekst);
echo '<br>';
$tekst2 = ' 	A woman should soften but not weaken a man   ';
echo "<pre>$tekst2</pre>";
echo "Eemaldab tühikud tekstist - trim()= <pre>".trim($tekst2)."</pre>";
echo "Eemaldab tühikud teksti eest - ltrim()= <pre>".ltrim($tekst2)."</pre>";
echo "Eemaldab tühikud teksti taga - rtrim()= <pre>".rtrim($tekst2)."</pre>";
echo "<h3>Tekst kui massiiv</h3>";
echo "võtab tekstist esimene täht - tekst[0]= ".$tekst[0];
echo '<br>';
echo "võtab tekstist 5 tähe - tekst[4]= ".$tekst[4];
echo '<br>';
echo "Võtab alates 4 tähest 5 tähte - substr(tekst, 3, 5)= ".substr($tekst, 3, 5);
echo '<br>';
echo "võtab alates 5tähest kuni 13 täheni - substr(tekst, 4, -13)= ".substr($tekst, 4, -13);
echo '<br>';
echo "võtab paremalt poolt alates 8, 7 tk - substr(tekst, -8, 7)= ".substr($tekst, -8, 7);
echo '<br>';
print_r(str_word_count($tekst, 1)); // Array ( [0] => Veebirakendus [1] => on [2] => arvutitarkvara [3] => program )
echo '<br>';
$sona = str_word_count($tekst, 1);
echo "võtab kolmas sõna tektsimassiivist - sona[2]= ".$sona[2];
echo '<br>';
echo "<h3>Teksti asendamine</h3>";
$asendus = 'Tarkvara';
$otsitav_algus = 17;
$otsitav_pikkus = 14;
echo "Asendab sõna tarkvara algusega 17 kuni 14 - substr_replace(tekst, sendus, otsitav_algus, otsitav_pikkus)= ".substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
echo '<br>';
$otsi = array('on', 'programm');
$asenda = array('----', 'software');
echo "otsib sõna= on ja asendab sõna= programm - str_replace(otsi, asenda, tekst)= ".str_replace($otsi, $asenda, $tekst);
echo '<br>';
echo "<h2>MÕISTATUS - ARVA ÄRA EESTI LINNANIMI</h2>";
echo "<br>";

$linn = "Tallinn";

echo "<ol>";
echo "<li>Linn algab ".substr($linn, 0, 1)." tähega</li>";
echo "<br>";

echo "<li>Linna nimi koosneb ".strlen($linn)." tähest</li>";
echo "<br>";

echo "<li>Linna nimi lõpeb '".substr($linn, -1)."' tähega</li>";
echo "<br>";

echo "<li>Linna nimest leiab tähe '".substr($linn, 2, 1)."' kolmandal kohal</li>";
echo "<br>";

echo "<li>Linna kahte esimest tähte kokku on '".substr($linn, 0, 2)."'</li>";
echo "<br>";

echo "<li>Linnas elab üle 400 000 inimese</li>";
echo "<br>";
echo "</ol>";
?>
    <form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "leht")?>" method="post">
    <label for="linn">Sisesta linnanimi</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>

<?php
if (isset($_REQUEST["linn"])) {
    if ($_REQUEST["linn"] == "Tallinn") {
        echo $_REQUEST["linn"]. " on õige";
    } else {
        echo $_REQUEST["linn"]." on vale";
    }
}


