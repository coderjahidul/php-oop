<?php
// Static Properties
// class base {
//     public static $name = "Parent Class";
// }
// echo base::$name;

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
        return parent::$value;
    }
}

// echo derived::staticValue();
$test = new derived();
echo $test->staticValue();
