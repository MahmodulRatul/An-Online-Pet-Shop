<?php

    require "controllers/typeController.php";
    $tname=$_GET["tname"];
    $check=checkType($tname);
    if($check){
        echo "true";
    }else echo "false";

?>