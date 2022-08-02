<?php

// What is a variable. variables are lose (not specified)

// Variable types


// Declare variables
$name= "zura";
$age= 23;
$isMale=true;
$height= 1.67;
$salary= null;
// Print the variables. Explain what is concatenation

// Print types of the variables
echo gettype($name)."<br>";
echo gettype($age)."<br>";
echo gettype($isMale)."<br>";
echo gettype($height)."<br>";
echo gettype($salary)."<br>";
// Print the whole variable
 var_dump($name, $age, $isMale, $salary, $height)."<br/";
// Change the value of the variable

// Print type of the variable

// Variable checking functions
is_bool($name);//false
// Check if variable is already defined
isset($name);//true
// Constants
define('pi', 3.142);
echo pi."<BR>";
// Using PHP built-in constants

echo SORT_ASC."<br>";
echo "space";
echo PHP_INT_MAX."<br>";
