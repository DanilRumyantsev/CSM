<?php
require "libs/rb.php";

R::setup('mysql:host=localhost;dbname=csm', 'root', ''); 
session_start();
function showErrors($errors){
    return array_shift($errors);
}

?>