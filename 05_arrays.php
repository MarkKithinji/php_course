<?php

// Create array
$fruits = ["banana", "apple", "orange"];

// Print the whole array
var_dump($fruits);

    //?to get a readerble version
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Get element by index
echo $fruits[1] ."<br>";

$fruits[0] = "peach";

    //?to get readerble data on screen, use the pre tags
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Set element by index


// Check if array has element at index 2
isset($fruits[2]); //? turns true

// Append element
$fruits[] = "banana"; //?takes the last index
echo "<pre>";
var_dump($fruits);
echo "</pre>" ."<br>";

   
// Print the length of the array

// Add element at the end of the array
 //?special way to append
array_push($fruits, "lePinnapple");
echo "<pre>";
var_dump($fruits);
echo "</pre>" .'<br>';
// Remove element from the end of the array
array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Add element at the beginning of the array
array_unshift($fruits, "hotel la menu");
echo "<pre>";
var_dump($fruits);
echo "</pre>" .'<br>';

// Remove element from the beginning of the array
array_shift($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>" .'<br>';

// Split(stort of convert) the string into an array
$string = "ngara, TomMboya, RiverRoad";
echo "<pre>";
var_dump(explode(", " , $string));
echo "</pre>";
// Combine array elements into string
echo implode("&" , $fruits);
// Check if element exist in the array
in_array("apple", $fruits); //?false
echo "<pre>" . "is an apple in the fruits array? <br>";
var_dump(in_array("apple", $fruits));
echo "</pre>" .'<br>';
// Search element index in the array
array_search("apple", $fruits);
echo "<pre>" . "which index is the apple if its in the array? <br>";
var_dump(array_search("apple", $fruits));
echo "</pre>" .'whoaaaa, thanks bro <br>';
// Merge two arrays
$vegs = ["broccoli", "cucumber", "greens"];
$both_arrays = array_merge($fruits, $vegs);
//? i converted into a string while printing(imploding)
echo (implode(', ' , $both_arrays)) . "<br>";

//?other way
echo "<pre>";
var_dump([...$fruits, ...$vegs]);
echo "</pre><br>";

// Sorting of array (Reverse order also)
//?befroe sorting
echo "<pre> unsorted array<br>";
var_dump($fruits);
echo "</pre> <br>";
//?after sorting
sort($fruits);
echo "<pre> sorted array<br>";
var_dump($fruits);
echo "</pre>";
//?to sort in reverse
rsort($fruits);
echo "<pre>  reverse sorted array<br>";
var_dump($fruits);
echo "</pre>";
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
echo "<CENTER><P>---------------------------------ASSOCIATIVE ARRAYS---------------------------------</p></center>";


// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Travesly',
    'age' => 30,
    'hobbies' => ['tennis', 'video games']

];

echo "<pre>";
var_dump($person);
echo "</pre>";
//?another method of printing arrays
print_r($person);

echo "<pre>";
print_r($person);
echo "</pre>";
// Get element by key
echo $person['name'] ."<br>";
// Set element by key (setting new values)
$person['YouTube Channel'] = 'Traversy Media';
echo "<pre>";
print_r($person);
echo "</pre>";


// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address'] = "no given address";
}
echo "<pre>";
var_dump($person);
echo "</pre>";

//?shorter version
$person['address'] ??= 'the address is not set';/*!double question marks check if a value is set, if the value is set, it will take the set value*/ 
echo "<pre>";
print_r($person);
echo "</pre>";
//?if a value is set.... no change is seen coz it is being read. alter spelling of hobby to see this
$person['hobbies'] ??= "hobbies has not been read!";
echo "<pre>";
print_r($person);
echo "</pre>";
// Check if array has specific key
//?use !isset
// Print the keys of the array
echo "<pre>";
print_r(array_keys($person));
echo "</pre>";
// Print the values of the array
echo "<pre>";
print_r(array_values($person));
echo "</pre>";
// Sorting associative arrays by values, by keys
ksort(($person)); //?sort by keys
echo "<pre>";
print_r($person);
echo "</pre>";

asort($person); //?sort by values
echo "<pre>";
print_r($person);
echo "</pre>";

// Two dimensional arrays
$todos= [
    ['title' => 'todo title 1', "completed" => true],
    ['title' => 'todo title 2', "completed" => false]
];
echo "<pre>";
print_r($todos);
echo "</pre>";
