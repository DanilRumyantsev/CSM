<?php
require "db.php";
$data = $_POST;
$showErrors = False;
if(isset($data['signup'])){
    $errors = array();
    $showErrors = True;

    if(trim($data['pro']) == ''){
        $errors[] = 'Укажите имя!';
    }



    if(empty($errors)){
        $promo = R::dispense('promo');
        $promo->pro = $data['pro'];
        R::store($promo);
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
        <form action='/gigig.php' method='post' class='form_1'>
            <p>Регистрация</p>
            <input type="text" name="pro" placeholder="Имя"><br>
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