<?php
class Produk
{
    private $koneksi;
    // akses bersifat private menggunakan $this
    public function __construct()
    {
        // merupakan petama kali yang di jalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil_produk()
    {
        // cetak seluruh data produk dengan query select
        $sql = "SELECT p.*, j.nama AS namaJenisProduk
        FROM produk p
        INNER JOIN jenis_produk j ON j.id = p.jenis_produk_id
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
