<?php
$data = $_POST;
$showErrors = False;

if(isset($data['sent'])){
    $errors = array();
    $showErrors = True;

    if(trim($data['comment']) == ''){
        $errors[] = 'Введите комментарий!';
    }
}


?>