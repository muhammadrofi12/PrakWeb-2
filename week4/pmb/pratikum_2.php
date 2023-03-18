<?php
include_once('navbar.php');
include_once('sidebar_2.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pratikum 2</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                        <li class="breadcrumb-item active">Pratikum 2</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Content-main -->
    <div class="container-fluid">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content p-0">
                    <?php
                    include_once('pratikum/form_nilai.php');
                    include_once('../../week2/nilai_siswa.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-main  -->
</div>
<!-- /.content-wrapper -->

<?php
include_once('footer.php');
?>