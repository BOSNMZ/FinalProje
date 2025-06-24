<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yemek Bilgisi Oyunu</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 60px;
            background-color: #fff;
        }
        .game-container {
            max-width: 700px;
            margin: auto;
            background-color: #fefefe;
            border: 2px solid #b70000;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }
        .game-container h2 {
            font-size: 22px;
            margin-bottom: 15px;
            padding: 0 10px;
        }
        .option {
            display: block;
            margin: 10px auto;
            padding: 12px 20px;
            font-size: 16px;
            background-color: #b70000;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 80%;
        }
        .option:hover {
            background-color: #ff4d4d;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            font-size: 18px;
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

    </style>
</head>
<body>

<?php include("navbar.php"); ?>


<div class="game-container">
    <h2 id="question">Yükleniyor...</h2>
    <button class="option" onclick="checkAnswer(this)"></button>
    <button class="option" onclick="checkAnswer(this)"></button>
    <button class="option" onclick="checkAnswer(this)"></button>
    <button class="option" onclick="checkAnswer(this)"></button>
    <div class="result" id="result"></div>
</div>

<?php include("footer.php"); ?>

<script>
const questions = [
    {
        question: "Türk mutfağında hangi yemek yoğurtla servis edilir?",
        options: ["İskender", "Menemen", "Mantı", "Kuru Fasulye"],
        answer: "Mantı"
    },
    {
        question: "Hangisi bir zeytinyağlı yemektir?",
        options: ["Karnıyarık", "Zeytinyağlı Yaprak Sarma", "Köfte", "İmam Bayıldı"],
        answer: "Zeytinyağlı Yaprak Sarma"
    },
    {
        question: "Aşağıdakilerden hangisi geleneksel bir Türk tatlısıdır?",
        options: ["Baklava", "Tiramisu", "Cheesecake", "Puding"],
        answer: "Baklava"
    },
    {
        question: "‘Menemen’e geleneksel olarak ne konmaz?",
        options: ["Domates", "Biber", "Soğan", "Peynir"],
        answer: "Peynir"
    }
];

let currentQuestion = 0;

function loadQuestion() {
    document.getElementById("result").textContent = "";
    const q = questions[currentQuestion];
    document.getElementById("question").textContent = q.question;
    const btns = document.querySelectorAll(".option");
    btns.forEach((btn, i) => {
        btn.textContent = q.options[i];
        btn.disabled = false;
        btn.style.backgroundColor = "#b70000";
    });
}

function checkAnswer(btn) {
    const correct = questions[currentQuestion].answer;
    const result = document.getElementById("result");
    if (btn.textContent === correct) {
        result.textContent = "Doğru!";
        result.style.color = "green";
    } else {
        result.textContent = "Yanlış! Doğru cevap: " + correct;
        result.style.color = "red";
    }
    const btns = document.querySelectorAll(".option");
    btns.forEach(b => b.disabled = true);
    setTimeout(() => {
        currentQuestion++;
        if (currentQuestion < questions.length) {
            loadQuestion();
        } else {
            document.querySelector(".game-container").innerHTML = "<h2>Oyun Bitti! 🎉</h2>";
        }
    }, 2000);
}

window.onload = loadQuestion;
</script>
</body>
</html>