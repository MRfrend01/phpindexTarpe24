<?php
$servername = "localhost";
$kasutajanimi = "saimonsiipan";
$parool ='1234';
$andmebaasinimi = 'test';
$yhendus=new mysqli($servername, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset("utf8");

