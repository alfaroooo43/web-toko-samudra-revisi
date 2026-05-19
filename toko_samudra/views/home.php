<!-- HERO SECTION -->
<section class="hero" id="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <span class="hero-badge">✨ Koleksi Terbaru 2026</span>
        <h1>Langkah Percaya Diri<br>Dimulai dari <span class="highlight">Sini</span></h1>
        <p>Temukan koleksi sepatu terbaik dengan kualitas premium dan harga terjangkau hanya di Toko Samudra.</p>
        <div class="hero-buttons">
            <a href="#products" class="btn btn-primary">Lihat Koleksi</a>
            <a href="#about" class="btn btn-outline">Tentang Kami</a>
        </div>
        <div class="hero-stats">
            <div class="stat-item">
                <span class="stat-number">500+</span>
                <span class="stat-label">Produk</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">10K+</span>
                <span class="stat-label">Pelanggan</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">50+</span>
                <span class="stat-label">Brand</span>
            </div>
        </div>
    </div>
    <div class="hero-image">
        <img src="assets/images/bg1.jpeg" alt="Hero Shoe">
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="about" id="about">
    <div class="section-container">
        <div class="section-header">
            <span class="section-tag">Tentang Kami</span>
            <h2>Mengapa Memilih <span class="highlight">Toko Samudra</span>?</h2>
            <p class="section-desc">Kami menyediakan sepatu berkualitas dari brand ternama dengan pelayanan terbaik.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🏆</div>
                <h3>Kualitas Terjamin</h3>
                <p>Semua produk kami dijamin 100% original dengan kualitas premium.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🚚</div>
                <h3>Pengiriman Cepat</h3>
                <p>Pengiriman ke seluruh Indonesia dengan estimasi 1-3 hari kerja.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💰</div>
                <h3>Harga Terbaik</h3>
                <p>Harga kompetitif dengan promo menarik setiap bulannya.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>Garansi Tukar</h3>
                <p>Garansi tukar ukuran dalam 7 hari setelah pembelian.</p>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTS SECTION -->
<section class="products" id="products">
    <div class="section-container">
        <div class="section-header">
            <span class="section-tag">Koleksi Kami</span>
            <h2>Produk <span class="highlight">Terlaris</span></h2>
            <p class="section-desc">Temukan sepatu favorit kamu dari koleksi terbaik kami.</p>
        </div>
        <div class="products-grid">
            <?php foreach ($products as $product): ?>
            <div class="product-card">
                <div class="product-image">
                    <!-- Menggunakan method getter OOP untuk membaca data -->
                    <img src="assets/images/<?= $product->getGambar() ?>" alt="<?= $product->getNama() ?>">
                    <span class="product-badge"><?= $product->getKategori() ?></span>
                </div>
                <div class="product-info">
                    <h3><?= $product->getNama() ?></h3>
                    <p class="product-price"><?= $product->getHarga() ?></p>
                    <a href="https://wa.me/6282301520056?text=<?= urlencode('Halo Toko Samudra, saya tertarik dengan produk: ' . $product->getNama() . ' (' . $product->getHarga() . '). Apakah masih tersedia?') ?>" target="_blank" class="btn btn-cart">Beli Sekarang</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- TESTIMONI SECTION -->
<section class="testimonials" id="testimonials">
    <div class="section-container">
        <div class="section-header">
            <span class="section-tag">Testimoni</span>
            <h2>Apa Kata <span class="highlight">Pelanggan</span>?</h2>
            <p class="section-desc">Dengarkan pengalaman mereka yang telah menemukan sepatu impiannya di Toko Samudra.</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <p>"Koleksi sepatunya lengkap banget! Warnanya bagus dan bahannya premium. Sangat cocok dengan gaya saya."</p>
                <div class="customer">
                    <div class="avatar">A</div>
                    <div>
                        <h4>Andi Saputra</h4>
                        <span>Pelanggan Setia</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <p>"Wah, baru pertama kali beli di Toko Samudra langsung puas. Pelayanannya ramah, pengirimannya super cepat."</p>
                <div class="customer">
                    <div class="avatar">R</div>
                    <div>
                        <h4>Rina Melati</h4>
                        <span>Pembeli Baru</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <p>"Toko sepatu terbaik di Situbondo. Harganya bersahabat tapi kualitasnya gak kalah sama merk luar negeri."</p>
                <div class="customer">
                    <div class="avatar">D</div>
                    <div>
                        <h4>Dimas Anggara</h4>
                        <span>Sneakerhead</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT / CTA SECTION -->
<!-- CTA section tetap pada posisi di bawah -->
<section class="contact" id="contact">
    <div class="section-container">
        <div class="cta-box">
            <div class="cta-content">
                <span class="section-tag">Hubungi Kami</span>
                <h2>Siap Menemukan Sepatu <span class="highlight">Impianmu</span>?</h2>
                <p>Kunjungi toko kami atau hubungi via WhatsApp untuk konsultasi dan pemesanan.</p>
                <div class="cta-buttons">
                    <a href="https://wa.me/6282301520056?text=<?= urlencode('Halo Toko Samudra, saya ingin bertanya tentang produk sepatu.') ?>" target="_blank" class="btn btn-primary">💬 WhatsApp Kami</a>
                    <a href="https://maps.google.com/?q=Jl.+Irian+Jaya+No.120,+Situbondo" target="_blank" class="btn btn-outline">📍 Lokasi Toko</a>
                </div>
            </div>
            <div class="cta-info">
                <div class="info-item">
                    <span class="info-icon">📍</span>
                    <div>
                        <strong>Alamat</strong>
                        <p>Jl.irian Jaya no.120, SItubondo</p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">📞</span>
                    <div>
                        <strong>Telepon</strong>
                        <p>082301520056</p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">🕐</span>
                    <div>
                        <strong>Jam Buka</strong>
                        <p>Senin - Sabtu, 08:00 - 21:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
