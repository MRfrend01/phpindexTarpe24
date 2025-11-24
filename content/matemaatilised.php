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
echo $arv1."- suurendamine ühe võrra";

