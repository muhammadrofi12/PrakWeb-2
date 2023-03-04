<!-- Ambil data yang diinputkan oleh user -->
<?php
// Panggil function di file yang berbeda
require_once 'function.php';

$nama = $_POST['name'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$_nilai = ($uts + $uas + $nilai_tugas)/3;
$ket = kelulusan($_nilai);
$grade = grade($_nilai);

// Mencetak nilai variabel
echo "Nama Mahasiswa : $nama";
echo "<br>Mata kuliah : $mata_kuliah";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Nilai tugas : $nilai_tugas";
echo "<br>Rata-Rata : $_nilai";
echo '<br>Keterangan : ' .$ket;
echo '<br>Grade : ' .$grade;

?>