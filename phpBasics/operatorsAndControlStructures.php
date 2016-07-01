<?php



echo 4 ** 2;
//exponentials are written using **

// ++ and -- function the same as they do in js


$usingSameVar = 5;
$usingSameVar = $usingSameVar + 1;
$usingSameVar +=3;
//same as in js, works for all of the other operators

$concat = "will";
$concat .= "Wallace";
//concats the strings together using the period before the equals session_regenerate_id

//  <=> the spaceship

echo 1 <=> 1;
//will return 0 which means they are equal to each other
echo 1 <=> 2;
//will return -1 since the left hand is less than the right hand side
echo 2 <=> 1;
//will return 1 since the value on the left is greater than the value on the right hand side

//&& works for using and

$foo = $valid ? 'yes' : 'no';
//ternary operator.

$foo = $valid ?? 'variable not defined';
//will return the variable if it is defined (null coalesce)






























 ?>
