<?php
session_start();
include("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}

$user_id = $_SESSION['user_id'];

// Kullanıcının yorumları
$stmt = $conn->prepare("SELECT y.yorum, y.created_at, t.baslik FROM yorumlar y JOIN tarifler t ON y.tarif_id = t.id WHERE y.user_id = ?");
$stmt->execute([$user_id]);
$yorumlar = $stmt->fetchAll();

// Kullanıcının tarifleri
$stmt2 = $conn->prepare("SELECT * FROM tarifler WHERE user_id = ?");
$stmt2->execute([$user_id]);
$tarifler = $stmt2->fetchAll();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Profilim</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h1, h2 {
            color: #b70000;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #b70000;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 10px;
        }

        .yorum, .tarif {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .yorum em {
            color: #888;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #b70000;
            padding: 10px 0;
            position: fixed;
            top: 0;
            left: 0;
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
        /* Footer full width */
        footer {
            width: 100vw;
            background-color: #b70000;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            left: 0;
        }
    </style>
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<?php include("navbar.php"); ?>
<div class="container" style="margin-top: 80px;">
    <h1><?= htmlspecialchars($_SESSION['username']) ?> - Profilim</h1>
    <a class="button" href="logout.php">Çıkış Yap</a>

    <h2>Yorumlarım</h2>
    <?php if ($yorumlar): ?>
        <?php foreach ($yorumlar as $yorum): ?>
            <div class="yorum">
                <strong><?= htmlspecialchars($yorum['baslik']) ?>:</strong><br>
                <?= htmlspecialchars($yorum['yorum']) ?> <br>
                <em><?= $yorum['created_at'] ?></em>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Henüz yorum yapmadınız.</p>
    <?php endif; ?>

    <h2>Tariflerim</h2>
    <?php if ($tarifler): ?>
        <?php foreach ($tarifler as $tarif): ?>
            <div class="tarif">
                <strong><?= htmlspecialchars($tarif['baslik']) ?></strong>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Henüz tarif eklemediniz.</p>
    <?php endif; ?>
    <a class="button" href="tarifekle.php">+ Yeni Tarif Ekle</a>
</div>
<?php include("footer.php"); ?>
</body>
</html>