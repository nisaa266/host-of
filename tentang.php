<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Toko Cake Manis</title>
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

        /* About */
        .about {
            background-color: #fff5f8;
            padding: 2rem;
            border-radius: 10px;
            line-height: 1.6;
        }

        .about h3 {
            margin-top: 0;
            color: #cc3366;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .about p {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <!-- Tentang Kami Section -->
    <section class="section" id="about">
        <div class="container">
            <h2 class="section-title">Tentang Kami</h2>
            <div class="about">
                <h3>Toko Cake Manis</h3>
                <p>Kami adalah toko kue yang sudah berpengalaman lebih dari 5 tahun melayani pelanggan di Jakarta. 
                Menggunakan bahan-bahan berkualitas dan resep yang sudah teruji untuk menghasilkan kue yang enak dan fresh.</p>
                <p>Kami melayani pemesanan untuk berbagai acara seperti ulang tahun, pernikahan, gathering, dan acara lainnya. 
                Tim kami siap membantu mewujudkan kue impian Anda.</p>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

</body>
</html>
