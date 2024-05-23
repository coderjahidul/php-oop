<?php
// Static Properties
// class base {
//     public static $name = "Parent Class";
// }
// echo base::$name;

<<<<<<< HEAD
// class ip {
//     public static $value = "127.0.0.1";
// }

// // get static property
// echo ip::$value;

// class ip {
//     public static $value = 3.14549;
//     public function staticValue(){
//         return self::$value;
//     }
// }
// $pi = new ip();
// echo $pi->staticValue();

class pi {
    public static $value = 3.14549;
}

class x extends pi {
    public function staticValue(){
=======
// Static Properties self keyword
// class base {
//     public static $value = "52158";
//     public static function staticValue(){
//         return self::$value;
//     }
// }

// // echo base::staticValue();
// $test = new base();
// echo $test->staticValue();

// Static Properties parent keyword
class base {
    public static $value = "52158";
}

class derived extends base {
    public static function staticValue(){
>>>>>>> ed599698033b4298526d7959b68109252302c741
        return parent::$value;
    }
}

<<<<<<< HEAD
echo x::$value;
echo "\n";
$x = new x();
echo $x->staticValue(); 
=======
// echo derived::staticValue();
$test = new derived();
echo $test->staticValue();
>>>>>>> ed599698033b4298526d7959b68109252302c741
