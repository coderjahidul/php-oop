<?php
// Overriding properties
// class basic {
//     public $name = "Parent Class";
// }
// class derived extends basic {
//     public $name = "Child Class";
// }

// $test = new derived();
// echo $test->name;

// Overriding Methods
// class base {
//     public function calc($a, $b){
//         return $a * $b;
//     }
// }

// class derived extends base {
//     public function calc($a, $b){
//         return $a + $b;
//     }
// }

// $test = new base();
// echo $test->calc(30, 20);
// echo "\n";
// $one = new derived();
// echo $one->calc(20, 50);

// Overriding Static Methods
// class base {
//     public static function calc($a, $b){
//         return $a * $b;
//     }
// }

// class derived extends base {
//     public static function calc($a, $b){
//         return $a + $b;
//     }
// }

// echo base::calc(30, 20);
// echo "\n";
// echo derived::calc(20, 50);

// Overriding abstract methods
// abstract class base {
//     abstract public function calc($a, $b);
// }
// class derived extends base {
//     public function calc($a, $b){
//         return $a + $b;
//     }
// }

// $test = new derived();
// echo $test->calc(30, 20);

// Overriding abstract properties
// abstract class base {
//     abstract public function name($a, $b);
// }
// class derived extends base {
//     public function name($a, $b){
//         return $a + $b;
//     }
// }

// $test = new derived();
// echo $test->name(30, 20);