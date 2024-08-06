<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- 
<form action="upload.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="photo">
    <button type="submit">Gonder</button>

</form> -->




<?php


// echo "Today is " . date("Y/m/d") . "<br>";


class Percent{
    public $name ="Ruslan";

    public $surname ="Popov";

    public function contact(){
        return $this->name. " " . $this->surname;
    }
 
    
    public $num1;
    public $num2;
    public function sum(){
        return $this->num1+$this->num2;
    }


}

$percent = new Percent;

// echo $percent->contact() . "<br>";


$percent->num1 = 5;
$percent->num2 = 1;
echo $percent->sum();








?>



















</body>
</html>