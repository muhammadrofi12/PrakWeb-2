<?php
function kelulusan($_nilai) {
    // jika nilai rata2 siswa dibawah 55 = tidak lulus
    // jika nilai rata2 siswa diatas 55 = lulus
    if($_nilai <= 55){
        return 'Tidak Lulus';
    } else{
        return 'Lulus';
    }
}

// Buat fungsi Grade, lalu kasih keterangan "
// Jika nilai 85-100 grade A
// Jika nilai 70-84 grade B
// Jika nilai 56-69 garde C
// Jika nilai 36-55 grade D
// Jika nilai 10-35 grade E
// jika tidak ada nilai cetak "Anda tidak ada nilai"
function grade($_nilai) {
    if ($_nilai >= 85){
        return "A";
    } elseif ($_nilai >= 70){
        return "B";
    } elseif ($_nilai >= 56){
        return "C";
    } elseif ($_nilai >= 36){
        return "D";
    } elseif ($_nilai >= 10){
        return "E";
    } else{
        return "Anda tidak ada nilai!";
    }
}

?>