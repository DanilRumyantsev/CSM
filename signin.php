<?php
require "db.php";
$data = $_POST;
$showErrors = False;

if(isset($data['signin'])){
    $errors = array();
    $showErrors = True;

    if(trim($data['email']) == ''){
        $errors[] = 'Укажите почту!';
    }
    if(trim($data['password']) == ''){
        $errors[] = 'Укажите пароль!';
    }

    $user = R::findOne('users', 'email = ?', array($data['email']));
    if($user){
        if(password_verify($data['password'], $user->password)){
            $_SESSION['user'] = $user;
            header('Location:/glav.php');
        }else{
            $errors[] = 'Неверный пароль!';
        }
    }else{
        $errors[] = 'Пользователь не найден!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class=content align="centr">
        <form action='/signin.php' method='post' class='form_1'>
            <p>Авторизация</p>
            <input type="email" name="email" placeholder="email"><br>
            <input type="password" name="password" placeholder="Пароль"><br>
            <button type="submit" name="signin" id='btn'>Войти<button>
        </form>
        <p><?php if($showErrors) {echo showErrors($errors);}?></p>
    </div>
    <script>
    let btnInput = document.getElementById("btn");
    btnInput.onclick = function(){
    window.location="/glav.php"
    }

  </script>
</body>
</html>