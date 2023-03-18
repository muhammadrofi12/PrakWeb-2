<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Registrasi Data Science</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <h4 style="text-align: center" class="mt-5 mb-4">Form Registrasi Data Science</h4>

    <div class="container">
        <form method="POST" action="pratikum_3.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukan Nama Anda" />
                </div>
            </div>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control" placeholder="Masukan NIM Anda" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" />
                        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" />
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="studi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="studi" name="studi" required="required" class="custom-select">
                        <option value="TI">Teknik Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="BD">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skills</label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="skills[]_0" type="checkbox" class="custom-control-input" value="html" checked="checked" />
                        <label for="skills[]_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="skills[]_1" type="checkbox" class="custom-control-input" value="css" />
                        <label for="skills[]_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="skills[]_2" type="checkbox" class="custom-control-input" value="js" />
                        <label for="skills[]_2" class="custom-control-label">JavaScript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="skills[]_3" type="checkbox" class="custom-control-input" value="bootstrap" />
                        <label for="skills[]_3" class="custom-control-label">Bootstrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="skills[]_4" type="checkbox" class="custom-control-input" value="php" />
                        <label for="skills[]_4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="skills[]_5" type="checkbox" class="custom-control-input" value="python" />
                        <label for="skills[]_5" class="custom-control-label">Python</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="skills[]_6" type="checkbox" class="custom-control-input" value="java" />
                        <label for="skills[]_6" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" placeholder="Masukan Email Anda" />
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>


<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $studi = $_POST['studi'];
    $skills = $_POST['skills'];
    $email = $_POST['email'];

    $nilai = 0;
    foreach ($skills as $data) {
        switch ($data) {
            case 'html':
                $nilai += 10;
                break;
            case 'css':
                $nilai += 10;
                break;
            case 'js':
                $nilai += 20;
                break;
            case 'bootstrap':
                $nilai += 20;
                break;
            case 'php':
                $nilai += 30;
                break;
            case 'python':
                $nilai += 30;
                break;
            case 'java':
                $nilai += 50;
                break;
            default:
                $nilai += 0;
                break;
        }
    }

    function predikat($nilai)
    {
        if ($nilai >= 100 && $nilai <= 150) {
            return "Sangat Baik";
        } elseif ($nilai >= 60 && $nilai <= 100) {
            return "Baik";
        } elseif ($nilai >= 40 && $nilai <= 60) {
            return "Cukup";
        } elseif ($nilai >= 0 && $nilai <= 40) {
            return "Kurang Baik";
        } else {
            return "Tidak memadai";
        }
    }

    // mengecek apakah variabel nama, nim, jk, studi, skills, dan email kosong atau tidak terdefinisi
    if (empty($nama) || empty($nim) || empty($jk) || empty($studi) || empty($skills) || empty($email)) {
        echo "Data belum diisi.";
    } else {
        // Cetak hasil inputan user
        echo "<h4>Informasi yang di anda kirim : </h4>";
        echo "Nama : $nama";
        echo "<br>NIM : $nim";
        echo "<br>Jenis Kelamin : $jk";
        echo "<br>Program Studi : $studi";
        echo "<br>Skills  : ";
        foreach ($skills as $data) {
            echo $data . ", ";
        }
        echo "<br>Skor Skills  : $nilai";
        echo "<br>Email  : $email";
        $grade = predikat($nilai);
        echo "<br>Predikat  : $grade";
    }
}
?>