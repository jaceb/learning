<?php
//creating arrays
$authors = array("an author", "other author");
$books = ["a book", "other book"];
$allTypes = [10, 1.3, "hello there", true];

//associative Arrays
$thisArr = array(
  "first" => "the first one",
  "second" => "the second one",
  "third" => "an array item",
  10 => "this item",
  "random item"
//this will be given a key of 11 since the last integer value of a key was 10
);

array_push($arrayName, "thing to be pushed");
$arrayName[] = "thing to be pushed";
//these two both should do the same thing except if the array hasn't been
//declared, the first will throw an error
//only works for indexed values
$arrayName["key"] = "thing to be pushed";
//this is how you do it with associaive arrays

$lastValue = array_pop($arrayName);
//removes the last value in the array and saves it as $lastValue

unset($arrayName[1]);
//removes value from an array at the index of 1
unset($arrayName[1], $arrayName[3]);
//can be used on multiple items at a time
unset($arrayName["key"]);
//can remove item by key
unset($arrayName);
//clear the array

sort($arrayName);
//sorts the array alphabetically
//sort flags can be used
//will replace keys if it is associative and will make it indexed

asort($arrayName);
//sorts just like sort but will not replace associative keys with an index
//doesn't change index of an indexed arrays

ksort($arrayName);
//sorts things by their key.  best for associative arrays

echo count($arrayName);
//echoes the number of items in an arrays
//count will count them but you need to either put that value into a variable
//or print it to the console

foreach($associativeArrayName as $key)
{
  echo $val."\n";
}
//loops for each item in the array and echoes the value.  \n to break the line

foreach ($variable as $key => $value) {
  echo $key."(".$value.")\n";
}
//when you want to see the key as well as the value

print_r($arrayName);
//prints the array

print_r($arrayName["firstKey"]["keyInsideThat"][1]);
//for multidimensional arrays





























?>
