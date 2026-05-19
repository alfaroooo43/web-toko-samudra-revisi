<!-- FOOTER -->
<footer class="footer" id="footer">
    <div class="footer-container">
        <div class="footer-col">
            <h3><span class="logo-icon">👟</span> Samudra</h3>
            <p>Toko sepatu terpercaya dengan koleksi terlengkap dan harga terjangkau di Jember.</p>
            <div class="social">
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">TikTok</a>
            </div>
        </div>
        <div class="footer-col">
            <h4>Menu</h4>
            <ul>
                <li><a href="#hero">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#products">Produk</a></li>
                <li><a href="#testimonials">Testimoni</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Kategori</h4>
            <ul>
                <li><a href="#">Running</a></li>
                <li><a href="#">Casual</a></li>
                <li><a href="#">Sneakers</a></li>
                <li><a href="#">Formal</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Kontak</h4>
            <ul>
                <li>📍 Jl.irian Jaya no.120, SItubondo</li>
                <li>📞 082301520056</li>
                <li>✉️ info@tokosamudra.com</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2026 Toko Samudra. All rights reserved.</p>
    </div>
</footer>

<script>
// Navbar scroll effect
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    navbar.classList.toggle('scrolled', window.scrollY > 50);
});

// Hamburger menu
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');
hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    hamburger.classList.toggle('active');
});

// Close menu on link click
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        hamburger.classList.remove('active');
    });
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Scroll reveal animation
const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
        }
    });
}, observerOptions);

document.querySelectorAll('.feature-card, .product-card, .cta-box, .section-header').forEach(el => {
    el.classList.add('reveal');
    observer.observe(el);
});
</script>
</body>
</html>
