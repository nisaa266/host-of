<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Kue</title>
    <meta name="description" content="Hubungi kami untuk pemesanan kue ulang tahun, tart, brownies, dan lainnya.">
            <?php include "navbar.php"; ?>
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fdf6f9;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            color: #cc3366;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .contact-section {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .contact-section h3 {
            margin-bottom: 1.5rem;
            color: #cc3366;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #cc3366;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        .submit-btn {
            background-color: #ff9999;
            color: #fff;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #ff7777;
        }

        .contact-info {
            background-color: #fff5f8;
            padding: 1.5rem;
            border-radius: 10px;
        }

        .contact-info h3 {
            color: #cc3366;
            margin-bottom: 1rem;
        }

        .contact-item {
            margin-bottom: 0.8rem;
        }
    </style>
</head>
<body>

    <!-- Include Header -->
    <?php include 'header.php'; ?>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="form-grid">
                <!-- Form -->
                <div class="contact-section">
                    <h3>Form Pemesanan</h3>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap:</label>
                            <input type="text" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Nomor Telepon:</label>
                            <input type="tel" id="telepon" name="telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="jenis-kue">Jenis Kue:</label>
                            <select id="jenis-kue" name="jenis-kue" required>
                                <option value="">Pilih Jenis Kue</option>
                                <option value="ulang-tahun">Kue Ulang Tahun</option>
                                <option value="cupcakes">Cupcakes</option>
                                <option value="tart">Kue Tart</option>
                                <option value="brownies">Brownies</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Dibutuhkan:</label>
                            <input type="date" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan/Request Khusus:</label>
                            <textarea id="pesan" name="pesan" placeholder="Tuliskan detail kue yang Anda inginkan..."></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Kirim Pesanan</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info">
                    <h3>Informasi Kontak</h3>
                    <div class="contact-item">
                        <strong>Alamat:</strong><br>
                        Jl. Kue Manis No. 45, Jakarta
                    </div>
                    <div class="contact-item">
                        <strong>Telepon:</strong><br>
                        (021) 1234-5678
                    </div>
                    <div class="contact-item">
                        <strong>WhatsApp:</strong><br>
                        0812-3456-7890
                    </div>
                    <div class="contact-item">
                        <strong>Email:</strong><br>
                        info@tokocakemanis.com
                    </div>
                    <div class="contact-item">
                        <strong>Jam Buka:</strong><br>
                        Senin - Minggu: 08:00 - 20:00
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>
