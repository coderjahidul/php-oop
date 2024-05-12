<?php 

// Traits are used to share code between multiple classes.
// trait Mytrait {
    
// }

// class MyClass {
//     use Mytrait;
// }

// Explain Traits
// trait Mytrait {
//     public function msg1(){
//         echo "OOP is awesome \n";
//     }
// }

// class Welcome {
//     use Mytrait;
// }
// $obj = new Welcome();
// $obj->msg1();

// trait Mytrait {
//     public function message1(){
//         echo "OOP is awesome. I'm vary happy.\n";
//     }
// }
// class Welcome {
//     use Mytrait;
// }
// $obj = new Welcome();
// $obj->message1();

// trait message1 {
//     public function msg1(){
//         echo "OOP is awesome. I'm vary happy.\n";
//     }
// }
// trait message2 {
//     public function msg2(){
//         echo "OOP reduces code duplication. \n";
//     }
// }

// class Welcome {
//     use message1;
// }
// class Welcome2 {
//     use message1, message2;
// }

// $obj = new Welcome();
// $obj->msg1();
// echo "\n";
// $obj2 = new Welcome2();
// $obj2->msg1();
// $obj2->msg2();

// Define a trait
trait Logging {
    public function log($message){
        echo '[' . date('Y-m-d H:i:s') . '] - ' . $message . PHP_EOL;
    }
}

// Define a class that uses the trait
class User {
    use Logging;
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

$user = new User('John');
$user->log('User created: ' . $user->getName());