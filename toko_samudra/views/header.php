<!DOCTYPE html>
<html lang="id">
<head>
    <?php
        $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
        $assetBase = ($basePath === '' || $basePath === '.') ? '' : $basePath;
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Toko Samudra - Toko Sepatu Terlengkap dengan Koleksi Terbaik. Temukan sepatu impianmu di sini.">
    <title>Toko Samudra | Sepatu Berkualitas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $assetBase ?>/assets/css/style.css?v=20260519">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="#" class="logo">
            <span class="logo-icon">👟</span>
            <span class="logo-text">Samudra</span>
        </a>
        <ul class="nav-links" id="navLinks">
            <li><a href="#hero" class="active">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#products">Produk</a></li>
            <li><a href="#testimonials">Testimoni</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
        <div class="nav-actions">
            <a href="#products" class="btn-nav">Belanja</a>
            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>
