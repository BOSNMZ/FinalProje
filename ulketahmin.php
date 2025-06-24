<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yemek Ülke Tahmin Oyunu</title>
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

        .navbar-item:hover {
            color: #ffcccb;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        .game-container {
            max-width: 600px;
            margin: 100px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .question-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        .options {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        .option {
            padding: 10px;
            margin: 5px;
            background-color: #b70000;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        .option:hover {
            background-color: #ffcccb;
        }

        .result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<?php include("navbar.php"); ?>

    <div class="game-container">
        <h2>Bu yemek hangi ülkeye ait?</h2>
        <img id="question-image" class="question-image" src="" alt="Yemek Resmi">
        <div class="options" id="options-container"></div>
        <div class="result" id="result"></div>
    </div>

    <script>
        // Sorular ve cevaplar listesi
        const questions = [
            { img: "images/pizza-game.jpg", country: "İtalya", options: ["Fransa", "İtalya", "İspanya", "Almanya"] },
            { img: "images/sushi-game.jpeg", country: "Japonya", options: ["Çin", "Japonya", "Kore", "Tayland"] },
            { img: "images/taco-game.jpeg", country: "Meksika", options: ["Arjantin", "Brezilya", "Meksika", "Kolombiya"] },
            { img: "images/kruvasan-game.jpeg", country: "Fransa", options: ["İtalya", "Fransa", "İngiltere", "Portekiz"] }
        ];

        let currentQuestionIndex = 0;

        function loadQuestion() {
            let question = questions[currentQuestionIndex];
            document.getElementById("question-image").src = question.img;

            let optionsContainer = document.getElementById("options-container");
            optionsContainer.innerHTML = "";

            question.options.forEach(option => {
                let button = document.createElement("button");
                button.innerText = option;
                button.className = "option";
                button.onclick = () => checkAnswer(option, question.country);
                optionsContainer.appendChild(button);
            });

            document.getElementById("result").innerText = "";
        }

        function checkAnswer(selected, correct) {
            let resultDiv = document.getElementById("result");
            if (selected === correct) {
                resultDiv.innerText = "✅ Doğru!";
                setTimeout(nextQuestion, 1000);
            } else {
                resultDiv.innerText = `❌ Yanlış! Doğru cevap: ${correct}`;
                setTimeout(nextQuestion, 2000);
            }
        }

        function nextQuestion() {
            currentQuestionIndex++;
            if (currentQuestionIndex < questions.length) {
                loadQuestion();
            } else {
                document.getElementById("result").innerText = "🎉 Oyun Bitti!";
            }
        }

        loadQuestion();
    </script>

</body>
<?php include("footer.php"); ?>
</html>