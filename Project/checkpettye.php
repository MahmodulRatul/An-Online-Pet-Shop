<?php

    require "controllers/pettypeController.php";
    $ptname=$_GET["ptname"];
    $check=checkPetType($ptname);
    if($check){
        echo "true";
    }else echo "false";

?>