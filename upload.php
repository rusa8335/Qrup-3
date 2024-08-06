<?php


$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["photo"]["name"]);

if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)){
    echo "File" . basename($_FILES["photo"]["name"]) . "succes.";
}else{
    echo "Error";
}

















?>