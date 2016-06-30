<?php

class Person
{
  const AVG_LIFE_SPAN = 79;

  public $firstName;
  public $lastName;
  public $yearBorn;

  function __construct($tempFirst = "", $tempLast = "", $tempYear = "")
  {
    $this->firstName = $tempFirst;
    $this->lastName = $tempLast;
    $this->yearBorn = $tempYear;

  }
//constructor function
  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($tempName)
  {
    $this->firstName = $tempName;
  }
}


$myObject = new Person("tim", "mcgigglestuff", 1999);
//declare a new instance of a class as an object
echo $myObject->firstName;
//how to access a property inside of a class
//you need to do something with it like echo or add to variable
$myObject->firstName = "a new name";
//changing the value of the property

echo Person::AVG_LIFE_SPAN;
//need double colons to be able to access the constant
//there isn't a need to access it throught $myObject


$myObject->setFirstName("Sam");
 echo $myObject->getFirstName();
 //outputs the $firstName

.PHP_EOL
//end of line.  like \n

 class ClassName extends Person
 //extends makes it so that it can use stuff from the other class because you inherit it
 {

 }

//using protected as the keyword instead of public.  these properties can only be accessed
//through a public method in that class


//private can only be accessed by the class it was declared in

//static properties must be self contained, can't rely on other non-static methods
//with static porperties you do use the $
public static function practiceStaticFunction()
{
  return self::$propertyNameifStatic;
}

echo Author::practiceStaticFunction();

//

include "fileName.php";
//includes that file in this file

include_once "otherFileName.php";
//

require "aFileName.php";
//require won't execute if the file isn't found.  Include will execute but it
//will also throw an error













 ?>
