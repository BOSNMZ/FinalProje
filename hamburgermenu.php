<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger ve Patates Kızartması Tarifi</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <style>
        /* Genel Stil */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding-bottom: 100px; /* ensure space for fixed footer */
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
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

    <?php include("navbar.php"); ?>


    <!-- Hamburger Tarifi -->
    <div class="container">
        <h1>Hamburger Tarifi</h1>
        <img src="images/ham.jpeg" alt="Hamburger">
        <p><strong>Malzemeler:</strong></p>
        <ul>
            <li>500 gr kıyma</li>
            <li>1 adet kuru soğan (rendelenmiş)</li>
            <li>1 çay kaşığı tuz</li>
            <li>1 çay kaşığı karabiber</li>
            <li>1 çay kaşığı kimyon</li>
            <li>4 adet hamburger ekmeği</li>
            <li>Marul, domates, salatalık turşusu (isteğe bağlı)</li>
            <li>Ketçap, mayonez (isteğe bağlı)</li>
        </ul>
        <p><strong>Hazırlık:</strong></p>
        <p>1. Kıymayı geniş bir kaba alın. Üzerine rendelenmiş soğan, tuz, karabiber ve kimyon ekleyin. İyice yoğurun.</p>
        <p>2. Harçtan eşit büyüklükte köfteler yapın ve şekil verin.</p>
        <p>3. Köfteleri ızgarada veya tavada pişirin.</p>
        <p>4. Hamburger ekmeklerini ortadan ikiye kesin ve iç kısımlarını hafifçe kızartın.</p>
        <p>5. Ekmeklerin arasına köfte, marul, domates ve salatalık turşusu ekleyin. İsteğe göre ketçap ve mayonez ilave edin.</p>
    </div>

    <!-- Patates Kızartması Tarifi -->
    <div class="container">
        <h1>Patates Kızartması Tarifi</h1>
        <img src="images/patkız.jpeg" alt="Patates Kızartması">
        <p><strong>Malzemeler:</strong></p>
        <ul>
            <li>4 adet büyük boy patates</li>
            <li>1 litre sıvı yağ</li>
            <li>Tuz</li>
        </ul>
        <p><strong>Hazırlık:</strong></p>
        <p>1. Patatesleri soyun ve ince şeritler halinde doğrayın.</p>
        <p>2. Soğuk su dolu bir kaba koyup 10-15 dakika bekletin.</p>
        <p>3. Patatesleri sudan çıkarıp kurulayın.</p>
        <p>4. Yağı derin bir tencerede kızdırın.</p>
        <p>5. Patatesleri partiler halinde kızgın yağa atın ve altın sarısı olana kadar kızartın.</p>
        <p>6. Kızaran patatesleri kağıt havlu üzerine alın ve tuz ekleyerek servis yapın.</p>

    </div>

    <div class="footer">
        © 2025 Yemek Tarifleri | Tüm hakları saklıdır.
    </div>
</body>
</html>