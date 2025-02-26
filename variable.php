<?php

$nama_depan = "rakha";
$nama_belakang = 'fira';
$umur = 19;
$tb = 160;

echo $nama_depan . "" . $nama_belakang;
echo "<br>Nama Saya adalah $nama_depan dan saya berumur $umur";

echo "<br /><br />";

//Variable System
echo 'Dokumen Root' . $_SERVER
["DOCUMENT_ROOT"];

//Variable Constant
define('PHI', 3.14);

$r = 8;
$luas = PHI * $r * $r;

echo "Lingkaran dengan jari-jari {$r}cm memiliki luas {$luas}cm2";