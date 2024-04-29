<?php
// OOP - Inheritance
// 1. Single
// 2. Multilevel
// 3. Multiple
// 4. Hybrid

// Single
// Superclass
// class Animal{
//     public function eat(){
//         echo "Animal is eating \n";
//     }
// }

// Subclass inheriting from Superclass Animal
// class Cat extends Animal{
//     public function meow(){
//         echo "Cat is Meowing \n";
//     }
// }

// Main code
// $cat = new Cat();
// $cat->eat(); // Inherited from Animal
// $cat->meow();


// Multilevel 
// Superclass
// class Animal {
//     public function eat(){
//         echo "Animal is eating \n";
//     }
// }
// // Subclass inheriting from Animal
// class Dog extends Animal {
//     public function bark(){
//         echo "Dog is barking \n";
//     }
// }

// // Subclass inheriting from Dog
// class Cat extends Dog {
//     public function meow(){
//         echo "Cat is Meowing \n";
//     }
// }

// // Main code
// $cat = new Cat();
// $cat->eat();  // Inherited from Animal
// $cat->bark(); // Inherited from Dog
// $cat->meow();


// class Fruit{
//     public $name;
//     public $color;
//     public function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro(){
//         echo "The fruit is {$this->name} and the color is {$this->color}. \n";
//     }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit{
//     public function message(){
//         echo  "Am I a fruit or a berry? \n";
//     }
// }

// // Mango is inherited from Strawberry
// class Mango extends Strawberry {
//     public function weight(){
//         echo "I am 100 grams. \n";
//     }
// }

// // Objects the Strawberry
// $strawberry = new Strawberry("Strawberry", "Red");
// $strawberry->message();
// $strawberry->intro();

// // Objects the Mango
// $mango = new Mango("Mango", "Yellow");
// $mango->message();
// $mango->intro();
// $mango->weight();


// inherited from student class
// class Student{
//     public $name;
//     public $age;

//     public function __construct($n = "Name Not Defined", $a = "Age Not Defined"){
//         $this->name = $n;
//         $this->age = $a;
//     }

//     public function __destruct(){
//         echo "The students name is: {$this->name} and age is: {$this->age}. \n";
//     }
// }

// // inherited from student class
// class Teacher extends Student{
//     public $subject;
//     public function __construct($n = "Name Not Defined", $a = "Age Not Defined", $s = "Subject Not Defined"){
//         parent::__construct($n, $a);
//         $this->subject = $s;
//     }

//     public function __destruct(){
//         echo "The students name is: {$this->name} and age is: {$this->age} and the subject is: {$this->subject}. \n";
//     }
// }

// // Main Code 
// $student_info = new Student();
// $teacher = new Teacher("Jahidul Islam", "25", "CSE");

// Employee class
// class Employee{
//     public $name;
//     public $age;
//     public $designation;
//     public function __construct($n = "Name Not Defined", $a = "Age Not Defined", $d = "Designation Not Defined"){
//         $this->name = $n;
//         $this->age = $a;
//         $this->designation = $d;
//     }

//     public function __destruct(){
//         echo "The Employee name is: {$this->name} and age is: {$this->age} and designation is: {$this->designation}. \n";
//     }
// }

// // Inherited from Employee
// class programmer extends Employee{
//     public $language;
//     public function __construct($n = "Name Not Defined", $a = "Age Not Defined", $d = "Designation Not Defined", $l = "Language Not Defined"){
//         parent::__construct($n, $a, $d);
//         $this->language = $l;
//     }
//     public function __destruct(){
//         echo "The Employee name is: {$this->name} and age is: {$this->age} and designation is: {$this->designation} and Language is: {$this->language}. \n";
//     }
// }

// $programmer = new programmer("Jahidul Islam", "25", "Programmer", "PHP");
// $employee = new Employee("Nasir Uddin", "25", "Digital Marketer");

// User class
// class User{
//     public $name;
//     public $email;
//     public $username;

//     public function __construct($n = "Name Not Defined", $e = "Email Not Defined", $u = "Username Not Defined"){
//         $this->name = $n;
//         $this->email = $e;
//         $this->username = $u;
//     }
//     public function __destruct(){
//         echo "The User name is: {$this->name} and email is: {$this->email} and username is: {$this->username}. \n";
//     }
// }

// // Inherited from User 
// class Admin extends User{
//     public $role;

//     public function __construct($n = "Name Not Defined", $e = "Email Not Defined", $u = "Username Not Defined", $r = "Role Not Defined"){
//         parent::__construct($n, $e, $u);
//         $this->role = $r;
//     }

//     public function __destruct(){
//         echo "The User name is: {$this->name} and email is: {$this->email} and username is: {$this->username} and role is: {$this->role}. \n";
//     }
// }

// $admin_info = new Admin("Jahidul Islam Sabuz", "sobuz0349@gmail.com", "jahidislam587", "Admin");
// $user_info = new User("Nassim Uddin Emon", "nassim@gmail.com", "nassim587");


// Customar class
class Customar{
    public $name;
    public $phone;
    Public $email;

    public function __construct($n = "Name Not Defined", $p = "Phone Not Defined", $e = "Email Not Defined"){
        $this->name = $n;
        $this->phone = $p;
        $this->email = $e;
    }

    public function __destruct(){
        echo "The Customar name is: {$this->name} and Phone Number is: {$this->phone} and Email is: {$this->email}. \n";
    }
}

// Inherited from User
class User extends Customar{
    public $username;
    public $role;

    public function __construct($n = "Name Not Defined", $p = "Phone Not Defined", $e = "Email Not Defined", $u = "Username Not Defined", $r = "Role Not Defined"){
        parent::__Construct($n, $p, $e);
        $this->username = $u;
        $this->role = $r;
    }

    public function __destruct(){
        echo "The User name is: {$this->name} and Phone Number is: {$this->phone} and Email is: {$this->email} and username is: {$this->username} and role is: {$this->role}. \n";
    }
}

$customar = new Customar("Nasir Uddin Emon", "01711111111", "nassim@gmail");
$user = new User("Nasir Uddin Emon", "01711111111", "nassim@gmail", "nassim587", "User");
