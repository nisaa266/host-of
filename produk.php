<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami</title>
            <?php include "navbar.php"; ?>
    <style> 
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fdf6f9;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            color: #cc3366;
            margin-bottom: 2rem;
        }

        /* Products */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .product-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card h3 {
            color: #cc3366;
            margin-bottom: 0.5rem;
        }

        .product-card p {
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .product-price {
            font-weight: bold;
            color: #ff6600;
            margin-top: 0.75rem;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>



    <!-- Products Section -->
    <section class="section" id="products">
        <div class="container">
            <h2 class="section-title">Produk Kami</h2>
            <div class="products-grid">
                <div class="product-card">
                    <h3>Kue Ulang Tahun</h3>
                    <p>Kue ulang tahun dengan berbagai ukuran dan rasa. Bisa custom design sesuai keinginan.</p>
                    <div class="product-price">Rp 150.000 - Rp 500.000</div>
                </div>
                <div class="product-card">
                    <h3>Cupcakes</h3>
                    <p>Cupcakes lembut dengan topping yang beragam. Cocok untuk snack atau gift.</p>
                    <div class="product-price">Rp 15.000 per pcs</div>
                </div>
                <div class="product-card">
                    <h3>Kue Tart</h3>
                    <p>Kue tart dengan buah-buahan segar. Tersedia dalam berbagai ukuran.</p>
                    <div class="product-price">Rp 200.000</div>
                </div>
                <div class="product-card">
                    <h3>Brownies</h3>
                    <p>Brownies cokelat yang fudgy dan lezat. Tersedia dalam kemasan box.</p>
                    <div class="product-price">Rp 80.000</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

</body>
</html>
