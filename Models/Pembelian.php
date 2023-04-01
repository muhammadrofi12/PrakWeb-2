<?php
class Pembelian
{
    private $koneksi;
    // akses bersifat private menggunakan $this
    public function __construct()
    {
        // merupakan petama kali yang di jalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil_pembelian()
    {
        // cetak seluruh data produk dengan query select
        $sql = "SELECT p.*, j.nama AS namaProduk, v.nama AS namaVendor
        FROM pembelian p
        INNER JOIN produk j ON j.id = p.produk_id
        INNER JOIN vendor v ON v.id = p.vendor_id
        ORDER BY p.id DESC";
        // gunakan menthod prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);

        // eksekusi data yang sudah di siapkan menggunakan menthod prepare
        $ps->execute();
        // siapkan data sql yang sudah di eksekusi menggunakan menthod fetchAll
        $data = $ps->fetchAll();

        // kembalikan data produk yang dalam bentuk array menggunakan return
        return $data;
    }
}