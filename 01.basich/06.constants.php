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

// trait YouTrait{
//     public function getTrait(){
//         return "Trait Name: " . __TRAIT__;
//     }
// }

// class MyClass{
//     use YouTrait;
// }
// $obj = new MyClass();
// echo $obj->getTrait();

// Explain __LINE__
// echo "Line Number: " . __LINE__ . "\n"; // Return Excel Line Number
// echo "Line Number: " . __LINE__ . "\n"; // Return Excel Line Number

// Explain __FILE__
// echo "File Name: " . __FILE__ . "\n"; // Return File Name
// echo "File Name: " . __FILE__ . "\n"; // Return File Name

// Explain __DIR__
// echo "Directory Name: " . __DIR__ . "\n"; // Return Directory Name
// echo "Directory Name: " . __DIR__ . "\n"; // Return Directory Name

// Explain __FUNCTION__
// function my_function(){
//     echo "Function Name: " . __FUNCTION__ ;
// }

// my_function();

// function New_function(){
//     echo "Function Name: " . __FUNCTION__;
// }
// New_function();

// Explain __CLASS__
// class MyClass{
//     public function getClassName(){
//         return "Class Name: " . __CLASS__;
//     }
// }
// $obj = new MyClass();
// echo $obj->getClassName();

// class Student{
//     public function getClassName(){
//         return "Class Name: " . __CLASS__;
//     }
// }
// $obj = new Student();
// echo $obj->getClassName();

// Explain __METHOD__
// class Employee{
//     public function getClassName(){
//         return "Method Name: " . __METHOD__;
//     }
// }
// $obj = new Employee();
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

// namespace YouNamespace;
// class Employee{
//     public function getClassName(){
//         return "Namespace Name: " . __NAMESPACE__;
//     }
// }
// $obj = new Employee();
// echo $obj->getClassName();

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

// trait YouTrait{
//     public function getTrait(){
//         return "Trait Name: " . __TRAIT__;
//     }
// }

// class MyClass{
//     use YouTrait;
// }

// $obj = new MyClass();
// echo $obj->getTrait();

// Explain PHP OOP Class Constants
// class Description {
//     const DESCRIPTION_MESSAGE = "Study PHP Class Constants from Educuative!";
// }
// echo Description::DESCRIPTION_MESSAGE;

// class Description{
//     const DESCRIPTION_MESSAGE = "Study PHP Class Constants from Educuative!";
// }
// echo Description::DESCRIPTION_MESSAGE;

// class Description {
//     const DESCRIPTION_MESSAGE = "Thank you for visiting Grocoder.com";
//     public function CallInsideClass(){
//         echo self::DESCRIPTION_MESSAGE;
//     }
// }
// $d1 = new Description();
// $d1->CallInsideClass();

// class Description {
//     const DESCRIPTION_MESSAGE = "Thank you for visiting Grocoder.com";
//     public function CallInsideClass(){
//         echo self::DESCRIPTION_MESSAGE;
//     }
// }
// $d1 = new Description();
// $d1->CallInsideClass(); 

// class Goodbye{
//     const LEAVING_MESSAGE = "Thank you for visiting grocoder.com";
// }
// echo Goodbye::LEAVING_MESSAGE;

// class Badboy{
//     const BADBOY_MESSAGE = "I am not a good boy";
// }
// echo Badboy::BADBOY_MESSAGE;

// class Goodbye{
//     const GOODBOY_MESSAGE = "Good Bye Everyone. I go to sleep. \n";
//     public function CallInsideClass(){
//         echo self::GOODBOY_MESSAGE;
//     }
// }
// $obj = new Goodbye();
// $obj->CallInsideClass();

// class Badboy{
//     const BADBOY_MESSAGE = "I'm not a good boy. I am a vary bad boy parson. \n";

//     public function CallInsideClass(){
//         echo self::BADBOY_MESSAGE;
//     }
// }

// $obj = new Badboy();
// $obj->CallInsideClass();

// class Employee{
//     const EMPLOYEE_MESSAGE = "Thank you for visiting our website. \n";
//     public function CallInsideClass(){
//         echo self::EMPLOYEE_MESSAGE;
//     }
// }

// $obj = new Employee();
// $obj->CallInsideClass();