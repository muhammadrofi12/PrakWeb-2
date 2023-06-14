<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{

    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' => $produk->getAllData(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = KategoriProduk::all();
        $produk = Produk::all();

        return view('admin.produk.create', compact('kategori', 'produk'));

    }


    public function store(Request $request)
    {
        // buat instance baru dengan model produk
        // ambil data dari form dengan parameter request dari uniq name
        // simpan data yang sudah diambil ke dalam kolom produk, menggunakan instance produk
        // simpan data dengan method save()
        // ketika sudah disave arahkan tampilan ke file
        $produk = new Produk();
        $produk->kode =$request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();

        return redirect('admin/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();

        return view('admin.produk.edit', compact('produk','kategori_produk'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Sama seperti tambah produk di function store

        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka table produk
        // cari data yang ingin dihapus berdasarkan id
        // hapus data dengan menthod delete()
        DB::table('produk')->where('id', $id)->delete();
        return redirect('admin/produk');
    }
}
