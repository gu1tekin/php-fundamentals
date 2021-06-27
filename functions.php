<?php

#Function - Block of code that can be repeatedly called

/*
How to name the functions:
    - Came Case, myFuction()
    - Lower Case, my_function()
    - Pascal Case, MyFunction
*/

// Create simple function
function simpleFunction(){
    echo 'simple funchtion';
}
// Run your function
simpleFunction();


// Function with parametter
function sayHi($name){
    echo "Hello $name";
}
sayHi('Gultekin');

// Return value
function addNumber($num1, $num2){
    return $num1 + $num2;
}
echo addNumber(2,3);

// By reference
$mynum = 13;
function addFive($num){
    $num +=5;
}
function addTen(&$num){
    $num +=10;
}
addFive($mynum);
echo "Value: $mynum<br>"; //output: 13
addTen($mynum);
echo "Value: $mynum<br>"; //output: 23