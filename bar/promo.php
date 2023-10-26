<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <h1>Пример страницы</h1>

    <script>
        window.addEventListener("load", function() {
    const preloader = document.getElementById("preloader");
    preloader.style.display = "none";
});
    </script>
  
    <!-- Navigation-->

    <header class='header'>
        <div class='container'>
            <div class='header__inner'>
                <div class = 'header__logo'>
                    <img  class="logoBank" src="./images/logo.svg">
                </div>
    
                <div class="header__burger">
                    <span></span>
                </div>
    
                <nav class='nav'>
                    <ul class='list-inline'>
                    </ul>
                </nav>
            </div>
        </div>
        
        <img src="./images/Polygon 1.png" class="Polygon">
        <P class="textName">ИИ</P>
    </header>

    <div class="input">
        <input type="text" class="inputHours" id="inputpromo">      
        <button id="as">click</button>
    </div>

    <progress class="progress" id="file" max="100" value="0"></progress>

    <div id="counter"></div>


    <script>    
        let promoCode = "3F1C-4FMD-KK3L-42BC";
        let promoPoints = 0;             

        let btn = document.getElementById("as");
        let progressBar = document.getElementById("file");
        let counterElement = document.getElementById("counter");

        btn.onclick = function(){
            let input = document.getElementById("inputpromo").value;
            
            if (input === promoCode) {
                promoPoints += 10; // Накапливаем promoPoints
                alert("Промокод верный! Начислено 10 очков.");
                
                if (promoPoints > 100) {
                    promoPoints = 0; // Обнуляем promoPoints
                    counter++; // Увеличиваем счетчик
                    alert("Вы повысели уровень");
                }

                // Обновление значения прогресс-бара
                progressBar.value = promoPoints;
            } else {
                alert("Промокод неверный! Ошибка.");
            }
            
            counterElement.textContent = "Ваш уровень: " + counter;
        };

    </script>
    
</body>
</html>