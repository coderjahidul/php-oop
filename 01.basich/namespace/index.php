<?php 
// require 'products.php';
// require 'test.php';

// function wow(){
//     echo "Wow from index File \n";
// }

// $obj = new pro\product();
// // $obj1 = new test\product();

// pro\wow();


require 'products.php';
require 'test.php';

$obj = new test\product();
$obj1 = new pro\product();

function nice(){
    echo "Nice from index File \n";
}

nice();
pro\nice();
test\nice();

