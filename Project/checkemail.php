<?php

    require "controllers/deliverymanController.php";
    $email=$_GET["email"];
    $check=checkEmail($email);
    if($check){
        echo "true";
    }else echo "false";

?>