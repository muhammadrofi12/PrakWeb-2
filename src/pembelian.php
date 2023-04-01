<?php
$models = new Pembelian();
$data_produk = $models->tampil_pembelian();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Pembeli</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nomor</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Vendor</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data_produk as $value) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $value['tanggal'] ?></td>
                                <td><?= $value['nomor'] ?></td>
                                <td><?= $value['namaProduk'] ?></td>
                                <td><?= $value['jumlah'] ?></td>
                                <td><?= $value['harga'] ?></td>
                                <td><?= $value['namaVendor'] ?></td>
                            </tr>

                        <?php
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
