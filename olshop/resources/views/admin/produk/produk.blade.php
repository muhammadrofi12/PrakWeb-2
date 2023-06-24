@extends('admin.layouts.app')

@section('content')
    @if (Auth::user()->role != 'pelanggan')
        {{-- ini halaman produk --}}
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ url('admin/produk/create') }}" class="btn btn-primary">Tambah Produk</a>
                    @endif
                </div>

                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Produk
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table-responsive">
                        <thead>
                            <tr>

                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Harga Jual</th>
                                <th>Harga Beli</th>
                                <th>Stok</th>
                                <th>Minimal Stok</th>
                                <th>Deskripsi</th>
                                <th>Kategori Produk</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($produk as $p)
                                <tr>

                                    <td>{{ $no }}</td>
                                    <td>{{ $p->kode }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->harga_jual }}</td>
                                    <td>{{ $p->harga_beli }}</td>
                                    <td>{{ $p->stok }}</td>
                                    <td>{{ $p->min_stok }}</td>
                                    <td>{{ $p->deskripsi }}</td>
                                    <td>{{ $p->nama_kategori }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ url('admin/produk/edit/' . $p->id) }}"
                                                class="btn btn-success">Edit</a>
                                            @if (Auth::user()->role == 'admin')
                                                <a href="{{ url('admin/produk/delete/' . $p->id) }}"
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
