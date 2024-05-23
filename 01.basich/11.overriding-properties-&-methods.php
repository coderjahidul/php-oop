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

class base {
    public function calc($a, $b){
        return $a * $b;
    }
}

class derive extends base {
    public function calc($a, $b){
        return $a + $b;
    }
}

$test = new derive();
echo $test->calc(30, 10);
