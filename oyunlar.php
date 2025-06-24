<!DOCTYPE html>
<?php session_start(); ?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oyunlar</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding-bottom: 60px; /* make space for the fixed footer */
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

        .navbar-item:hover {
            color: #ffcccb;
        }

        .container {
            max-width: 800px;
            margin: 100px auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .game-card {
            text-decoration: none;
            color: inherit;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .game-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .game-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .game-card .title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        .game-card .description {
            font-size: 14px;
            color: #555;
            margin-top: 5px;
        }

        .footer {
            background-color: #b70000;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <?php include("navbar.php"); ?>

    <!-- Oyun Seçenekleri -->
    <div class="container">
        <a href="ulketahmin.php" class="game-card">
            <img src="images/question.jpg" alt="Yemek Ülke Tahmin Oyunu" width="200">
            <div class="title">Yemek Ülke Tahmin Oyunu</div>
            <div class="description">Bir yemeğin hangi ülkeye ait olduğunu tahmin et!</div>
        </a>

        <a href="yemekbilgi.php" class="game-card">
            <img src="images/quiz.jpg" alt="Yemek Bilgisi Quiz">
            <div class="title">Yemek Bilgisi Quiz</div>
            <div class="description">Dünya mutfakları ve yemekler hakkında bilginizi test edin!</div>
        </a>
    </div>

    <?php include("footer.php"); ?>

</body>
</html>