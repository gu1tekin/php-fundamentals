<?php

#LOOPS - Execute code set number of times

/*
    - For
    - While
    - Do..While
    - Foreach

*/

#FOR Loop
// @params - init, condition, increment
// for(; ; ;){ code here  }
for($i = 0; $i <= 10; $i++){
    echo $i;
    echo '<br>';
}

#While Loop
// @params - condition
$i = 0;
while($i <=10){
    echo $i;
    echo '<br>';
    $i++;
}

#DO..While
// @params - Condition
// No matter what do..while always will be executed once.
$i = 0;
do{
    echo $i;
    echo '<br>';
    $i++;
}while($i < 10);

#Foreach Loop
//For arrays
$people = array('Gultekin', 'Berkay', 'Baran');
foreach($people as $person){
    echo $person;
    echo '<br>';
}
// Foreach Loop - For associative arrays
$people2 = array('Gultekin' => 'gul@tekin.com', 'Berkay' => 'ber@kay.com', 'Baran' => 'bar@an.com');
foreach($people2 as $person => $email){
    echo $person,': '.$email;
    echo '<br>';
}