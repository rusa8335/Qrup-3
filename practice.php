<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// class Person{

//     public $name = "mustafa";



//     public function test(){
//     echo "salam test";
// }
// /////construct всегда будет сверху выходить всего на экране
//     public function __construct(){
//         echo "Sagol <br>";
//     }

//     public function __destruct(){
//         echo "bitdi<br>";
//     }
// }


// $person = new Person;
// $person->test();

// ///////////////////////////////////

// class Person{

//     public $name;



//     public function __construct($name, $surname){
//         $this->name = $name;
//         $this->surname = $surname;
//     }

// }


// $person = new Person ("Ruslan " ,"Popov");

// echo $person->name;
// echo $person->surname;

// ////////////////////////////////////////



// class TV{

//     public $ekran;


//     public function __construct($ekran){
//         $this->ekran = $ekran;
//     }
//     }

// $ekran = new TV ("Ekran On <br>");

// echo $ekran->name;
// echo $person->surname;




// /////////////////////////////////////////
// class Percent{

//     public $num1;
//     public $num2;

//     public function __construct(){

//     }
  

    
//     public function sum(){
//         return $this->num1*$this->num2;

//     }
//     public function sum2(){
//         return 2*( $this->num1+$this->num2);
 
//     }

// }
// $percent = new Percent;

// $percent->num1 = 5;
// $percent->num2 = 1;
// echo $percent->sum() . "<br>";
// echo $percent->sum2();


// ///////////////////////////////////

// class Duzbucaq{
//     public $sahe;
//     public $uzunluq;
//     public function __construct($x,$y){
//         $this-> sahe = $x * $y;
//         $this-> perimetr = 2*($x + $y);
//     }


//     public function sahe(){
//         return $this->sahe;
//     }

//     public function perimetr(){
//         return $this->perimetr;
//     }

// }


// $Duzbucaq = new Duzbucaq(6,7);
// echo $Duzbucaq->sahe() . "<br>";
// echo $Duzbucaq->perimetr() . "<br>";


// /////////////////////////////////////



// class Car{
//     public $color = $x;
//     public $model = $y;
//     public $year = $z;


//     public function __construct($x,$y,$z){
//         $this->color . $this->model . $this->year;

//     }

// }


// $Car = new Car ($x,$y,$z);


// 31.07.2024 
// Birinci task

// class Year{
    
//     const NAME = "February";

//     static function getName(){
//     echo self::NAME;
// }

// }

// Year::getName();


/*

trait PC{
    
    public $SSD = "Kingston";
    public $HDD = "Nova";

    public function A(){
        echo "SSD";
        // $this->SSD = $SSD;
    }


    public function B(){
        echo "HDD";

        // $this->HDD = $HDD;
    }


}

class forPc{
    use A,B;
}

$c = new forPc;

$c->A();
$c->B();

*/


/*
//из одного вызываем другой
trait PC{

    public function testA(){
        echo "Salam";
    }

}


class forPC{
    use PC;

}

$forPc = new forPc;
$forPc->testA();

*/


/*
trait Loglama{
    public function log($message){
        echo $message;
    }

}





class User{
    
    use Loglama;

    public $name;


    public function __construct($name){
        $this->name = $name;
        $this->log("$this->name)adli istifadeci ");
    }

}


// $a = new User;
// $a->log();


$user = new User ("Ruslan ");
echo "<br>"
$user->log($name);

*/


/*
abstract class Person{
    abstract public function fin();


    public function email(){
        
    }
}



class Me extends Person{

    public function fin(){
        echo "4S332DH";
    }
}


$person = new Person();
$person->fin();

*/


/*
abstract class Animal{


    abstract public function yemek();

    abstract public function ses();

}


class Krokodil extends Animal{

    public function yemek(){
        echo "Krokodil yemek yeyir";
    }
    public function ses(){
        echo "Krokodil ses edir";
    }

}

$krokodil = new Krokodil();
$krokodil->yemek();
echo "<br>";
$krokodil->ses();
echo "<br>";


class Dog extends Animal{
    
    public function yemek(){
        echo "Dog yemek yeyir";
    }
    public function ses(){
        echo "Dog ses edir";
    }

}

$dog = new Dog();
echo "<br>";

$dog->yemek();
echo "<br>";

$dog->ses();


class Cat extends Animal{
    public function yemek(){
        echo "cat yemek yeyir";
    }
    public function ses(){
        echo "cat ses edir";
    }
}

$cat = new Cat();
$cat->yemek();
$cat->ses();

*/
/*

class Person{

    private $name, $age, $phone;

    public function __construct($name, $age, $phone){
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;

    }

    public function giveinform(){
        return "{$this->name} adli istifadeci {$this->age} yasinda {$this->phone} isledir";
    }


    public function __destruct(){
        echo " bu qeder";
    }



}


$person = new Person("Ruslan","30","xiaomi");
echo $person->giveinform();

*/
/*
class Person{

    private $name;
    private $age;
    private $phone;

    public function __construct($name, $age, $phone){
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    
    public function getName(){
        return $this->name;
}
    public function setName($name) {
    return $this->name = $name;
  }


    public function getAge(){
    return $this->age;
}
    public function setAge($age) {
    return $this->age = $age;
}

    public function getPhone(){            //getir
    return $this->phone;
}
    public function setPhone($phone) {  //otururuk
    return $this->phone = $phone;
}

    public function __destruct(){
        echo "Sagol {$this->name}";
    }
}


$mr = new Person("Ruslan", 30, 7777777);
echo $mr->getName()."<br>";
echo $mr->getAge() . "<br>";
echo $mr->getPhone() . "<br>";

$mr->setName("Ramin");
echo $mr->getName();

*/

/*
class Family{
    public $name;
    public $age;
    public $gender;

    public function __construct($name, $gender){
        $this->name = $name;
        $this->gender = $gender;
    }

    public function giveInform(){
        echo "{$this->name},ему скоро 32 года и возможно он станет {$this->gender}";
    }

}

$person = new Family("Фарид", "Петухом");
echo $person->giveInform();
*/
/*
abstract class Animal{


    abstract public function yemek();

    abstract public function ses();

}


class Krokodil extends Animal{

    public function yemek(){
        echo "Krokodil yemek yeyir";
    }
    public function ses(){
        echo "Krokodil ses edir";
    }

}

$krokodil = new Krokodil();
$krokodil->yemek();
echo "<br>";
$krokodil->ses();
echo "<br>";


class Dog extends Animal{
    
    public function yemek(){
        echo "Dog yemek yeyir";
    }
    public function ses(){
        echo "Dog ses edir";
    }

}

$dog = new Dog();
echo "<br>";

$dog->yemek();
echo "<br>";

$dog->ses();
echo "<br>";

class Cat extends Animal{
    public function yemek(){
        echo "cat yemek yeyir";
    }
    public function ses(){
        echo "cat ses edir";
    }
}

$cat = new Cat();
echo "<br>";
$cat->yemek();
echo "<br>";
$cat->ses();
echo "<br>";

*/

















?>

</body>
</html>