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
class Animal {
    public function eat(){
        echo "Animal is eating \n";
    }
}
// Subclass inheriting from Animal
class Dog extends Animal {
    public function bark(){
        echo "Dog is barking \n";
    }
}

// Subclass inheriting from Dog
class Cat extends Dog {
    public function meow(){
        echo "Cat is Meowing \n";
    }
}

// Main code
$cat = new Cat();
$cat->eat();  // Inherited from Animal
$cat->bark(); // Inherited from Dog
$cat->meow();

