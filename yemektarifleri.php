<?php session_start(); ?>
<?php
include("db.php");

$stmt = $conn->prepare("SELECT * FROM tarifler ORDER BY id DESC");
$stmt->execute();
$tarifler = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yemek Tarifleri</title>
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
        }

        .navbar-item {
            display: flex;
            align-items: center;
            color: white;
            font-size: 14px;
            font-weight: bold;
            padding: 5px 10px;
            text-decoration: none;
        }

        .navbar-item img {
            width: 24px;
            height: 24px;
            margin-bottom: 5px;
        }

        .navbar-item:hover {
            color: #ffcccb;
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 80px 20px 20px; 
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Tarif Kartları */
        .recipe-card {
            text-decoration: none;
            color: inherit;
            display: block;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .recipe-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }

        .recipe-card .content {
            padding: 15px;
        }

        .recipe-card .title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            text-align: center;
        }

        .recipe-card .details {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
            text-align: center;
        }

    </style>
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <?php include("navbar.php"); ?>

    <!-- Tarif Kartları -->
    <div class="cards-container">
        <?php foreach ($tarifler as $tarif): ?>
            <a href="tarif.php?id=<?= $tarif['id'] ?>" class="recipe-card">
                <img src="<?= htmlspecialchars($tarif['resim']) ?>" alt="<?= htmlspecialchars($tarif['baslik']) ?>">
                <div class="content">
                    <div class="title"><?= htmlspecialchars($tarif['baslik']) ?></div>
                    <div class="details">Tarif detayı için tıklayın</div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>