<?php
session_start();    //mulai session

// cek apakah user sudah submit form atau belum
// gunakan method isset

if (isset($_POST['login'])) {
    // ambil data yang diinputkan user berdasarkan uniq name
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi username dan passwordnya disini

    // Jika username dan password sama arahkan ke file home.php
    // jika usernam dan password beda tampilkan pesan error
    // dan tetap dihalaman index/login.php
    if ($username == 'rofiul' && $password == 'admin123') {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else{
        header("Location: index.php");
        $_SESSION['gagal'] = "username & password anda salah!";
        exit();
    }
    
}
