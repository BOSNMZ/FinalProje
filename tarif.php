<?php
session_start();
include("db.php");

// id parametresini al
if (!isset($_GET['id'])) {
    echo "Tarif ID bulunamadı.";
    exit;
}

$id = (int) $_GET['id'];

// Veritabanından tarif bilgilerini al
$stmt = $conn->prepare("SELECT * FROM tarifler WHERE id = ?");
$stmt->execute([$id]);
$tarif = $stmt->fetch(PDO::FETCH_ASSOC);

// Tarif bulunamadıysa
if (!$tarif) {
    echo "Tarif bulunamadı.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["yorum"], $_SESSION["user_id"])) {
    $yorum = trim($_POST["yorum"]);
    $user_id = $_SESSION["user_id"];

    if (!empty($yorum)) {
        $stmt = $conn->prepare("INSERT INTO yorumlar (tarif_id, user_id, yorum) VALUES (?, ?, ?)");
        $stmt->execute([$id, $user_id, $yorum]);
        header("Location: tarif.php?id=" . $id);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($tarif['baslik']) ?></title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f9f9f9; }
        .container { max-width: 700px; margin: auto; padding: 20px; border-radius: 10px; }
        h1 { color: #b70000; text-align: center; }
        img { width: 100%; border-radius: 10px; margin-bottom: 20px; }
        .aciklama { font-size: 16px; line-height: 1.6; }
    </style>
    <style>
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
  </style>
  <link rel="stylesheet" href="footer.css">
  <style>
    html, body {
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }
    .main-content {
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
    <div class="main-content" style="flex: 1;">
        <main class="container">
        <h1><?= htmlspecialchars($tarif['baslik']) ?></h1>
        <?php if (!empty($tarif['resim'])): ?>
            <img src="<?= htmlspecialchars($tarif['resim']) ?>" alt="<?= htmlspecialchars($tarif['baslik']) ?>">
        <?php endif; ?>
        <div class="aciklama"><?= nl2br(htmlspecialchars($tarif['aciklama'])) ?></div>
        <hr>
        <div class="yorumlar">
            <h2>Yorumlar</h2>
            <?php
            // Yorumları çek
            $stmt = $conn->prepare("SELECT y.*, u.username FROM yorumlar y JOIN users u ON y.user_id = u.id WHERE tarif_id = ? ORDER BY y.id DESC");
            $stmt->execute([$id]);
            $yorumlar = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($yorumlar):
                foreach ($yorumlar as $yorum):
            ?>
                <div style="margin-bottom: 10px;">
                    <strong><?= htmlspecialchars($yorum['username']) ?>:</strong>
                    <p><?= nl2br(htmlspecialchars($yorum['yorum'])) ?></p>
                </div>
            <?php
                endforeach;
            else:
                echo "<p>Henüz yorum yok.</p>";
            endif;
            ?>
        </div>

        <?php if (isset($_SESSION['username'])): ?>
            <div class="yorum-ekle" style="margin-top: 30px;">
                <h3>Yorum Yap</h3>
                <form method="POST">
                    <textarea name="yorum" rows="4" style="width:100%;" required></textarea><br>
                    <button type="submit">Gönder</button>
                </form>
            </div>
        <?php endif; ?>
        </main>
    </div>
<?php include("footer.php"); ?>
</body>
</html>