<?php
// Static Properties
// class base {
//     public static $name = "Parent Class";
// }
// echo base::$name;

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
        return parent::$value;
    }
}

echo x::$value;
echo "\n";
$x = new x();
echo $x->staticValue(); 