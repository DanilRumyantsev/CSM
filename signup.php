<?php
require "db.php";
$data = $_POST;
$showErrors = False;

if(isset($data['signup'])){
    $errors = array();
    $showErrors = True;

    if(trim($data['firstname']) == ''){
        $errors[] = 'Укажите имя!';
    }
    if(trim($data['email']) == ''){
        $errors[] = 'Укажите почту!';
    }
    if(trim($data['password']) == ''){
        $errors[] = 'Укажите пароль!';
    }
    if(trim($data['password']) != trim($data['password2'])){
        $errors[] = 'Не верный пароль!';
    }

    if(R::count('users', 'email = ?', array($data['email']))>0){
        $errors[] = 'Пользователь с такой почтой уже есть!';
    }

    if(empty($errors)){
        $user = R::dispense('users');
        $user->firstname = $data['firstname'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
        header('Location:/glav.php');
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
        <form action='/signup.php' method='post' class='form_1'>
            <p>Регистрация</p>
            <input type="text" name="firstname" placeholder="Имя"><br>
            <input type="email" name="email" placeholder="email" id='em'><br>
            <input type="password" name="password" placeholder="Пароль"><br>
            <input type="password" name="password2" placeholder="Подтвердить пароль"><br>
            <button type="submit" name="signup" id='btn'>Регистрация<button>
        </form>
        <p><?php if($showErrors) {echo showErrors($errors);}?></p>
    </div>
    <script>
        const emailInput = document.getElementById("em");
    
        emailInput.addEventListener("input", function() {
        let email = emailInput.value;
        let mask = /[^a-zA-Z0-9@._-]/g;
        email = email.replace(mask, "");
        emailInput.value = email;
    });
    </script>
</body>
</html>