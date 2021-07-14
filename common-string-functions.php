<?php

# substr()
// Returns a portion of a string
$output = substr('Hello', 1);
echo $output; //ello
$output = substr('Hello', 1, 3);
echo $output; //ell
$output = substr('Hello', -2);
echo $output; //lo

# strlen()
// Returns the length of a string including space
$output = substr('Hello World');
echo $output; //11
$output = substr('Hello');
echo $output; //5

# strpos()
// Find the position of the first occurence of a sub string
$output = strpos('Hello World', 'o');
echo $output; //4
$output = strpos('Hello World', 'h');
echo $output; //0

# strrpos()
// Find the position of the last occurence of a sub string
$output = strpos('Hello World', 'o');
echo $output; //7
$output = strpos('Hello World', 'l');
echo $output; //9

# trim()
// Remove whitespace
$text = 'Hello World         '; //20 character in total including whitespaces.
$trimmed = trim($text); //10 character in total, whitespaces are deleted.

# strtoupper()
// Makes everything uppercase
$output = strtoupper('Hello World');
echo $output; //HELLO WORLD

# strtolower()
// Makes everything lowercase
$output = strtolower('Hello World');
echo $output; //hello world

# ucwords()
// Capitalize every word
$output = ucwords('hello world');
echo $output; //Hello World

# str_replace()
// Replace all occurences of a search string with a replacement
$text = 'Hello World';
$trimmed = str_replace('World','Everyone', $text);
echo $output; //Hello Everyone

# is_string()
// Check if string
$val = 'Hello';
$output = is_string($val);
echo $output // 1, it returns boolean

$values = array(true, false, null, 'abc', 33, '33', 22.4, '22,4',' ', 0, '0');
foreach($values as $value){
    if(is_string($value)){
        echo "{$value} is a string<br>";
        #output
        // abc is a string
        // 33 is a string
        // 22,4 is a string
        //  is a string
        // 0 is a string
    }
}