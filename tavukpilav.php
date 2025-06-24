<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tavuk Pilav Tarifi</title>
    <link rel="stylesheet" href="navbar.css">
    <style>
        /* Genel Stil */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Menü Çubuğu */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #b70000;
            padding: 10px 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-item {
            display: flex;
            align-items: center;
            color: white;
            font-size: 14px;
            font-weight: bold;
            padding: 5px 10px;
        }

        .navbar-item img {
            width: 24px;
            height: 24px;
            margin-right: 5px;
        }

        .navbar-item:hover {
            color: #ffcccb;
        }

        /* İçerik Kutusu */
        .container {
            max-width: 800px;
            margin: 80px auto 0;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #b70000;
            text-align: center;
        }

        img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        ul {
            text-align: left;
            list-style-type: square;
        }
        
        /* Footer */
        .footer {
            background-color: #b70000;
            color: white;
            text-align: center;
            padding: 15px 0;
            width: 100%;
            margin-top: 30px;
            position: relative;
        }
    </style>
</head>
<body>
<?php include("navbar.php"); ?>


    <!-- Tarif İçeriği -->
    <div class="container">
        <h1>Tavuk Pilav Tarifi</h1>
        <img src="images/tav-pil.jpg" alt="Tavuk Pilav">
        <p><strong>Malzemeler:</strong></p>
        <ul>
            <li>2 su bardağı pirinç</li>
            <li>3 su bardağı su veya tavuk suyu</li>
            <li>500 gr tavuk göğsü veya but</li>
            <li>2 yemek kaşığı tereyağı</li>
            <li>1 yemek kaşığı sıvı yağ</li>
            <li>Tuz</li>
        </ul>
        <p><strong>Hazırlık:</strong></p>
        <p>1. Pirinci bir kaba alın ve ılık suda 20 dakika bekletin. Daha sonra süzün.</p>
        <p>2. Tavukları haşlayın ve didikleyin.</p>
        <p>3. Tereyağını ve sıvı yağı tencereye alın. Pirinçleri ekleyin ve kavurun.</p>
        <p>4. Kavrulan pirince tavuk suyunu ve tuzu ekleyin. Karıştırıp kapağını kapatın ve kısık ateşte pişirin.</p>
        <p>5. Pişen pilavın üzerine tavukları ekleyin ve karıştırın. 10 dakika dinlendirin ve servis yapın.</p>
    </div>

    <div class="footer">
        © 2025 Yemek Tarifleri | Tüm hakları saklıdır.
    </div>

</body>
</html>