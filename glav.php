<?php
require "db.php";
$data = $_POST;
$user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='content'>
        <?php if($user) : ?>
            <p>welcome</p>
            <button id='btn'>выйти</button>

        <?php else :?>
            <a href="/signin.php">Авторизация</br>
            <a href="/signup.php">Регистрация</br>
        <?php endif ; ?>    

    </div>
    <script>
    let btnInput = document.getElementById("btn");
    btnInput.onclick = function(){
    window.location="/logout.php"
    }

  </script>
</body>
</html>

