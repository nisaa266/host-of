<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
/* Footer */
.footer {
    background-color: #333;
    color: white;
    padding: 2rem 0;
    margin-top: 3rem;
}

.footer-content {
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 1rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
}

.footer-section h3 {
    color: #ff9999;
    margin-bottom: 1rem;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li {
    margin-bottom: 0.5rem;
}

.footer-section ul li a {
    color: #ccc;
    text-decoration: none;
}

.footer-section ul li a:hover {
    color: #ff9999;
}

.footer-bottom {
    text-align: center;
    padding-top: 1rem;
    margin-top: 1rem;
    border-top: 1px solid #555;
    color: #999;
}

/* Responsive */
@media (max-width: 768px) {
    .nav-menu {
        flex-direction: column;
        gap: 0.5rem;
    }

    .header h1 {
        font-size: 2rem;
    }

    .form-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    .footer-content {
        grid-template-columns: 1fr;
    }
}
</style>
        <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Toko Cake Manis</h3>
                <p>Kue enak untuk semua acara spesial Anda. Dibuat fresh setiap hari dengan bahan berkualitas.</p>
            </div>
            <div class="footer-section">
                <h3>Produk</h3>
                <ul>
                    <li><a href="produk.php">Kue Ulang Tahun</a></li>
                    <li><a href="produk.php">Cupcakes</a></li>
                    <li><a href="produk.php">Kue Tart</a></li>
                    <li><a href="produk.php">Brownies</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Layanan</h3>
                <ul>
                    <li><a href="#">Custom Design</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Pre-Order</a></li>
                    <li><a href="#">Konsultasi</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">WhatsApp</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Toko Cake Manis. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>