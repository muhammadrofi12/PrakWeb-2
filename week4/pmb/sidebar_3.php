<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">PrakWeb 2</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">Muhammad Rofiul</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="home.php" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>Beranda</p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Pratikum PenWeb 2
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pratikum_1.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pratikum 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pratikum_2.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pratikum 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pratikum_3.php" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pratikum 3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="pratikum_1.php" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>Gallery</p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <?php
                    include_once('logout.php');
                    ?>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>