<?php
$servername = "localhost";
$kasutajanimi = "MRfrend";
$parool ='1234.';
$andmebaasinimi = 'mrfrend';
$yhendus=new mysqli($servername, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset("utf8");

