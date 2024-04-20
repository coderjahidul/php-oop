<?php
// Construct Function
// class Fruit {
//     // Properties
//     public $name;
//     public $color;

//     function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     // Methods
//     function get_name(){
//         return $this->name;
//     }
//     function get_color(){
//         return $this->color;
//     }
// }

// $apple = new Fruit("Apple", "Red");
// echo $apple->get_name();
// echo "\n";
// echo $apple->get_color();

// Construct Function
// class MyClass {
//     public $name;
//     public $age;

//     public function __construct($name, $age){
//         $this->name = $name;
//         $this->age = $age;

//         echo "My Name is {$this->name} and I am {$this->age} years old";
//     }

// }
// $object = new MyClass("Jahidul Islam", 22);

// Construct Function
class MyClass {
    public $name;
    public $age;

    // constructor
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    // method 
    public function get(){
        echo "My Name is {$this->name} and I am {$this->age} years old";
    }
}

$object = new MyClass("Jahidul Islam", 26);
$object->get();