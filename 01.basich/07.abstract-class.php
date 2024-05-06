<?php
// OOP - Abstract Class

// abstract class ParentClass {
//     abstract public function someMethod1();
//     abstract public function someMethod2($name, $color);
//     abstract public function someMethod3();
//     public function someMethod4(){
//         echo "Some Method 4 \n";
//     }
// }

// abstract class parentClass{
//     public $name;

//     abstract protected function calc($a, $b);
// }

// class ChildClass extends parentClass{
//     public function calc($c, $d){
//         echo $c + $d;
//     }
// }

// $obj = new ChildClass();
// $obj->calc(10, 20);

// Note - Abstract Class can not be instantiated. And Abstract Class can not be inherited. 

// abstract class A {
//     public $name;
//     abstract protected function calc($a, $b);
// }
// class B extends A {
//     public function calc($a, $b){
//         echo $a + $b;
//     }
// }
// $obj = new B();
// $obj->calc(50, 10);

// // Parent Class
// abstract class A {
//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// }

// // Child Classes
// class B extends A {
//     public function intro() : string{
//         return "Choose German Quality! I'm an $this->name!";
//     }
// }
// $obj = new B("German");
// echo $obj->intro();

// // Parent Class
// abstract class Car {
//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// }

// // Child Classed
// class Audi extends Car {
//     public function intro() : string {
//         return "Choose German Quality! I'm an $this->name! \n";
//     }
// }
// class BMW extends Car {
//     public function intro() : string {
//         return "Choose Chinese Quality! I'm an $this->name! \n";
//     }
// }

// class Mercedes extends Car {
//     public function intro() : string {
//         return "Choose Bangladeshi Quality! I'm an $this->name! \n";
//     }
// }
// // Main Code
// $obj = new Audi("Audi");
// echo $obj->intro();

// $obj = new BMW("BMW");
// echo $obj->intro();

// $obj = new Mercedes("Mercedes");
// echo $obj->intro();

// parent Class
// abstract class Car {
//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// }

// // child Classes
// class Honda extends Car {
//     public function intro() : string {
//         return "Choose German Quality! I'm an $this->name! \n";
//     }
// }

// $obj = new Honda("Honda");
// echo $obj->intro();

// Pareant Class
// abstract class Car {
//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// }

// class Audi extends Car {
//     public function intro() : string {
//         return "Choose Bangladeshi Quality! I'm an $this->name! \n";
//     }
// }

// $obj = new Audi("Audi");
// echo $obj->intro();
