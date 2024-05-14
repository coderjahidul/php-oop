<?php
// Explain Static Methods
// class ClassName {
//     public static function staticMethod(){
//         echo "Hello World \n";
//     }
// }

// // access static method
// ClassName::staticMethod();

// // Explain Static Methods
// class MyClass {
//     public static function myStaticMethod(){
//         echo "This is my First Static Method \n";
//     }
// }
// MyClass::myStaticMethod();

// Explain Static Methods
// class greeting {
//     public static function welcome(){
//         echo "This is my Greeting Static Method \n";
//     }
// }
// greeting::welcome();
// greeting::welcome();

// A class can have both static and non-static methods. A static method can be accessed from a method in this same class using the self keyword and double colons(::).

// class greeting {
//     public static function welcome(){
//         echo "This is my Greeting Static Method \n";
//     }

//     public function hello(){
//         self::welcome();
//     }
// }

// $obj = new greeting();
// $obj->hello();

// class greeting2 {
//     public static function welcome(){
//         echo "This is my Greeting2 Static Method. \n";
//     }

//     public function __construct(){
//         self::welcome();
//     }
// }
// $obj1 = new greeting2();

// class A {
//     public static function hello(){
//         echo "Hello jahidul islam \n";
//     }
// }

// class B {
//     public function message(){
//         A::hello();
//     }
// }
// // Call the static method A::hello()
// // A::hello(); 

// // Call the non static method B
// $obj = new B();
// $obj->message();

// class C {
//     public static function bay(){
//         echo "Bay Bay jahidul islam \n";
//     }
// }

// class D {
//     public function __construct(){
//         C::bay();
//     }
// }

// $boj = new D();

// Explain Static Methods
class domain {
    protected static function getWebsiteName(){
        return "https://grocoder.com \n";
    }
}
class domainGro extends domain {
    public $websiteName;
    public function __construct(){
        $this->websiteName = parent::getWebsiteName();
    }
}

$obj = new domainGro();
echo $obj->websiteName;

class A {
    protected static function hello(){
        echo "Hello jahidul islam \n";
    }
}
class B extends A {
    public function __construct(){
        parent::hello();
    }
}
// call class B non static method
$obj = new B();

