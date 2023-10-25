<?php
require "db.php";
$data = $_POST;
$showError = False;
if(isset($data['signup'])){
    $errors = array();
    $showError = True;

    if(trim($data['name1']) == ''){
        $errors == 'Укажите имя!';
    }
    if(trim($data['email']) == ''){
        $errors == 'Укажите почту!';
    }
    if(trim($data['password']) == ''){
        $errors == 'Укажите пароль!';
    }

    if(R::count('user', 'email = ?', array($data['email'])) >0 ){
        $errors = 'Пользователь с такой почтой уже есть!';
    }

    if(empty($errors)){
        $user = R::dispanse('users');
        $user->name = $data['name1'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
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
    <div class=content>
        <form action='/hite.php' method='post' class='form_1'>
            <p>Регистрация</p>
            <input type="name" name="name1" placeholder="Имя"><br>
            <input type="email" name="email" placeholder="email"><br>
            <input type="password" name="password" placeholder="Пароль"><br>
            <button type="submit" name="signup">Регистрация<button>
        </form>
        <p><?php if($showError) {echo showErrors($errors);}?></p>

</body>
</html>