<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patates Püresi ve Biftek Tarifi</title>
    <style>
        /* Genel Stil */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Menü Çubuğu */
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
            text-decoration: none;
            border: none;
        }

        /* Ensure anchor tags inside .navbar-item are also reset */
        .navbar-item a {
            text-decoration: none !important;
            border: none !important;
            border-bottom: none !important;
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
            box-shadow: none;
            border: none;
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

        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            font-family: Arial, sans-serif;
            resize: vertical;
            outline: none;
        }

        textarea:focus {
            border-color: #b70000;
            box-shadow: 0 0 8px rgba(183, 0, 0, 0.4);
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            background-color: #b70000;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #a00000;
        }
        .footer {
            background-color: #b70000;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: 14px;
            font-family: Arial, sans-serif;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<?php include("navbar.php"); ?>


    <!-- Patates Püresi Tarifi -->
    <div class="container">
        <h1>Patates Püresi Tarifi</h1>
        <img src="images/patpure.jpeg" alt="Patates Püresi">
        <p><strong>Malzemeler:</strong></p>
        <ul>
            <li>4 adet büyük boy patates</li>
            <li>1 su bardağı süt</li>
            <li>2 yemek kaşığı tereyağı</li>
            <li>Tuz</li>
        </ul>
        <p><strong>Hazırlık:</strong></p>
        <p>1. Patatesleri soyup büyük parçalar halinde doğrayın ve haşlayın.</p>
        <p>2. Haşlanan patatesleri süzün ve bir ezici ile ezin.</p>
        <p>3. Tereyağını ekleyin ve iyice karıştırın.</p>
        <p>4. Sütü azar azar ekleyerek karıştırmaya devam edin.</p>
        <p>5. Tuzunu ayarlayın ve sıcak servis yapın.</p>
    </div>

    <!-- Biftek Tarifi -->
    <div class="container">
        <h1>Biftek Tarifi</h1>
        <img src="images/bif-pat.jpg" alt="Biftek">
        <p><strong>Malzemeler:</strong></p>
        <ul>
            <li>4 dilim biftek</li>
            <li>2 yemek kaşığı sıvı yağ</li>
            <li>1 tatlı kaşığı tuz</li>
            <li>1 tatlı kaşığı karabiber</li>
            <li>1 tatlı kaşığı kekik</li>
        </ul>
        <p><strong>Hazırlık:</strong></p>
        <p>1. Bifteklerin her iki yüzüne de tuz, karabiber ve kekik serpin.</p>
        <p>2. Tavayı ısıtın ve biftekleri her iki tarafı da kızarana kadar pişirin.</p>
        <p>3. Tavaya sıvı yağ ekleyin ve biftekleri orta ateşte 5-6 dakika pişirin.</p>
        <p>4. Servis etmeden önce 5 dakika dinlendirin ve sıcak servis yapın.</p>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Yemek Tarifleri | Tüm hakları saklıdır.</p>
    </footer>

</body>
</html>