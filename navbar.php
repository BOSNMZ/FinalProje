<div class="navbar">
    <a href="yemektarifleri.php" class="navbar-item">Yemek Tarifleri</a>
    <a href="menuler.php" class="navbar-item">MENÜLER</a>
    <a href="blog.php" class="navbar-item">BLOG</a>
    <a href="oyunlar.php" class="navbar-item">Oyunlar</a>
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="profile.php" class="navbar-item">Profilim (<?= htmlspecialchars($_SESSION['username']) ?>)</a>
    <?php else: ?>
        <a href="login.php" class="navbar-item">Giriş yap / Kayıt ol</a>
    <?php endif; ?>
</div>