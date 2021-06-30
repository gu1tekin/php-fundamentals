<?php

# CONDITIONALS
/*
    ==,  Equal
    ===, Identical
    <,   Less than
    >,   Greater than
    <=,  Less than or equal to
    >=,  Greater than or equal to
    !=,  Not equal
    !==, Not identical
    <>,  Not equal
*/

//Global Variable
$num = 5;

# EQUAL == , this is just testing value not dataType.
if($num == 5){
    echo '5 passed';
} else {
    echo 'Did not pass';
}
// $num and $num2 will return true.
if($num == 5){
    echo '5 passed';
} else {
    echo 'Did not pass';
}

# IDENTICAL === , this is checking value and dateType.
if($num === 5){
    echo '5 passed';
} else {
    echo 'Did not pass';
}
// $num3 will return true but $num4 will return 4 as it is string
if($num === 5){
    echo '5 passed';
} else {
    echo 'Did not pass';
}

# LESS THAN <
// will return false
if($num < 5){
    echo '5 passed';
} else {
    echo 'Did not pass';
}

# LESS THAN & EQUAL <=
// will return true
if($num <= 5){
    echo '5 passed';
} else {
    echo 'Did not pass';
}

# GREATER THAN >
// will return false
if($num > 5){
    echo '5 passed';
} else {
    echo 'Did not pass';
}

# GREATER THAN & EQUAL >=
// will return true
if($num >= 5){
    echo '5 passed';
} else {
    echo 'Did not pass';
}

# NOT EQUAL !=
// will return false
if($num != 5){
    echo '5 passed';
} else {
    echo 'Did not pass';
}

# NESTING IF
if($num > 4){
    if($num < 10){
        echo "$num passed";

    }
}

# LOCICAL OPERATORS
/*
    && and
    || or
    xor
*/

#AND &&
if($num > 4 AND $num < 10){
    echo "$num passed";
}
//other way 
if($num > 4 && $num < 10){
    echo "$num passed";
}

#OR ||
if($num > 4 OR $num < 10){
    echo "$num passed";
}
//other way 
if($num > 4 || $num < 10){
    echo "$num passed";
}

#XOR, thid will return true pmly if one of the statements is true and the other one is false.
if($num > 4 XOR $num < 10){
    echo "$num passed";
}

# SWITCH
/*
  Switch statement is used to perform different actions based on different conditions
*/

$favColor = 'red';

switch($favColor){
    case 'red';
        echo " Your color is red";
        break;
    case 'blue';
        echo " Your color is blue";
        break;
    case 'green';
        echo " Your color is green";
        break;
    default:
        echo "Your fav color is something else";
}