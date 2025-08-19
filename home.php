<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Toko Cake Manis</title>
        <?php include "navbar.php"; ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fdf6f9;
        }

        .header {
            background-color: #fff5f8;
            padding: 2rem;
            border-bottom: 1px solid #eee;
            margin: 10rem;
         
        }

        header h1 {
            color: #cc3366;
            text-align: center;
            justify-content: center;
            display: flex;
            align-items: center;
            
        }

        header p {
            font-size: 1.1rem;
                 text-align: center;
            justify-content: center;
            display: flex;
            align-items: center;
            
        }
        .header h1 p {
            /* padding-top: 25px; */
        }
    </style>
</head>
<body>

    <header class="header" id="home">
        <h1>Selamat Datang di Toko Cake Manis</h1>
        <p>Kue enak dengan harga terjangkau untuk semua acara spesial Anda</p>
    </header>

    <!-- Footer -->
    <?php include "footer.php"; ?>

</body>
</html>
