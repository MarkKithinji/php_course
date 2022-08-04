<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo "1- true <br>";
}
// Without circle braces //? it can work just as well without curly brckets
if ($age ===30) echo "2- age is 30";
else{
    echo "2- age is not 30 <br>";
}

// Sample if-else
if ($age > 20) {
    echo "3- age is greater than 20";
}else{
    echo "3- age is not greater than 20<br>";
}
// Difference between == and ===
//? === is strict on data type
if ($age === 20) {
    echo "4a- age is a variable 20(===)<br>";

}else{
    echo "4a- age is not a variable 20(===)";
}

if ($age === '20') {
    echo "4b- age is a string 20(===)<br>";
}else {
    echo "4b  - age is not string 20(===)<br>";
}
//? == is not strict

if ($age == 20) {
    echo "5a- age is a variable 20(==)<br>";

}
if ($age == "20") {
    echo "5a- age is a string 20(==)<br>";

}
// if AND

// if OR

// Ternary if

// Short ternary

// Null coalescing operator

// switch
