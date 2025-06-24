<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
session_start();
include("db.php");
$tarif_id = 1; // Köfte tarifinin ID'si
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Köfte Tarifi</title>
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
    </style>
</head>
<body>

    <!-- Menü Çubuğu -->
    <div class="navbar">
        <a href="yemektarifleri.php" class="navbar-item">
            Yemek Tarifleri
        <a href="menuler.html" class="navbar-item">
            MENÜLER
        </a>
        <a href="blog.html" class="navbar-item">
            BLOG
        </a>
        <a href="profile.php" class="navbar-item">
            Diyet Listesi
        </a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="profile.php" class="navbar-item">Profilim (<?= $_SESSION['username'] ?>)</a>
        <?php else: ?>
            <a href="login.html" class="navbar-item">Giriş yap / Kayıt ol</a>
        <?php endif; ?>
    </div>


    <!-- Tarif İçeriği -->
    <div class="container">
        <?php
        $stmt = $conn->prepare("SELECT * FROM tarifler WHERE id = ?");
        $stmt->execute([$tarif_id]);
        $tarif = $stmt->fetch();
        ?>
        <h1><?= $tarif['baslik'] ?></h1>
        <img src="<?= $tarif['resim'] ?>" alt="<?= $tarif['baslik'] ?>">
        <p><?= $tarif['aciklama'] ?></p>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['yorum'], $_SESSION['user_id'])) {
            $yorum = trim($_POST['yorum']);
            $user_id = $_SESSION['user_id'];

            if (!empty($yorum)) {
                $stmt = $conn->prepare("INSERT INTO yorumlar (tarif_id, user_id, yorum) VALUES (?, ?, ?)");
                $stmt->execute([$id, $user_id, $yorum]);
                header("Location: tarif.php?id=" . $id);
                exit;
            } else {
                echo "<p style='color:red;'>Yorum boş olamaz!</p>";
            }
        }
        ?>

        <?php
        // $_SESSION değişkenlerini ekrana yazdır
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>
        <?php if (isset($_SESSION['user_id'])): ?>
        <form method="POST" action="">
            <textarea name="yorum" rows="4" placeholder="Yorumunuzu buraya yazın..."></textarea>
            <button type="submit">Gönder</button>
        </form>
        <?php else: ?>
        <p>Yorum yapmak için <a href="login.html">giriş yapın</a>.</p>
        <?php endif; ?>

        <?php
        $stmt = $conn->prepare("SELECT y.*, u.username FROM yorumlar y JOIN users u ON y.user_id = u.id WHERE tarif_id = ? ORDER BY created_at DESC");
        $stmt->execute([$tarif_id]);
        $yorumlar = $stmt->fetchAll();

        if ($yorumlar):
            echo "<h3>Yorumlar:</h3>";
            foreach ($yorumlar as $yorum):
                echo "<p><strong>".$yorum['username'].":</strong> ".$yorum['yorum']." <em>(".$yorum['created_at'].")</em></p>";
            endforeach;
        else:
            echo "<p>Henüz yorum yok.</p>";
        endif;
        ?>
    </div>

</body>
</html>