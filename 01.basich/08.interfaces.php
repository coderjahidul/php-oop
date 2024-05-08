<?php
// interface parent1 {
//     function calc($a, $b);
// }
// interface parent2 {
//     function sub($c, $d);
// }

// class childClass implements parent1, parent2 {
//     public function calc($a, $b){
//         echo $a + $b;
//     }
//     public function sub($c, $d){
//         echo $c - $d;
//     }
// }

// $test = new childClass();
// $test->calc(35, 25);
// echo "\n";
// $test->sub(35, 25);

// Interface Definition / Interface Declaration (Interface)
// interface calc1{
//     function sum($a, $b);
// }
// interface calc2{
//     function sub($c, $d);
// }
// interface calc3{
//     function mul($e, $f);
// }
// interface calc4{
//     function div($g, $h);
// }

// Class Implementation (Implementation) / Class Declaration
// class childClass implements calc1, calc2, calc3, calc4 {
//     public function sum($a, $b){
//         echo $a + $b;
//     }
//     public function sub($c, $d){
//         echo $c - $d;
//     }
//     public function mul($e, $f){
//         echo $e * $f;
//     }
//     public function div($g, $h){
//         echo $g / $h;
//     }
// }

// Object Creation
// $test = new childClass();
// $test->sum(10,15);
// echo "\n";
// $test->sub(35, 27);
// echo "\n";
// $test->mul(3, 31);
// echo "\n";
// $test->div(100, 5);


// Interface definition
// interface Animal {
//     public function makeSound();
// }

// // Class defintions
// class Cat implements Animal {
//     public function makeSound(){
//         echo "Meow \n";
//     }
// }

// class Dog implements Animal {
//     public function makeSound(){
//         echo "Bark \n";
//     }
// }

// class Mouse implements Animal {
//     public function makeSound(){
//         echo "Squeak \n";
//     }
// }

// // Create a list of animals
// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();
// $animals = array($cat, $dog, $mouse);

// // Tell the animals to make a sound
// foreach($animals as $animal){
//     $animal->makeSound();
// }

// // Interface Definition
// interface Animal {
//     public function makeSound();
// }

// // Class definitions
// class Cat implements Animal {
//     public function makeSound(){
//         echo "Meow \n";
//     }
// }
// class Dog implements Animal {
//     public function makeSound(){
//         echo "Bark \n";
//     }
// }
// class Mouse implements Animal {
//     public function makeSound(){
//         echo "Squeak \n";
//     }
// }

// // Create a list of animals
// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();
// $animals = array($cat, $dog, $mouse);
// foreach($animals as $animal){
//     $animal->makeSound();
// }

// interface Animal {
//     public function makeSound();
// }

// class Cat implements Animal {
//     public function makeSound(){
//         echo "Meow";
//     }
// }

// $animal = new Cat();
// $animal->makeSound();

// interface calc1 {
//     function sum($a, $b);
// }
// interface calc2 {
//     function sub($c, $d);
// }
// interface calc3 {
//     function mult($e, $f);
// }
// interface calc4 {
//     function div($g, $h);
// }

// class childClass implements calc1, calc2, calc3, calc4 {
//     public function sum($a, $b){
//         echo $a + $b;
//     }
//     public function sub($c, $d){
//         echo $c, $d;
//     }
//     public function mult($e, $f){
//         echo $e * $f;
//     }
//     public function div($g, $h){
//         echo $g / $h;
//     }
// }

// $childclass = new childClass();
// $childclass->sum(58, 29);
// echo "\n";
// $childclass->sub(87, 2);
// echo "\n";
// $childclass->mult(85, 3);
// echo "\n";
// $childclass->div(150, 5);

// interface parent1 {
//     public function sum($a, $b);
// }

// interface parent2 {
//     public function sub($a, $b);
// }

// interface parent3 {
//     public function mult($a, $b);
// }

// interface parent4 {
//     public function div($a, $b);
// }

// class childClass implements parent1, parent2, parent3, parent4 {
//     public function sum($a, $b){
//         echo $a + $b;
//     }

//     public function sub($a, $b){
//         echo $a - $b;
//     }

//     public function mult($a, $b){
//         echo $a * $b;
//     }

//     public function div($a, $b){
//         echo $a / $b;
//     }
// }

// $childclass = new childClass();
// $childclass->sum(25, 15);
// echo "\n";
// $childclass->sub(25, 15);
// echo "\n";
// $childclass->mult(25, 15);
// echo "\n";
// $childclass->div(25, 15); 


// interface School{
//     public function mySchool();
// }

// class Student implements School{

//     public function __construct(){
//         $this->mySchool();
//     }
//     public function mySchool(){
//         echo "I'm a Student. \n";
//     }
// }

// $student = new Student();

// interface School{
//     public function mySchool();
// }
// interface Collage {
//     public function myCollage();
// }
// interface Varsity{
//     public function myVarsity();
// }

// class Student implements School, Collage, Varsity {

//     public function __construct(){
//         $this->mySchool();
//         $this->myCOllage();
//         $this->myVarsity();
//     }

//     public function mySchool(){
//         echo "I'm a Student of School. \n";
//     }
//     public function myCollage(){
//         echo "I'm a Student of Collage. \n";
//     }
//     public function myVarsity(){
//         echo "I'm a Student of Varsity. \n";
//     }
// }
// class Teacher implements School, Collage, Varsity {

//     public function __construct(){
//         $this->mySchool();
//         $this->myCOllage();
//         $this->myVarsity();
//     }

//     public function mySchool(){
//         echo "I'm a Teacher of School. \n";
//     }
//     public function myCollage(){
//         echo "I'm a Teacher of Collage. \n";
//     }
//     public function myVarsity(){
//         echo "I'm a Teacher of Varsity. \n";
//     }
// }

// $student = new Student();
// $teacher = new Teacher();

// interface School{
//     public function mySchool();
// }

// interface Collage{
//     public function myCollage();
// }

// interface Varsity{
//     public function myVarsity();
// }

// class Teacher implements School, Collage, Varsity {
//     public function __construct(){
//         $this->mySchool();
//         $this->myCollage();
//         $this->myVarsity();
//     }

//     public function mySchool(){
//         echo "I'm a Teacher of School. \n";
//     }
//     public function myCollage(){
//         echo "I'm a Teacher of Collage. \n";
//     }
//     public function myVarsity(){
//         echo "I'm a Teacher of Varsity. \n";
//     }
// }

// $teacher = new Teacher();

// Declare the interface Template
interface Template {
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implement the interface Template
class WorkingTemplate implements Template {
    private $vars = [];
    public function setVariable($name, $var){
        $this->vars[$name] = $var;
    }
    public function getHtml($template){
        foreach($this->vars as $name => $value){
            $template = str_replace('{' . $name . '}', $value, $template);
        }
        return $template;
    }
}

$obj = new WorkingTemplate();
$obj->setVariable('Name', 'Jhon');
$obj->setVariable('Age', 25);
echo $obj->getHtml('My name is {Name} and I am {Age} years old.');
