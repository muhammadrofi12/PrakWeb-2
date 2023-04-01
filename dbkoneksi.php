<?=
// konfigurasi database
$host = "localhost";
$dbname = "dbjualan";
$username ="root";
$password = "";

// buat koneksi PDO, menggunakan try catch
try {
    // buat objek koneksi yang di dalamnya ada parameter berupa
    // variabel konfigurasi database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<h1>Koneksi database berhasil</h1>";
} catch (PDOException $e) {
    echo "database tidak terhubung : " .$e->getMessage();
    
}

?>