<?php
// Definisikan variabel konstan
define('PHI', 3.14);

// Soal 1 Hitunglah luas lingkaran dengan jari-jari 8
// Soal 2 Hitunglah Keliling lingkaran dengan jari-jari 8

// Definisikan variabel jari2
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo "Luas dari lingkaran dengan jari-jari $jari adalah <b>$luas</b> cm.";
echo "<br>Keliling dari lingkaran dengan jari-jari $jari adalah <b>$keliling</b> cm^2.";


?>