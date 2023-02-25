<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <?php
// Buat data siswa dalam array assosiatif
$ns1 = [
    'id' => 1,
    'nim' => "01101",
    'uts' => 80,
    'uas' => 90,
    'tugas' => 95
];

$ns2 = [
    'id' => 2,
    'nim' => "02202",
    'uts' => 85,
    'uas' => 93,
    'tugas' => 80
];
$ns3 = [
    'id' => 3,
    'nim' => "03303",
    'uts' => 87,
    'uas' => 95,
    'tugas' => 85
];

// Simpan variabel data array assosiatif ke dalam array indexing
$ar_nilai = [$ns1, $ns2, $ns3];


?>

<!-- Buat tabel dengan elemen html -->
<h2 style="text-align:center;" class="mt-5 mb-3">Daftar Nilai Siswa </h2>

<table border="1" width="100%" class="table table-striped-columns table-group-divider text-center mt-2">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>

    <tbody class="table-group-divider">
        <?php
        $nomor = 1;

        foreach ($ar_nilai as $nilai) {
            echo '<tr><td>' .$nomor .'</td>';
            echo '<td>' .$nilai['nim'] . '</td>';
            echo '<td>' .$nilai['uts'] . '</td>';
            echo '<td>' .$nilai['uas'] . '</td>';
            echo '<td>' .$nilai['tugas'] . '</td>';
            $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
            echo '<td>' .number_format($nilai_akhir) . '</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>

    </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>