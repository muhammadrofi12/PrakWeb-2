<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form class="w-75 mt-5 mx-auto p-4 border bg-light" method="POST" action="struk.php">
        <h2 class="text-center" style="color: #03AC0E;">Form Belanja Online</h2>
        <hr />
        <div class="container px-3">
            <!-- Nama Customer -->
            <div class="form-group mt-3 row">
                <label for="custname" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input id="custname" placeholder="Nama Customer" type="text" name="customer_name" class="form-control" required>
                </div>
            </div>

            <!-- Barang -->
            <div class="form-group mt-3 row">
                <label class="col-4">Pilih produk</label>

                <div class="col-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="tv" name="produk" id="tv" type="radio" class="custom-control-input" required>
                        <label for="tv" class="custom-control-label">Tv</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="kulkas" name="produk" id="kulkas" type="radio" class="custom-control-input" required>
                        <label for="kulkas" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value=mesincuci" name="produk" id="mesincuci" type="radio" class="custom-control-input" required>
                        <label for="mesincuci" class="custom-control-label">Mesin Cuci</label>
                    </div>
                </div>

                <div class="col-6">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="lemari" name="produk" id="lemari" type="radio" class="custom-control-input" required>
                        <label for="lemari" class="custom-control-label">Lemari</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="jamtangan" name="produk" id="jamtangan" type="radio" class="custom-control-input" required>
                        <label for="jamtangan" class="custom-control-label">Jam Tangan</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input value="tas" name="produk" id="tas" type="radio" class="custom-control-input" required>
                        <label for="tas" class="custom-control-label">Tas</label>
                    </div>
                </div>
            </div>
            <!-- Jumlah Barang -->
            <div class="form-group mt-3 row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                    <input name="jumlah" id="jumlah" placeholder="Jumlah beli" type="number" min=0 class="form-control" required>
                </div>
            </div>
            <!-- Alamat -->
            <div class="form-group mt-3 row">
                <label for="alamat" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <input id="alamat" placeholder="Masukan Alamat Anda" type="text" name="alamat" class="form-control" required>
                </div>
            </div>

            <div class="form-group mt-5 row">
                <div class="offset-4 col-8">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <h5 class="my-1">List Harga</h5>
                <ol>
                    <li>Tv : 4.200.000</li>
                    <li>Kulkas : 3.500.000</li>
                    <li>Mesin Cuci : 3.800.000</li>
                    <li>Lemari : 700.000</li>
                    <li>Jam Tangan : 120.000</li>
                    <li>Tas : 150.000</li>
                </ol>
            </div>

            <h5 class="text-danger">Harga dapat berubah</h5>
        </div>
    </form>


<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>