<?php
session_start(); // Oturum başlat

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['form_type'] == 'login') {
        // Veritabanı bağlantısı
        $servername = "localhost";
        $username = "root"; 
        $password = "";
        $dbname = "yemek_blog";

        // MySQL bağlantısı
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Bağlantıyı kontrol et
        if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
        }

        // Formdan gelen verileri al
        $email = $_POST['login-email'];
        $password = $_POST['login-password'];

        // Kullanıcıyı e-posta ile veritabanından bul
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Şifreyi doğrula
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username']; // Oturumu başlat
                header("Location: yemektarifleri.php"); // Giriş başarılıysa tarifler sayfasına yönlendir
                exit();
            } else {
                echo "Hatalı şifre!";
            }
        } else {
            echo "Bu e-posta ile kayıtlı bir kullanıcı bulunamadı.";
        }

        // Bağlantıyı kapat
        $conn->close();
    } elseif ($_POST['form_type'] == 'register') {
        // Veritabanı bağlantısı
        $servername = "localhost";
        $username = "root"; 
        $password = "";
        $dbname = "yemek_blog";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
        }

        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $cinsiyet = $conn->real_escape_string($_POST['cinsiyet']);
        $dogumtarihi = $conn->real_escape_string($_POST['dogumtarihi']);
        $favori_kategori = $conn->real_escape_string($_POST['favori_kategori']);

        $checkEmail = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($checkEmail);

        if ($result->num_rows > 0) {
            echo "Bu e-posta zaten kayıtlı!";
        } else {
            $sql = "INSERT INTO users (username, email, password, cinsiyet, dogumtarihi, favori_kategori)
                    VALUES ('$username', '$email', '$password', '$cinsiyet', '$dogumtarihi', '$favori_kategori')";
            if ($conn->query($sql) === TRUE) {
                header("Location: yemektarifleri.php");
                exit();
            } else {
                echo "Hata: " . $conn->error;
            }
        }

        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            gap: 40px;
            justify-content: center;
            padding: 60px 20px;
        }

        h2 {
            color: #a40000;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(164,0,0,0.2);
            width: 300px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #a40000;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #a40000;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background-color: #a40000;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #800000;
        }

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
    </style>
    <title>Giriş ve Kayıt</title>
</head>
<body>
<div class="navbar">
    <a class="navbar-item" href="yemektarifleri.php">Yemek Tarifleri</a>
    <a class="navbar-item" href="menuler.php">Menüler</a>
    <a class="navbar-item" href="blog.php">Blog</a>
    <a class="navbar-item" href="oyunlar.php">Oyunlar</a>
    <a class="navbar-item" href="login.php">Giriş Yap / Kayıt Ol</a>
</div>
<?php include("footer.php"); ?>
<div class="container">
    <div>
        <h2>Kayıt Ol</h2>
        <form method="post" action="login.php">
            <input type="hidden" name="form_type" value="register">
            <label>Kullanıcı Adı:</label>
            <input type="text" name="username" required>
            <label>E-posta:</label>
            <input type="email" name="email" required>
            <label>Şifre:</label>
            <input type="password" name="password" required>
            <label>Cinsiyet:</label>
            <select name="cinsiyet">
                <option value="Erkek">Erkek</option>
                <option value="Kadın">Kadın</option>
            </select>
            <label>Doğum Tarihi:</label>
            <input type="date" name="dogumtarihi">
            <label>Favori Kategori:</label>
            <select name="favori_kategori">
                <option value="Tatlı">Tatlı</option>
                <option value="Tuzlu">Tuzlu</option>
                <option value="Et">Et</option>
                <option value="Tavuk">Tavuk</option>
            </select>
            <input type="submit" value="Kayıt Ol">
        </form>
    </div>

    <div>
        <h2>Giriş Yap</h2>
        <form method="post" action="login.php">
            <input type="hidden" name="form_type" value="login">
            <label>E-posta:</label>
            <input type="email" name="login-email" required>
            <label>Şifre:</label>
            <input type="password" name="login-password" required>
            <input type="submit" value="Giriş Yap">
        </form>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>