//create a default value for params to be passed in
<?php
function doStuff($name, $age = 25)
{
  echo $name;
  echo "\n";
  echo $age;

}
$name = "Meriwether"
//this will output the age as the default age since there wasn't one passed in
//as a param
dostuff($name);

strtoupper($varName);
strtolower($varName);

strpos($varName, "foo", 24);
//tells the position(starting with 0) of the second parameter
//if the first occurrence is at 23 then it will look for the occurrence from
//24 onward.  it is case sensitive

str_replace("foo", "bar", $varName);
//first is the word to be replaced, second is what will
//be put in, third is the string you will be going through

subStr($aString, 0, 15);
//string to take from, starting position, number of characters taken
//if we start with a negative number it will start that far from the end
//if the second number is negative it ends that far from the end

strsplit($aString, 5);
//what you are splitting then by how many characters you wish to split the string
?>

print_r($arrayVariable);
//prints out arrays
