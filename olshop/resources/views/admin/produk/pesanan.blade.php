@extends('admin.layouts.app')

@section('content')
    @if (Auth::user()->role != 'pelanggan')
        {{-- ini halaman produk --}}
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table Pesanan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Pesanan Customer</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Pesanan
                </div>

                <div class="card-header">
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
                    @endif
                </div>

                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>

                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Customer</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Email</th>
                                <th>Jumlah Pesanan</th>
                                <th>Deskripsi</th>
                                <th>Produk</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($pesanan as $pesanan)
                                <tr>

                                    <td>{{ $no }}</td>
                                    <td>{{ $pesanan->tanggal }}</td>
                                    <td>{{ $pesanan->nama_pemesan }}</td>
                                    <td>{{ $pesanan->alamat_pemesan }}</td>
                                    <td>{{ $pesanan->no_hp }}</td>
                                    <td>{{ $pesanan->email }}</td>
                                    <td>{{ $pesanan->jumlah_pesanan }}</td>
                                    <td>{{ $pesanan->deskripsi }}</td>
                                    <td>{{ $pesanan->nama_produk }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ url('admin/pesanan/edit/' . $pesanan->id) }}"
                                                class="btn btn-success">Edit</a>
                                            @if (Auth::user()->role == 'admin')
                                                <a href="{{ url('admin/pesanan/delete/' . $pesanan->id) }}"
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
