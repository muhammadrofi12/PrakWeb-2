<?php
include_once('navbar.php');
include_once('sidebar_1.php');
?>


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pratikum 1</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">Pratikum 1</li>
                    </ol>
                </div>
            </div>
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
                    include_once('../../week1/array_siswa.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
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