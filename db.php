<?php
$host = 'localhost';
$db   = 'yemek_blog';  // Veritabanı adın
$user = 'root';        // Kullanıcı adın
$pass = '';            // Şifre (XAMPP’ta genelde boş)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $conn = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die('Veritabanı bağlantı hatası: ' . $e->getMessage());
}
?>