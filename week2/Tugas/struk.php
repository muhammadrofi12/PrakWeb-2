<?php
$nama = $_POST['customer_name'];
$barang = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$alamat = $_POST['alamat'];

switch ($barang) {
    case 'tv':
        $harga = $jumlah * 4_200_000;
        break;
    case 'kulkas':
        $harga = $jumlah * 3_500_000;
        break;
    case 'mesincuci':
        $harga = $jumlah * 3_800_000;
        break;
    case 'lemari':
        $harga = $jumlah * 700_000;
        break;
    case 'jamtangan':
        $harga = $jumlah * 120_000;
        break;
    case 'tas':
        $harga = $jumlah * 150_000;
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Belanja Online</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <div class="card mt-5 w-75 mx-auto bg-light">
        <h2 class="text-center mt-3" style="color: #03AC0E;">Terimakasih</h2>
        <hr width="90%" class="mx-auto">

        <div class="ms-4">
            <p>Terimakasih sudah berbelanja di toko kami. Berikut struk belanja anda :</p>
            <br>

            <div>
                <p>Nama Customer : <?php echo $nama; ?></p>
                <p>Barang : <?php echo $barang; ?></p>
                <p>Jumlah Barang : <?php echo $jumlah; ?></p>
                <p>Alamat : <?php echo $alamat; ?></p>
                <p>Harga yang perlu di bayar : <?php echo "Rp." .number_format($harga, 2, ',', '.'); ?></p>
            </div>
        </div>

        <a href="./form_belanja.php" class="mt-2 mb-4 ms-4"> Halaman utama</a>

    </div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>