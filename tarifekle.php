<?php
session_start();
include("db.php");

// Giriş kontrolü
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}

// Form gönderildiyse işle
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baslik = $_POST["baslik"];
    $aciklama = $_POST["aciklama"];
    $resim = $_POST["resim"]; // Basit resim yolu, upload sistemi yok
    $user_id = $_SESSION["user_id"];

    if (!empty($baslik) && !empty($aciklama)) {
        $stmt = $conn->prepare("INSERT INTO tarifler (baslik, aciklama, resim, user_id) VALUES (?, ?, ?, ?)");
        $stmt->execute([$baslik, $aciklama, $resim, $user_id]);
        $success = "Tarif başarıyla eklendi!";
    } else {
        $error = "Başlık ve açıklama zorunludur.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni Tarif Ekle</title>
    <link rel="stylesheet" href="footer.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            padding: 20px;
        }

        .form-box {
            background: white;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        button {
            margin-top: 15px;
            background-color: #b70000;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #b70000;
        }

        .message {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
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

        .success { background-color: #d4edda; color: #155724; }
        .error { background-color: #f8d7da; color: #721c24; }

        footer {
            width: 100%;
            margin: 0;
            padding: 10px 0;
            background-color: #b70000;
            color: white;
            text-align: center;
            position: relative;
            bottom: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <?php include("navbar.php"); ?>
    <div class="form-box" style="margin-top: 80px;">
        <h1>Yeni Tarif Ekle</h1>

        <?php if (isset($success)): ?>
            <div class="message success"><?= $success ?></div>
        <?php elseif (isset($error)): ?>
            <div class="message error"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <label for="baslik">Başlık</label>
            <input type="text" name="baslik" id="baslik" required>

            <label for="aciklama">Açıklama</label>
            <textarea name="aciklama" id="aciklama" rows="5" required></textarea>

            <label for="resim">Resim Yolu (örn: kofte.webp)</label>
            <input type="text" name="resim" id="resim">

            <button type="submit">Tarifi Ekle</button>
        </form>
    </div>
    <div style="clear: both;"></div>
<?php include("footer.php"); ?>
</body>
</html>