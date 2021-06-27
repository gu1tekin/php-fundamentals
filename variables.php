<?php 
// Single Line Comment
# Single Line Comment
/*
    Muliline
    comment
*/

#Variables
/*
    - Prefix $
    - Start with letter or an underscore
    - Only letter, numbers and underscores
    - Case Sensitive
*/

#Data Types
/*
    - String, $exampleString = "Hellow World";
    - Integers, $exampleInteger = 97;
    - Floats, $exampleFloat = 24.1;
    - Booleans, $exampleBooleans = true;
    - Arrays, $exampleArray = array("AAA", "BBB", "CCC");;
    - Null, $exampleNull = NULL;
*/

#STRING CONCATENATION
$string1 = 'Hellow';
$string2 = 'World';
//First way to concatenate 
$greeting1 = $string1 . ' ' . $string2;
echo $greeting1;
//Second way to concatenate 
$greeting2 = "$string1 $string2";
echo $greeting2;

#QUOTE ESCAPE
$string3 = 'I\'am learning php';
echo $string3;
echo 'You\'re learning php';
//or
$string4 = "I'am learning php";
echo $string4;
echo "You're learning php";

#ARRAY - Variable that holds Multiple Values
/*
    - Indexed
    - Associative
    - Multi-dimensional
*/

//Indexed
$people = array('Gultekin', 'Berkay', 'Baran');
echo $people[0]; //Gultekin
echo $people[1]; //Berkay
echo $people[2]; //Baran
// other way to create array
$people2 = ['Gultekin', 'Berkay', 'Baran'];
echo $people2[0]; //Gultekin
echo $people2[1]; //Berkay
echo $people2[2]; //Baran
// add item to array
$people2[3] = 'Natalia';
//  if you dont know the index, new item will added to end
$people2[] = 'Maria';
//print array with index number
print_r($people);
//print all array wiht dataType, key, number of character and value with var_dump();
var_dump($people);

//Associative Arrays
$people3 = array('Veronica' => 26, 'Ketsia' => 27, 'Gul' => 24);
echo $people3['Veronica'];
//add item to Associative Array
$people3['Michal'] = 28;
//or
$people4 = [26 => 'Veronica', 27 => 'Ketsia', 24 => 'Gul'];
echo $people4[24];
//add item to Associative Array
$people4[28] = 'Michal';
var_dump($people4);

//Multi-Dimemsomal Arrays
$ids = array(
    array('id1', 10, 20),
    array('id2', 11, 21),
    array('id3', 12, 22),
);
//to print id1
echo $ids[0][0];
//to print id2's index 2
echo $ids[1][2];
//to print id3's index 1
echo $ids[2][1];