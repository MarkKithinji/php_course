<?php

// Declaring numbers
$a=4;
$b=6.5;
$c=12 ."<br>";
// Arithmetic operations

echo ($a+$b) * $c."<br>";

echo $a % $b."<br>"; #this checks for the reminder

// Assignment with math operators

$a += $b; /*is the same as*/  $a= $a+$b;

echo $a ."<br>";
// Increment operator {there are two types}

echo $a++ ."<br>"; //this means the value of a is printed, then it is increased by one
echo $a ."<br>"; //when this is run, pone has already been added to $a

echo ++$a ."<br>"; //this means the value of a is increased by one then printed
 
// Decrement operator. same as the addation opperator

// Number checking functions

is_float(1.23);
is_double(1.35);
is_numeric("1.23"); //true. it reads the actual value
is_numeric("3.4g"); //false. the alphabet makes it a string instead

// Conversion
    //conver to from string to float
    $strnum="234.4";
    echo gettype($strnum) ."<br>";
    $num= (float)$strnum;
    echo gettype($num) ."<br>";
    var_dump($num) ."<br>";


    $num= (int)$strnum;
    var_dump($num) . "<br>";

    $num=floatval($strnum);
    var_dump($num);
 echo "<br>";
// Number functions
    /*(abs-returns an absolute value ie -15 will be 5 || pow, sqrt,
    max-gives the maximum value in a given set || min, round-rounds up or down || ,
    floor-rounds down || ceil-rounds up)
    */

// Formatting numbers
$number= 123456789.123456; // formating changes the way you want your numbers to appear
echo number_format($number, 2/*how many dec places*/, "."/*specifies the decimal seperator*/ , " ," /*specifies the thousands seperator*/ );


// https://www.php.net/manual/en/ref.math.php (php documentation on numbers)
