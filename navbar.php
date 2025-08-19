<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Cake Manis</title>
    <style>
        /* Navbar CSS */
        .navbar {
            background-color: #ff9999;
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 1.5rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 0.5rem;
        }

        .nav-menu a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        /* Responsive Navbar */
        @media (max-width: 768px) {
            .nav-menu {
                flex-direction: column;
                gap: 0.5rem;
            }
        }

        /* Padding supaya konten gak ketutup navbar */
        body {
            margin: 0;
            padding-top: 60px; /* sesuaikan dengan tinggi navbar */
            font-family: Arial, sans-serif;
            background-color: #fdf6f9;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="home.php" class="logo">Toko Cake Manis</a>
            <ul class="nav-menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
