<?php
// Require class induk agar bisa diwarisi
require_once 'Product.php';

// 4. Pewarisan (Inheritance): Class ShoeProduct mewarisi semua sifat (property & method) dari class Product
class ShoeProduct extends Product {
    // Property khusus untuk produk sepatu, encapsulation 'private' 
    // karena hanya digunakan di dalam class ini.
    private $kategori;

    // Constructor untuk class anak
    public function __construct($id, $nama, $harga, $gambar, $kategori) {
        // Memanggil constructor dari class induk (Product) untuk inisialisasi awal
        parent::__construct($id, $nama, $harga, $gambar);
        
        // Inisialisasi property khusus dari class anak
        $this->kategori = $kategori;
    }

    // Getter untuk kategori
    public function getKategori() {
        return $this->kategori;
    }

    // Setter untuk kategori
    public function setKategori($kategori) {
        $this->kategori = $kategori;
    }
}
