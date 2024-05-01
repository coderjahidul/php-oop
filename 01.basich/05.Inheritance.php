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
// class Customar{
//     public $name;
//     public $phone;
//     Public $email;

//     public function __construct($n = "Name Not Defined", $p = "Phone Not Defined", $e = "Email Not Defined"){
//         $this->name = $n;
//         $this->phone = $p;
//         $this->email = $e;
//     }

//     public function __destruct(){
//         echo "The Customar name is: {$this->name} and Phone Number is: {$this->phone} and Email is: {$this->email}. \n";
//     }
// }

// Inherited from User
// class User extends Customar{
//     public $username;
//     public $role;

//     public function __construct($n = "Name Not Defined", $p = "Phone Not Defined", $e = "Email Not Defined", $u = "Username Not Defined", $r = "Role Not Defined"){
//         parent::__Construct($n, $p, $e);
//         $this->username = $u;
//         $this->role = $r;
//     }

//     public function __destruct(){
//         echo "The User name is: {$this->name} and Phone Number is: {$this->phone} and Email is: {$this->email} and username is: {$this->username} and role is: {$this->role}. \n";
//     }
// }

// $customar = new Customar("Nasir Uddin Emon", "01711111111", "nassim@gmail");
// $user = new User("Nasir Uddin Emon", "01711111111", "nassim@gmail", "nassim587", "User");


// PHP Inheritance and the protected Access Modifier
// class Fruit {
//     public $name;
//     public $color;

//     public function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function intro(){
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// // Inherit Fruit class
// class Strawberry extends Fruit{
//     public function message(){
//         echo "Am I a fruit or a berry? \n";
//         $this->intro();
//     }
// }

// $strawberry = new Strawberry("Strawberry", "Red");
// $strawberry->message();

// Customar Class
// class Customar{
//     public $name;
//     public $age;
//     public $username;
//     public $email;

//     public function __construct($n = "Name Not Define", $a = "Age Not Define", $u = "Username Not Define", $e = "Email Not Define"){
//         $this->name = $n;
//         $this->age = $a;
//         $this->username = $u;
//         $this->email = $e;
//     }
//     protected function info(){
//         echo "Customar Name: {$this->name} \n";
//         echo "Customar Age: {$this->age} \n";
//         echo "Customar User: {$this->username} \n";
//         echo "Customar Email: {$this->email} \n \n";
//     }
// }

// Inherit Customar class
// class User extends Customar{
//     public function __destruct(){
//         echo "Our Customar Detail: \n";
//         $this->info();
//     }
// }

// $user = new User("Jahidul Islam Sabuz", 26, "jahidul582", "sobuz0349@gmail.com");

// $customar = new User("Nassim Uddin Emon", 22, "emon754", "nassim@gmail.com");

// Studnt Class
// class Student {
//     public $name;
//     public $age;
//     public $roll;
//     public $class;

//     public function __construct($n = "Name Not Define", $a = "Name Not Define", $r = "Roll Not Define", $c = "Class Not Define"){
//         $this->name = $n;
//         $this->age = $a;
//         $this->roll = $r;
//         $this->class = $c;
//     }

//     protected function student_info(){
//         echo "Student Name: {$this->name} \n";
//         echo "Student Age: {$this->age} \n";
//         echo "Student Roll: {$this->roll} \n";
//         echo "Student Class: {$this->class} \n \n";
//     }
// }

// // Inherit Studnet Class
// class Studentlist extends Student{
//     public function __destruct(){
//         echo "Student Details: \n";
//         $this->student_info();
//     }
// }

// $student = new Studentlist("Jahidul Islam Sabuz", 26, 2188, "Six");
// $student = new Studentlist("Nassim Uddin Emon", 25, 2189, "Six");

