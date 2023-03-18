<?php
include_once('navbar.php');
include_once('sidebar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Beranda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Beranda</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="home.php" class="btn btn-primary btn-block mb-3">Information</a>

                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pratikum</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="pratikum_1.php"><i class="far fa-circle text-danger"></i>
                                        Pratikum1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pratikum_2.php"><i class="far fa-circle text-warning"></i>
                                        Pratikum 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pratikum_3.php"><i class="far fa-circle text-primary"></i>
                                        Pratikum 3</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Information</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5>STT Terpadu Nurul Fikri</h5>
                                <h6>Muhammad Rofi'ul Arham
                                    <span class="mailbox-read-time float-right">18 March. 2023 13:38 PM</span>
                                </h6>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <div class="mailbox-controls with-border text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm" title="Print">
                                    <i class="fas fa-print"></i>
                                </button>
                            </div>
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <p>Hello people,</p>

                                <p>Nice to meet you, my name is Rofi. I am currently studying at Nurul Fikri Integrated STT
                                    majoring in Computer Engineering. Currently, I am in my second semester and I am learning PHP programming language.
                                </p>

                                <p>This website contains a collection of my practical assignments.</p>

                                <p>My github repository 
                                    <a href="https://github.com/muhammadrofi12/PrakWeb-2" target="_blank">Klik disni.</a>
                                </p>

                                <p>Thanks..</p>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-white">
                            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                <li>
                                    <span class="mailbox-attachment-icon has-img"><img src="dist/img/matcha.jpg" alt="Attachment"></span>

                                    <div class="mailbox-attachment-info">
                                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i></a>
                                        <span class="mailbox-attachment-size clearfix mt-1">
                                            <span>2.67 MB</span>
                                            <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php
include_once('footer.php');
?>