<?php
require_once 'core/Controller.php';

// PENTING: Memuat class model (Product & ShoeProduct) SEBELUM session_start()
// Hal ini wajib dilakukan dalam OOP PHP agar object yang disimpan di session
// dapat dibaca dengan benar dan tidak berubah menjadi __PHP_Incomplete_Class
require_once 'models/Product.php';
require_once 'models/ShoeProduct.php';
require_once 'models/Menu.php';

// Memulai session untuk fitur CRUD setelah class diload
session_start();

require_once 'controllers/HomeController.php';

$controller = new HomeController();
$controller->index();