// Overriding inherited Methods
// class Fruit{
//     public $name;
//     public $color;
//     public function __construct($n = "Name Not Define", $c = "Color Not Define"){
//         $this->name = $n;
//         $this->color = $c;
//     }
//     public function intro(){
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// Inherit Fruit class
// class Strawberry extends Fruit {
//     public $weight;

//     public function __construct($n, $c, $w){
//         $this->name = $n;
//         $this->color = $c;
//         $this->weight = $w;
//     }
//     public function __destruct(){
//         echo "Fruit Detals: \n";
//         echo "Fruit Name: {$this->name} \n";
//         echo "Fruit Color: {$this->color} \n";
//         echo "Fruit Weight: {$this->weight} \n \n";
//     }
// }

// $strawberry = new Strawberry("Strawberry", "Red", "2kg");
// $mango = new Strawberry("Mango", "Yellow", "5kg");

// User Class
// class User {
//     public $name;
//     public $age;
//     public $email;

//     public function __construct($n, $a, $e){
//         $this->name = $n;
//         $this->age = $a;
//         $this->email = $e;
//     }

//     public function __destruct(){
//         echo "User Detail: \n";
//         echo "User Name: {$this->name} \n";
//         echo "User Age: {$this->age} \n";
//         echo "User Email: {$this->email} \n \n";
//     }
// }

// // Inherit User class
// class Customar extends User{
//     public $phone;

//     public function __construct($n, $a, $e, $p){
//         $this->name = $n;
//         $this->age = $a;
//         $this->email = $e;
//         $this->phone = $p;
//     }

//     public function __destruct(){
//         echo "User Detail: \n";
//         echo "User Name: {$this->name} \n";
//         echo "User Age: {$this->age} \n";
//         echo "User Email: {$this->email} \n";
//         echo "User Phone: {$this->phone} \n \n";
//     }
// }

// $customar = new Customar("Jahidul Islam Sabuz", 26, "sobuz0349@gmail.com", "01793700349");


// PHP - Overriding Inherited Methods
// class Student{
//     public $name;
//     public $age;
//     public $roll;
//     public $class;

//     public function __construct($n = "Name Not Define", $a = "Age Not Define", $r = "Roll Not Define", $c = "Class Not Define"){
//         $this->name = $n;
//         $this->age = $a;
//         $this->roll = $r;
//         $this->class = $c;
//     }

//     public function __destruct(){
//         echo "Student Detail: \n";
//         echo "Student Name: {$this->name} \n";
//         echo "Student Age: {$this->age} \n";
//         echo "Student Roll: {$this->roll} \n";
//         echo "Student Class: {$this->class} \n \n";
//     }
// }

// Inherit Student class
// class Studentlist extends Student{
//     public $section;

//     public function __construct($n = "Name Not Define", $a = "Age Not Define", $r = "Roll Not Define", $c = "Class Not Define", $s = "Section Not Define"){
//         $this->name = $n;
//         $this->age = $a;
//         $this->roll = $r;
//         $this->class = $c;
//         $this->section = $s;
//     }

//     public function __destruct(){
//         echo "Student Detail: \n";
//         echo "Student Name: {$this->name} \n";
//         echo "Student Age: {$this->age} \n";
//         echo "Student Roll: {$this->roll} \n";
//         echo "Student Class: {$this->class} \n";
//         echo "Student Section: {$this->section} \n \n";
//     }
// }

// $student_list = new Studentlist( ); 

// class employee{
//     public $name;
//     public $age;
//     public $salary;

//     public function __construct($n = "Name Not Define", $a = "Age Not Define", $s = "Salary Not Define"){
//         $this->name = $n;
//         $this->age = $a;
//         $this->salary = $s;
//     }
//     public function __destruct(){
//         echo "Employee Profiler: \n";
//         echo "Employee Name Is: {$this->name} \n";
//         echo "Employee Age Is: {$this->age} \n";
//         echo "Employee Salary Is: {$this->salary} \n \n";
//     }
// }

