<?php
// Menerapkan konsep File Terpisah Antar Class
// Class Induk (Parent Class) yang mewakili entitas produk umum
class Product {
    // 1. Property dan Method
    // 2. Encapsulation: Menggunakan modifier 'protected' agar hanya bisa diakses 
    //    oleh class ini sendiri dan class turunannya (Inheritance).
    protected $id;
    protected $nama;
    protected $harga;
    protected $gambar;

    // 3. Constructor: Method khusus yang otomatis dijalankan saat Object baru dibuat
    public function __construct($id, $nama, $harga, $gambar) {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->gambar = $gambar;
    }

    // Method Getter untuk mendapatkan nilai property karena property bersifat protected
    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getGambar() {
        return $this->gambar;
    }

    // Method Setter untuk mengubah nilai property (Bagian dari Encapsulation)
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }
}
