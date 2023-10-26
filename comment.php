<?php
require "db.php";
$data = $_POST;
$showErrors = False;

if(isset($data['sent'])){
    $errors = array();
    $showErrors = True;

    if(trim($data['comment']) == ''){
        $errors[] = 'Введите комментарий!';
    }
    if(empty($errors)){
        $coment = R::dispense('coment');
        $coment->comment = $data['comment'];
        R::store($coment);
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
    <div>
        <form action='/comment.php' method='post' class='form_1'>
            <input type="text" name="comment" placeholder="Коммент"><br>
            <button type="submit" name="sent" id='btn'>Отправить<button>
        </form>
    </div>
    <p><?php if($showErrors) {echo showErrors($errors);}?></p>
</body>
</html>