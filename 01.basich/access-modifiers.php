<?php 
// Public, Protected, Private
// 1. Public - Can be accessed from anywhere.
// 2. Protected - Can be accessed from within the class or Derived class. Not from accessed from outside the class.
// 3. Private - Can be accessed within the class. Not from outside the class or Derived class.

// Access Modifiers
// class Fruit {
//     // Properties
//     public $name;
//     protected $color;
//     private $weight;
// }

// $mango = new Fruit();
// $mango->set_name("Mango");
// echo $mango->get_name();
// echo "\n";
// $mango->set_color("Yellow");
// echo $mango->get_color();
// echo "\n";
// $mango->set_weight("300");
// echo $mango->get_weight();

// Public Function
// class user{
//     public $name;

//     public function __construct($n = "Name Not Defined"){
//         $this->name = $n;
//     }
//     public function show(){
//         echo "User Name: {$this->name} \n";
//     }
// }

// $user_one = new user("Jahidul Islam");
// $user_one->name = "Nasim Uddin Emon";
// $user_one->show();

// Public Function
// class student{
//     public $name;

//     public function __construct($n = "Name Not Defined"){
//         $this->name = $n;
//     }
//     public function show(){
//         echo "Student Name: {$this->name} \n";
//     }
// }

// $student_one = new student("Jahidul Islam");
// $student_one->name = "Nasim Uddin Emon";
// $student_one->show();

// Protected Function
// class user{
//     protected $name;

//     public function __construct($n = "Name Not Defined"){
//         $this->name = $n;
//     }
//     public function show(){
//         echo "User Name: {$this->name} \n";
//     }
// }

// $user_one = new user("Jahidul Islam");
// $user_one->show();

// Protected Function
// class student{
//     protected $name;

//     public function __construct($n = "Name Not Defined"){
//         $this->name = $n;
//     }
//     protected function show(){
//         echo "Student Name: {$this->name} \n";
//     }
// }

// class derived extends student{
//     public function get(){
//         echo "Student Name: {$this->name} \n";
//     }
// }

// $student_one = new student("Jahidul Islam");
//$student_one->name = "Nasim Uddin Emon"; // Error (Protected)
// $student_one->show();

// $student_one = new derived("Jahidul Islam");
// $student_one->get();

// Protected Function
class user {
    protected $name;

    public function __construct($name = "Name Not Defined") {
        $this->name = $name;
    }

    protected function show(){
        echo "User Name: {$this->name} \n";
    }
}

class derived extends user {
    public function get(){
        echo "User Name: {$this->name} \n";
    }
}

$user_list = new derived("Nasim Uddin Emon");
$user_list->get();