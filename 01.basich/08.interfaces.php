<?php
// interface parent1 {
//     function calc($a, $b);
// }
// interface parent2 {
//     function sub($c, $d);
// }

// class childClass implements parent1, parent2 {
//     public function calc($a, $b){
//         echo $a + $b;
//     }
//     public function sub($c, $d){
//         echo $c - $d;
//     }
// }

// $test = new childClass();
// $test->calc(35, 25);
// echo "\n";
// $test->sub(35, 25);

// Interface Definition / Interface Declaration (Interface)
// interface calc1{
//     function sum($a, $b);
// }
// interface calc2{
//     function sub($c, $d);
// }
// interface calc3{
//     function mul($e, $f);
// }
// interface calc4{
//     function div($g, $h);
// }

// Class Implementation (Implementation) / Class Declaration
// class childClass implements calc1, calc2, calc3, calc4 {
//     public function sum($a, $b){
//         echo $a + $b;
//     }
//     public function sub($c, $d){
//         echo $c - $d;
//     }
//     public function mul($e, $f){
//         echo $e * $f;
//     }
//     public function div($g, $h){
//         echo $g / $h;
//     }
// }

// Object Creation
// $test = new childClass();
// $test->sum(10,15);
// echo "\n";
// $test->sub(35, 27);
// echo "\n";
// $test->mul(3, 31);
// echo "\n";
// $test->div(100, 5);


// Interface definition
// interface Animal {
//     public function makeSound();
// }

// // Class defintions
// class Cat implements Animal {
//     public function makeSound(){
//         echo "Meow \n";
//     }
// }

// class Dog implements Animal {
//     public function makeSound(){
//         echo "Bark \n";
//     }
// }

// class Mouse implements Animal {
//     public function makeSound(){
//         echo "Squeak \n";
//     }
// }

// // Create a list of animals
// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();
// $animals = array($cat, $dog, $mouse);

// // Tell the animals to make a sound
// foreach($animals as $animal){
//     $animal->makeSound();
// }

// // Interface Definition
// interface Animal {
//     public function makeSound();
// }

// // Class definitions
// class Cat implements Animal {
//     public function makeSound(){
//         echo "Meow \n";
//     }
// }
// class Dog implements Animal {
//     public function makeSound(){
//         echo "Bark \n";
//     }
// }
// class Mouse implements Animal {
//     public function makeSound(){
//         echo "Squeak \n";
//     }
// }

// // Create a list of animals
// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();
// $animals = array($cat, $dog, $mouse);
// foreach($animals as $animal){
//     $animal->makeSound();
// }

// interface Animal {
//     public function makeSound();
// }

// class Cat implements Animal {
//     public function makeSound(){
//         echo "Meow";
//     }
// }

// $animal = new Cat();
// $animal->makeSound();

interface calc1 {
    function sum($a, $b);
}
interface calc2 {
    function sub($c, $d);
}
interface calc3 {
    function mult($e, $f);
}
interface calc4 {
    function div($g, $h);
}

class childClass implements calc1, calc2, calc3, calc4 {
    public function sum($a, $b){
        echo $a + $b;
    }
    public function sub($c, $d){
        echo $c, $d;
    }
    public function mult($e, $f){
        echo $e * $f;
    }
    public function div($g, $h){
        echo $g / $h;
    }
}

$childclass = new childClass();
$childclass->sum(58, 29);
echo "\n";
$childclass->sub(87, 2);
echo "\n";
$childclass->mult(85, 3);
echo "\n";
$childclass->div(150, 5);
