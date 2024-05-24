<?php 
require 'products.php';
require 'test.php';

function wow(){
    echo "Wow from index File \n";
}

$obj = new pro\product();
// $obj1 = new test\product();

pro\wow();

