<?php
require_once 'ShoeProduct.php';

// Class Menu bertugas sebagai pengelola data (CRUD)
class Menu {
    public function __construct() {
        // Memulai session untuk menyimpan data sementara jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        // Seeder: Data awal produk jika belum ada di session
        // Kita menggunakan nama session baru (data_sepatu_final) agar me-reset data lama yang error
        if (!isset($_SESSION['data_sepatu_final'])) {
            // 5. Object (Instansiasi): Membuat 6 object baru dari class ShoeProduct
            $product1 = new ShoeProduct(1, "Sepatu Gemini", "Rp 204.000", "sepatu1.jpg", "Running");
            $product2 = new ShoeProduct(2, "Sepatu Vamos", "Rp 390.000", "sepatu2.jpg", "Running");
            $product3 = new ShoeProduct(3, "Sepatu Fashion", "Rp 200.000", "sepatu3.jpg", "Fashion");
            $product4 = new ShoeProduct(4, "Sepatu I-Way", "Rp 200.000", "sepatu4.jpg", "Casual");
            $product5 = new ShoeProduct(5, "Sepatu Spotec", "Rp 259.000", "sepatu5.jpg", "Sneakers");
            $product6 = new ShoeProduct(6, "Sepatu Desle", "Rp 179.000", "sepatu6.jpg", "Skate");
            
            // Menyimpan object ke dalam session
            $_SESSION['data_sepatu_final'] = [
                $product1->getId() => $product1,
                $product2->getId() => $product2,
                $product3->getId() => $product3,
                $product4->getId() => $product4,
                $product5->getId() => $product5,
                $product6->getId() => $product6
            ];
        }
    }

    // Fitur Read: Mengambil semua data produk
    public function getMenu() {
        return $_SESSION['data_sepatu_final'];
    }

    // Fitur Create: Menambahkan produk baru ke session
    public function addProduct(ShoeProduct $product) {
        $_SESSION['data_sepatu_final'][$product->getId()] = $product;
    }

    // Fitur Update: Mengubah data produk yang sudah ada
    public function updateProduct(ShoeProduct $product) {
        $id = $product->getId();
        if (isset($_SESSION['data_sepatu_final'][$id])) {
            $_SESSION['data_sepatu_final'][$id] = $product;
        }
    }

    // Fitur Delete: Menghapus data produk berdasarkan ID
    public function deleteProduct($id) {
        if (isset($_SESSION['data_sepatu_final'][$id])) {
            unset($_SESSION['data_sepatu_final'][$id]);
        }
    }
}
