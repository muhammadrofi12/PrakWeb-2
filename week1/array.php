<?php
// Array data

// Array indexing
$ar_buah1 = ["pisang","jambu",'pepaya'];

echo "Buah dengan <b>indeks 1</b> $ar_buah1[1]";
echo "<br>";
print_r($ar_buah1);

// Cetak jumlah data array
echo '<br>Jumlah Buah ' .count($ar_buah1);

// tambahkan data array
$ar_buah1[] = 'durian';
$ar_buah1[] = 'naga';

array_push($ar_buah1, 'dukuh', 'strobery');

//Hapus data array
unset($ar_buah1[1]);

// Ubah data array indeks 2 menjadi manggis
$ar_buah1[2] = 'manggis';

// Cetak seluruh data array
echo "<ol>";
foreach ($ar_buah1 as $buah) {
    echo "<li> $buah </li>";
}
echo "</ol>";

// Cetak semua data dengan menampilkan indeks array nya
print_r($ar_buah1);


// Array assosiatif
$ar_buah = [
    "Pi"=> 'pisang',
    "J"=> 'jambu',
    "Pe"=> 'pepaya'
];


?>