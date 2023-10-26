<?php
require "db.php";
$data = $_POST
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="input">
        <input type="text" class="inputHours" id="inputpromo">      
        <button id="as">click</button>
    </div>

    <progress class="progress" id="file" max="100" value="0"></progress>

    <script>
        let promoCode = "3F1C-4FMD-KK3L-42BC";
        let promoPoints = 0;

        let btn = document.getElementById("as");
        let progressBar = document.getElementById("file");

        btn.onclick = function(){
            let input = document.getElementById("inputpromo").value;
            
            if (input === promoCode) {
                promoPoints += 10; // Накапливаем promoPoints
                alert("Промокод верный! Начислено " + "10" + " очков.");
                
                // Обновление значения прогресс-бара
                progressBar.value = promoPoints;
            } else {
                alert("Промокод неверный! Ошибка.");
            }
            
            alert("У вас " + promoPoints + " очков.");
        };
    </script>
</body>
</html>