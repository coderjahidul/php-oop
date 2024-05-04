<?php
// OOP - Constants

// Constants
// 1. Predefined
// 2. User defined

// Predefined
// echo pi(); // 3.14
// echo E; // 2.71
// echo M_PI;

// User defined
// define("APP_NAME", "PHP OOP \n");
// define("APP_VERSION", "1.0 \n");
// define("APP_AUTHOR", "Jahidul Islam \n");

// echo APP_NAME;
// echo APP_VERSION;
// echo APP_AUTHOR;


// OOP Magic constants
// 1. __LINE__
// 2. __FILE__
// 3. __DIR__
// 4. __FUNCTION__
// 5. __CLASS__
// 6. __METHOD__
// 7. __NAMESPACE__
// 8. __TRAIT__

// Explain __LINE__ 
//echo "Line Number: " . __LINE__ . "\n";  // Return Excel Line Number
//echo "Line Number: " . __LINE__ . "\n";  // Return Excel Line Number

// Explain __FILE__
//echo "File Name: " . __FILE__ . "\n"; // Return File Name

// Explain __DIR__ 
//echo "Directory Name: " . __DIR__ . "\n"; // Return Directory Name
//echo "Directory Name: " . __DIR__ . "\n"; // Return Directory Name

// Explain __FUNCTION__
// function my_function(){
//     echo "Function Name: " . __FUNCTION__ . "\n";
// }
// my_function();

// function first_function(){
//     echo "Function Name: " . __FUNCTION__ . "\n";
// }
// first_function();

// Explain __CLASS__
// class MyClass{
//     public function getClassName(){
//         return "Class Name: " . __CLASS__;
//     }
// }
// $obj = new MyClass();
// echo $obj->getClassName() . "\n";

// class Employee {
//     public function getClassName(){
//         return "Class Name: " . __CLASS__;
//     }
// }
// $obj = new Employee();
// echo $obj->getClassName();

// Explain __METHOD__
// class Student{
//     public function getClassName(){
//         return "Method Name: " . __METHOD__;
//     }
// }
// $obj = new Student();
// echo $obj->getClassName();

// class Manager{
//     public function getSalary(){
//         return "Salary: " . __METHOD__;
//     }
// }
// $obj = new Manager();
// echo $obj->getSalary();

// Explain __NAMESPACE__
// namespace MyNamespace;
// class MyClass{
//     public function getNamespace(){
//         return "Namespace Name: " . __NAMESPACE__;
//     }
// }
// $obj = new MyClass();
// echo $obj->getNamespace();

// namespace Firstnamespace;
// class MyClass{
//     public function getNamespace(){
//         return "Namespace Name: " . __NAMESPACE__;
//     }
// }
// $obj = new MyClass();
// echo $obj->getNamespace();

// Explain __TRAIT__
// trait MyTrait{
//     public function getTrait(){
//         return "Trait Name: " . __TRAIT__;
//     }
// }
// class MyClass{
//     use MyTrait;
// }
// $obj = new MyClass();
// echo $obj->getTrait();

trait YouTrait{
    public function getTrait(){
        return "Trait Name: " . __TRAIT__;
    }
}

class MyClass{
    use YouTrait;
}
$obj = new MyClass();
echo $obj->getTrait();

