<?php

///////////////////////////////////////////////// perviy primer
session_start();

// eger yoxdursa (eger login olmamisizsa)
// esli ne zawel tak napiwet,esli zawlo to nicelo ne nujno teba privetstvuet vxod
if(!isset($_SESSION["logined"])){
    echo "siz login olmamisiz";
}else{
    echo "Welcome" . $a;
}


//////////////////////////////////////////////////////
/////////////////

// if(!isset($_SESSION["logined"])){
//     echo "siz login olmamisiz";
// }else{
//     echo "Welcome" . $a;
// }

// .......////////////////////////////////////////

// $A = $_POST["fname"];
// $B = $_POST["lname"];

// echo "Welcome " . $A ." ". $B;













?>