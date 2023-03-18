<!-- Ambil data yang diinputkan oleh user -->
<?php
// Panggil function di file yang berbeda
require_once 'function.php';

$nama = isset($_POST['name']) ? $_POST['name'] : "";
$mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : "";
$uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : "";
$uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : "";
$nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : "";
$_nilai = isset($_POST['nilai_uts']) && isset($_POST['nilai_uas']) ? ($uts + $uas + $nilai_tugas)/3 : "";
$ket = $_nilai != "" ? kelulusan($_nilai) : "";
$grade = $_nilai != "" ? grade($_nilai) : "";


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