// Inherit employee class
// class manager extends employee{
//     public $traveling = 1000;
//     public $phone = 300;
//     public $totalSalary;
//     public function __destruct(){
//         $this->totalSalary = $this->salary + $this->traveling + $this->phone;
//         echo "Manager Profile: \n";
//         echo "Manager Name: {$this->name} \n";
//         echo "Manager Age: {$this->age} \n";
//         echo "Manager Salary: {$this->totalSalary} \n \n";
//     }
// }

// $e1 = new employee("Nassim Uddin Emon", 24, 15000);
// $e2 = new manager("Jahidul Islam Sabuz", 26, 20000);

// Inheritance class
// class employee{
//     public $name;
//     public $age;
//     public $salary;

//     public function __construct($n, $a, $s){
//         $this->name = $n;
//         $this->age = $a;
//         $this->salary = $s;
//     }

//     public function __destruct(){
//         echo "Employee Profile: \n";
//         echo "Employee Name: {$this->name} \n";
//         echo "Employee Age: {$this->age} \n";
//         echo "Employee Salary: {$this->salary} \n \n";
//     }
// }

// class manager extends employee{
//     public $traveling = 1000;
//     public $phone = 500;
//     public $totalSalary;

//     public function __destruct(){
//         $this->totalSalary = $this->salary + $this->traveling + $this->phone;
//         echo "Manager Profile: \n";
//         echo "Manager Name: {$this->name} \n";
//         echo "Manager Age: {$this->age} \n";
//         echo "Manager Salary: {$this->totalSalary} \n \n";
//     }
// }

// Inherit Manager class
// class programmar extends manager{
//     public $helth = 2500;
//     public $home = 5000;
//     public $totalSalary;

//     public function __destruct(){
//         $this->totalSalary = $this->salary + $this->traveling + $this->phone + $this->helth + $this->home;
//         echo "Programmar Profile \n";
//         echo "Programmar Name {$this->name} \n";
//         echo "Programmar Age {$this->age} \n";
//         echo "Programmar Salary {$this->totalSalary} \n \n";
//     }
// }


// $e1 = new employee("Nassim Uddin Emon", 24, 15000);
// $e2 = new manager("Tanvire Ahmed", 27, 15000);
// $e3 = new programmar("Jahidul Islam", 26, 15000);

// Teachar class
class teachar{
    public $name;
    public $designation;
    public $salary;

    public function __construct($n, $d, $s){
        $this->name = $n;
        $this->designation = $d;
        $this->salary = $s;
    }

    public function __destruct(){
        echo "Teachar Profile: \n";
        echo "Teachar Name: {$this->name} \n";
        echo "Teachar Designation: {$this->designation} \n";
        echo "Teacher Salary: {$this->salary} \n \n";
    }
}

// Inherit Teachar
class Steachar extends teachar{
    public $traveling = 400;
    public $phone = 450;
    public $totalSalary;

    public function __destruct(){
        $this->totalSalary = $this->salary + $this->traveling + $this->phone;
        echo "Sastant Teachar Profile: \n";
        echo "Sastant Teachar Name: {$this->name} \n";
        echo "Sastant Teachar Designation: {$this->designation} \n";
        echo "Sastant Teacher Salary: {$this->totalSalary} \n \n";
    }
}

class principal extends Steachar{
    public $helth = 5000;
    public $home = 11500;
    public $total;

    public function __destruct(){
        $this->total = $this->totalSalary + $this->helth + $this->home;
        echo "Principal Profile: \n";
        echo "Principal Name: {$this->name} \n";
        echo "Principal Designation: {$this->designation} \n";
        echo "Principal Salary: {$this->total} \n \n";
    }
}
$e1 = new teachar("Nassim Udding Emon", "PHP", "2000");
$e1 = new Steachar("Jahidul Islam", "PHP", "2000");
$e1 = new principal("Tanvire Ahmed", "Laraval", "2000");
