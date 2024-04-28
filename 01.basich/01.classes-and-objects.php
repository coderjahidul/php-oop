<?php
// // Explain Classes and Objects in PHP OOP
// class Fruit {
//     // Properties
//     public $name;
//     Public $color;

//     // Methods
//     function set_name($name){
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }
// }

// $apple = new Fruit();
// $apple->set_name('Apple');
// echo $apple->get_name();
// echo "\n";

// $banana = new Fruit();
// $banana->set_name('Banana');
// echo $banana->get_name();
// echo "\n";

// class care {
//     // Properties
//     public $name;
//     public $color;
//     public $modal;

//     // Mathods
//     function set_name($name){
//         $this->name = $name;
//     }
//     function set_color($color){
//         $this->color = $color;
//     }
//     function set_modal($modal){
//         $this->modal = $modal;
//     }

//     function get_name(){
//         return $this->name;
//     }
//     function get_color(){
//         return $this->color;
//     }
//     function get_modal(){
//         return $this->modal;
//     }
// }

// $toyota = new care();
// $toyota->set_name("toyota");
// $toyota->set_color("color");
// $toyota->set_modal("t-584");

// echo $toyota->get_name();
// echo "\n";
// echo $toyota->get_color();
// echo "\n";
// echo $toyota->get_modal();


// Destruct Function
// class Fruit {
//     // Preoperties
//     public $name;
//     public $color;

//     function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }
    
//     function __destruct(){
//         echo "The fruit {$this->name} with color {$this->color} has been destroyed";
//     }
// }

// $apple = new Fruit("Banana", "Yellow");

// Class and Object
class calculation{
    // Properties
    public $a, $b, $c;
    // Method
    function sum(){
        $this->c = $this->a+$this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

// Object
$c1 = new calculation();
$c1->a = 10;
$c1->b = 20;

echo "Sum: " . $c1->sum();
echo "\n";
echo "Sub: " . $c1->sub();


?>