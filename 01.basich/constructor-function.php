<?php
// Construct Function
// class Fruit {
//     // Properties
//     public $name;
//     public $color;

//     function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     // Methods
//     function get_name(){
//         return $this->name;
//     }
//     function get_color(){
//         return $this->color;
//     }
// }

// $apple = new Fruit("Apple", "Red");
// echo $apple->get_name();
// echo "\n";
// echo $apple->get_color();

// Construct Function
// class MyClass {
//     public $name;
//     public $age;

//     public function __construct($name, $age){
//         $this->name = $name;
//         $this->age = $age;

//         echo "My Name is {$this->name} and I am {$this->age} years old";
//     }

// }
// $object = new MyClass("Jahidul Islam", 22);

// Construct Function
// class MyClass {
//     public $name;
//     public $age;

//     // constructor
//     public function __construct($name, $age){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     // method 
//     public function get(){
//         echo "My Name is {$this->name} and I am {$this->age} years old";
//     }
// }

// $object = new MyClass("Jahidul Islam", 26);
// $object->get();

// Construct Function 
// class user{
//     public $name;
//     public $address;
//     public $phone;

//     function __construct($n = "No Name", $a = "No Address", $p = "No Phone"){
//         $this->name = $n;
//         $this->address = $a;
//         $this->phone = $p;
//     }

//     function show_user_info(){
//         echo "User Name: {$this->name} \n";
//         echo "User Address: {$this->address} \n";
//         echo "User Phone: {$this->phone} \n";
//     }
// }

// $customar_list = new user("Jahidul Islam", "Dhaka", "01711111111");
// $customar_list->show_user_info();


class student_list{
    public $name;
    public $address;
    public $admitid;

    function __construct($n = "No Name", $a = "No Address", $ad = "No Admit Card Id"){
        $this->name = $n;
        $this->address = $a;
        $this->admitid = $ad;
    }

    function show_student_info(){
        echo "Student Name: {$this->name} \n";
        echo "Student Address: {$this->address} \n";
        echo "Student Admit Card Id: {$this->admitid} \n";
    }
}

$student_info = new student_list("Jahidul Islam", "Dhaka", "123456");
$student_info->show_student_info();