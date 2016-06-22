<?php

$regInt = 1234;

$octNum = 01234;

$hexNum = 0xabc;

$binaryNum = 0b1000;

$float = 1.234;

$scientific = 0.1234E4;

$bool = true;

define('NEW_CONSTANT', "hello new constant");
//constants can be accessed anywhere
//constan names must be all caps separated by an underscore
echo NEW_CONSTANT;

is_int($regInt);
//check to see if it is an int or bool or whatever


defined()
//checks to see if constant is defined or not
var_dump($hexNum);



 ?>
