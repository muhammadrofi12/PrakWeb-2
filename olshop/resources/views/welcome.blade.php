<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="antialiased">

    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top fixed-top border-bottom">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Rofz Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="index.php?hal=View/produk/produk">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="index.php?hal=View/produk/produk"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php?hal=View/produk/produk">lihat Produk</a></li>
                            <li><a class="dropdown-item" href="index.php?hal=View/produk/tambah_produk">Tambah
                                    Produk</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Pelanggan</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php?hal=View/pelanggan/pelanggan">Tampil
                                    pelanggan</a></li>
                            <li><a class="dropdown-item" href="index.php?hal=View/pelanggan/tambah_pelanggan">Tambah
                                    Pelanggan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Jenis Produk</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php?hal=View/produk/jenis_produk">Data Jenis
                                    Produk</a></li>
                            <li><a class="dropdown-item" href="index.php?hal=View/produk/tambah_jenisProduk">Tambah
                                    Jenis Produk</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('user/about') }}">About</a></li>
                </ul>
                <div>
                    @if (Route::has('login'))
                        <div class="d-flex">
                            @auth
                                <a href="{{ url('/home') }}" class="nav-link">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link me-2">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shopping Is Fun!</h1>
                <p class="lead fw-normal text-white-50 mb-0">Welcome to Rofz Shop</p>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="content py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- Tampil Produk -->
                <?php

            foreach ($produk as $value) {
            ?>
                <div class="mb-5">
                    <div class="card h-100 shadow-sm p-2 bg-body rounded">
                        <!-- Product image-->
                        <div class="img-product">
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                alt="..." />
                        </div>
                        <!-- Product details-->
                        <div class="card-body ">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $value->nama }}</h5>

                                <!-- Product code -->
                                <p class="fw-bolder">{{ $value->kode }}</p>

                                <!-- Product price-->
                                Rp {{ $value->harga_jual }}
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            </div>
        </div>
    </section>

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright
                <a href="https://www.instagram.com/rofiull___/?hl=id" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none; color: white;">@Rofz</a>
                &copy;2023
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
