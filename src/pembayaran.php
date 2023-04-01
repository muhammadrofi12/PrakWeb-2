<?php
$models = new Pembayaran();
$data_produk = $models->tampil_pembayaran();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Pembayaran</h1>
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
                            <th>Kuitansi</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Ke</th>
                            <th>Pesanan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data_produk as $value) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $value['nokuitansi'] ?></td>
                                <td><?= $value['tanggal'] ?></td>
                                <td><?= $value['jumlah'] ?></td>
                                <td><?= $value['ke'] ?></td>
                                <td><?= $value['tanggalPesanan'] ?></td>
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
