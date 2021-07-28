<?php

# Ternary Operator
// Alternative method of implementing if-else or even nested if-else statements.
// Symtax: (Conditional statement) ? (Statement_1) : (Statement_2);

# Example 1
$avarageGrade = 62;
echo ($avarageGrade >= 40) ? "Passed" : " Failed";

# Example 2
$loggedIn = true;
// oldschool way
if($loggedIn){
    echo 'You are logged in!'
} else{
    echo 'You are not logged in!'
}
// Ternary
echo ($loggedIn) ? 'You are logged in' : 'You re not logged in';

# Example 3
// oldschool way
<div>
<?php if($loggedIn){ ?>
    <h1>Welcome User</h1>
<?php } else{ ?>
    <h1>Welcome Guest</h1>
<?php } ?>
</div>
// Ternary
<div>
<?php if($loggedIn) : ?> 
    <h1>Welcome User</h1>
<?php else: ?> 
    <h1>Welcome Guest</h1>
<?php endif; ?>
</div>

# Example 4 with array
$arr = [1,2,3,4,5];
<div>
    <?php foreach($arr as $val): ?>
        <?pgp echo $val; ?>
    <?php endforeach; ?>
</div>

# Example 5 with for loop
<div>
    <?php for($i = 0; $i < 10; $i++): ?>
       <li><?php echo $i; ?></li>
    <$php endfor; ?>
</div>