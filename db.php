<?php
require "libs/rb.php";

R::setup('mysql:host=localhost;dbname=csm', 'root', ''); 

function showError($error){
    return array_shift($error);
}

?>