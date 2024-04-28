<?php
// Destruct Function

// class Fruit{
//     public $name;
//     public $color;

//     public function __construct($name = "Name Not Defined", $color = "Color Not Defined"){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     public function __destruct(){
//         echo "The fruit {$this->name} with color {$this->color} has been destroyed \n";
//     }
// }

// $apple = new Fruit("Apple", "Red");
// $apple1 = new Fruit("Apple", "Green");
// $apple2 = new Fruit("Apple", "Yellow");
// $apple3 = new Fruit("Apple", "Blue");
// $apple4 = new Fruit("Apple", "Black");
// $apple5 = new Fruit("Apple", "White");


// Destruct Function
// class user{
//     public $name;
//     public $address;
//     public $phone;
//     public $userid;

//     public function __construct($n = "Name Not Defined", $a = "Address Not Defined", $p = "Phone Not Defined", $u = "User Id Not Defined"){
//         $this->name = $n;
//         $this->address = $a;
//         $this->phone = $p;
//         $this->userid = $u;
//     }

//     public function __destruct(){
//         echo "User Name: {$this->name} \n";
//         echo "User Address: {$this->address} \n";
//         echo "User Phone: {$this->phone} \n";
//         echo "User Id: {$this->userid} \n";
//     }
// }

// $user = new user("Jahidul Islam", "Dhaka", "01711111111", "jahidul782");
// $user_list = new user("Nassim Uddin Emon", "Dhaka", "0172222222", "nassim783");


// Destruct Function
// class student{
//     public $name;
//     public $address;
//     public $admitid;
//     public $roll;
//     public $class;
//     public $section;

//     public function __construct($n = "Name Not Defined", $a = "Address Not Defined", $ad = "Admit Card Id Not Defined", $r = "Roll Not Defined", $c = "Class Not Defined", $s = "Section Not Defined"){
//         $this->name = $n;
//         $this->address = $a;
//         $this->admitid = $ad;
//         $this->roll = $r;
//         $this->class = $c;
//         $this->section = $s;
//     }

//     public function __destruct(){
//         echo "Student Name: {$this->name} \n";
//         echo "Student Address: {$this->address} \n";
//         echo "Student Admit Card Id: {$this->admitid} \n";
//         echo "Student Roll: {$this->roll} \n";
//         echo "Student Class: {$this->class} \n";
//         echo "Student Section: {$this->section} \n \n";
//     }
// }

// $student_list = new student("Jahidul Islam", "Dhaka", 123456, 123, 10, "A");
// $student_list1 = new student("Nassim Uddin Emon", "Dhaka", 123457, 124, 10, "A");
// $student_list2 = new student("Nasir Uddin Rashad", "Dhaka", 123458, 125, 10, "A");
// $student_list3 = new student("Momtain Ahamad Rifat", "Dhaka", 123459, 126, 10, "A");
// $student_list4 = new student("Shagat Hossin", "Dhaka", 123460, 127, 10, "A");
// $student_list5 = new student();


class employee{
    public $name;
    public $address;
    public $age;
    public $userid;
    public $designation;
    public $phone;
    public $email;

    public function __construct($n = "Name Not Found", $ad = "Address Not Found", $a = "Age Not Found", $u = "User Id Not Found", $d = "Designation Not Found", $p = "Phone Numberr Not Found", $e = "Email Address Not Found"){
        $this->name = $n;
        $this->address = $ad;
        $this->age = $a;
        $this->userid = $u;
        $this->designation = $d;
        $this->phone = $p;
        $this->email = $e;
    }

    public function __destruct(){
        echo "Employee Name: {$this->name} \n";
        echo "Employee Address: {$this->address} \n";
        echo "Employee Age: {$this->age} \n";
        echo "Employee User Id: {$this->userid} \n";
        echo "Employee Designation: {$this->designation} \n";
        echo "Employee Phone Number: {$this->phone} \n";
        echo "Employee Email Address: {$this->email} \n";
    }
}

$employee_list = new employee("Jahidul Islam", "Dhaka", 23, "jahidul782", "Web Developer", "01711111111", "JahidulIslam.com");


