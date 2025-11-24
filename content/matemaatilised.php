<?php
echo "<h2>matemaatilised funktsioonid</h2>";
$arv1=10;
$arv2=15;
$liitmine=$arv1+$arv2;
$lahut=$arv1-$arv2;
$korrutis=$arv1*$arv2;
$jagamine=$arv1/$arv2;
echo "arv1 on".$arv1."ja arv2 on".$arv2."<br>";
echo "<strong>Vastused:</strong> Liitmine: " . $liitmine . "<br>";
echo "Lahutamine: " . $lahut . "<br>";
echo "Korrutis: " . $korrutis . "<br>";
echo "Jagamine: " . $jagamine . "<br>";
echo "Omistamise operaatorid: ";
echo "<br>";
//$arv1++ - suurendamine ühe võrra $arv1=$arv1+1
echo $arv1++;
echo $arv1."- suurendamine ühe võrra";
echo "<br>";
//$arv1-- - vähendamine ühe võrra $arv1=$arv1+1
echo $arv1--;
echo $arv1."- vähendamine ühe võrra";
echo "<br>";
echo "<strong>Ruutjuur -sqrt()</strong> =".sqrt($arv1);


echo "Arvu ruut (pow): " . pow($arv1, 2) . "<br>";
echo "Ruutjuur (sqrt): " . sqrt($arv1) . "<br>";

$juhuslik = rand(1, 100);
echo "Juhuslik arv vahemikus 1–100: " . $juhuslik . "<br>";

$protsent = ($arv1 / $arv2) * 100;
echo "Protsendi arvutamine: arv1 / arv2 * 100 = " . round($protsent, 2) . "%<br>";

// ARVA ÄRA MÄNG
echo "<hr><h2>Arva ära 2 arvu!</h2>";

if (isset($_POST['arv1']) && isset($_POST['arv2'])) {
    $oige1 = (int)$_POST['oige1'];
    $oige2 = (int)$_POST['oige2'];
    $kasutaja1 = (int)$_POST['arv1'];
    $kasutaja2 = (int)$_POST['arv2'];

    echo "<p>Õiged arvud olid: <strong>$oige1</strong> ja <strong>$oige2</strong></p>";
    echo "<p>Sinu arvud olid: <strong>$kasutaja1</strong> ja <strong>$kasutaja2</strong></p>";

    $punktid = 0;

    if ($kasutaja1 == $oige1) {
        echo "<p class='oige'>Esimene arv ÕIGE! ✓</p>";
        $punktid++;
    } else {
        if ($kasutaja1 < $oige1) {
            echo "<p class='vihje'>Esimene arv on liiga väike ↑</p>";
        } else {
            echo "<p class='vihje'>Esimene arv on liiga suur ↓</p>";
        }
    }

    if ($kasutaja2 == $oige2) {
        echo "<p class='oige'>Teine arv ÕIGE! ✓</p>";
        $punktid++;
    } else {
        if ($kasutaja2 < $oige2) {
            echo "<p class='vihje'>Teine arv on liiga väike ↑</p>";
        } else {
            echo "<p class='vihje'>Teine arv on liiga suur ↓</p>";
        }
    }

    echo "<p><strong>Tulemus: $punktid / 2</strong></p>";
    echo "<a href=''>Mängi uuesti</a>";
} else {
    $oige1 = rand(1, 20);
    $oige2 = rand(1, 20);

    echo "<p>Arva ära 2 juhuslikku arvu vahemikus 1-20!</p>";
    echo "<form method='post'>";
    echo "<p>Esimene arv: <input type='number' name='arv1' min='1' max='20' required>";
    echo "<input type='hidden' name='oige1' value='$oige1'></p>";
    echo "<p>Teine arv: <input type='number' name='arv2' min='1' max='20' required>";
    echo "<input type='hidden' name='oige2' value='$oige2'></p>";
    echo "<button>Kontrolli</button>";
    echo "</form>";
}
?>