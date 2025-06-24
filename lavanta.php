<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akdeniz Tipi Beslenme ve Faydaları</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
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
            padding: 20px 20px 60px 20px; /* Added 60px bottom padding */
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

        /* Prevent footer from overlapping content */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
        }

        .footer {
            background-color: #b70000;
            color: white;
            text-align: center;
            padding: 15px 0;
            width: 100%;
            margin-top: 30px;
            position: relative;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
<?php include("navbar.php"); ?>

<div class="container">
<h1>Lavanta ve Faydaları</h1>
    <img src="images/lav.jpeg" alt="Lavanta Görseli">
    <p>Lavanta, yüzyıllardır hem sağlık hem de güzellik alanlarında kullanılan çok yönlü bir bitkidir. Hoş kokusu ve sakinleştirici etkileriyle bilinir. Aşağıda lavantanın en bilinen faydaları listelenmiştir:</p>
    <ul>
        <li>Stres ve anksiyeteyi azaltır, rahatlatıcı etkisi vardır.</li>
        <li>Uykusuzluk problemlerinde doğal bir çözümdür.</li>
        <li>Baş ağrılarını ve migreni hafifletmeye yardımcı olabilir.</li>
        <li>Antiseptik özellikleri sayesinde küçük yaraların iyileşmesini destekler.</li>
        <li>Ciltteki tahriş ve sivilcelere karşı etkilidir.</li>
        <li>Lavanta çayı, sindirimi rahatlatır ve mide ağrılarını hafifletir.</li>
        <li>Kas ağrıları ve romatizmal şikayetlerde masaj yağı olarak kullanılır.</li>
    </ul>
    <p>Lavanta; çay, yağ, sabun ya da kurutulmuş çiçek formunda kullanılabilir. Aşırıya kaçmadan ve alerjik reaksiyon riskine dikkat ederek kullanılması önerilir.</p>
  </div>
 

</body>
<div class="footer">
    © 2025 Yemek Tarifleri | Tüm hakları saklıdır.
</div>
</html>