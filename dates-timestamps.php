<?php

# Dates

/*
    'd' Day - return: 03
    'D' Day - return: Sat
    'm' Month - return: 07
    'M' Month - return: Jul
    'y' Year - return: 21
    'Y' Year - return: 2021
    'l' Day of week - return: Saturday 
    'h' Hour - return: 
    'i' Min - return: 
    's' Seconds - return: 
    'a' AM or PM - return: 
*/

//Return: 030721
echo date('d');
echo date('m');
echo date('y');

//Return: SatJul2021
echo date('D');
echo date('M');
echo date('Y');

//Return: Saturday
echo date('l');

//Conbine dates
echo date('Y/m/d');
echo date('m/d/y');

# Times
echo date('h');
echo date('i');
echo date('s');
echo date('a');

//Conbine times
echo date('h:i:sa');

# Timestamp
//Timestamp - 01/05/1997 05:05:54am
$timestamp = mktime(05, 05, 54, 5, 1, 1997);
echo date('d/m/Y h:i:sa', $timestamp);

//Timestamp - 03/07/2021 07:00:00pm
$timestamp2 = strtotime('7:00pm July 3 2021');
echo date('d/m/Y h:i:sa',$timestamp2);

//Timestamp - 04/07/2021 12:00:00am
$timestamp3 = strtotime('tomorrow');
echo date('d/m/Y h:i:sa',$timestamp3);

//Timestamp - 05/07/2021 12:00:00am
$timestamp4 = strtotime('next Monday');
echo date('d/m/Y h:i:sa',$timestamp4);