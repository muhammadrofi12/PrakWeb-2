<?php
class Pelanggan
{
    private $koneksi;
    // akses bersifat private menggunakan $this
    public function __construct()
    {
        // merupakan petama kali yang di jalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil_pelanggan()
    {
        // cetak seluruh data produk dengan query select
        $sql = "SELECT p.*, k.nama AS namaKartu
        FROM pelanggan p
        INNER JOIN kartu k ON k.id = p.kartu_id
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
