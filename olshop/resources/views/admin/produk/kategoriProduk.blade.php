@extends('admin.layouts.app')

@section('content')
    @if (Auth::user()->role != 'pelanggan')
        {{-- ini halaman produk --}}
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table Kategori Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Kategori Produk
                </div>

                <div class="card-header">
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ url('admin/kategoriProduk/create') }}" class="btn btn-primary">Tambah Data</a>
                    @endif
                </div>

                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>

                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($kategori_produk as $kategori)
                                <tr>

                                    <td>{{ $no }}</td>
                                    <td>{{ $kategori->nama }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ url('admin/kategoriProduk/edit/' . $kategori->id) }}"
                                                class="btn btn-success">Edit</a>
                                            @if (Auth::user()->role == 'admin')
                                                <a href="{{ url('admin/kategoriProduk/delete/' . $kategori->id) }}"
                                                    class="btn btn-danger ms-2">Delete</a>
                                            @endif
                                        </div>
                                    </td>

                                </tr>

                                @php
                                    $no++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection
