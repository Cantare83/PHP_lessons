<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lesson One</title>
</head>
<body>
<h1>Variables</h1>
<?php

$friday = "Friday"; // variable friday assigned the value of string Friday

$todaysDate = date("Y.m.D"); /* variable todaysDate assigned value of function date*/

$friday = "Monday"; // same variable given a different value

?>

<h1>Strings</h1>
<?php

$stringTest = "I am assigning this string to a variable named $stringTest"; // this sentence is a string

$stringTest2 = "string"; // a string can just be a wordwrap

$stringTest3 = "a 1 ewj ... 1/2 blahblah 568392398"; // also a string

echo "this is also a string - no variable needed";

?>

<h1>Arrays</h1>
<?php
$dogs = array("shetland", "golden")
$animals = array($dogs, "frog", "elephant", "cat", "wolf");
/*
key: 0
value: dog,

key: 1
value: frog,

key: 2
value: elephant,

etc
*/

?>

<h1>Superglobals</h1>

<h1>Booleans</h1>
<?php

$areWeHavingFun = true; //boolean
$seriously = "false"; //string

?>

<h1>Null</h1>
<?php

$var1 = $var2; //var1 is null bc the value if var2 has not been set

$var1 = "null";  //var1 is not equal to null but to a string

$var1 = null; //var1 is equal to null again

?>

<h1>Constants</h1>
<?php

define("FAVORITE_ANIMAL", "Dogs");

?>

<h1>Numbers</h1>
<?php

$int1 = 56;

$float1 = 4.5;

?>

<h1>Conditional Statements</h1>
<?php

if ($var1 = $var2) {
  echo "these variables are the same";
}

if ($sky = "blue") {
  echo "Sunny";
} else {
  echo "Cloudy";
}

?>
<?php

$number = 1; // base value of variable

while ($number <= 10) { /*boolean value to see if number is less than or equal to 10*/
  echo $number; //echo value of variable number
  $number==; //increment variable by 1
}

?>

<h1>Functions</h1>
<?php

// Single line comment

/* Multiline
still a comment
yup... still a comment */

?>
<!-- outside of php tags!!-->

</body>
</html>
