<?php

// Create simple string
$name = "Zura";
$age = 33;
// String concatenation
    //?single quotes
    echo 'hello, I am ' .$name. ' and i am ' .$age. 'years old. <br>';
    //?double quotes
    echo "hello i am $name and i am $age years old <br>";
    echo 'hello i am $name. and i am $age. years old <br>'; // doesnt work
// String functions
    /*
    strlen-gives the length of the string
    trim- trims the white spaces
    ltrim- trims the white spaces on the left
    rtrim- trims the white space on the right
    str_word_count- number of words in a string
    strrev- reverses the string
    strtoupper- makes uppercase
    strtolower- makes lowr case
    ucfirst- makes first letter uppercase
    lcfirst- makes other letters upper, first remains lower
    ucwords- conversts first letters of all words get caps
    strpos- finds a word in a variable. its case sensitive
    str_ipos- finds a word in a variable. its not case sensitive'
    sustr- takes a part of a string out, incldes white spaces
    str_replace- searches for a word in a variables and replaces it with another
    str_ireplace- searches for a word ignoring its case and replaces it with another

    check images for references */ 
    ?>
    <img src="./lesson_images/variables-screenshot-1.png" height="50%" width="auto">
    <img src="./lesson_images/variables-screenshot-2.png" height="50%" width="aut0">
    <?php


// Multiline text and line breaks
$longText = "
hello, wassap nations
this is your good man Zura
with me today is Chris.
 live from kenya!!! woohoo!!
";
echo $longText ."<br>"; //?notice all the extra white space is gone

    //?to maintain the white spaces use {(new line to break)- nl2br}
echo nl2br($longText) ."<br>";


// Multiline text and reserve html tags

$boldText = "
hello, <b>wassap nations</b>
this is your good man Zura
with me today is Chris.
 live from <b>kenya!!!</b> woohoo!!
";
echo nl2br($boldText) ."<br>";
    //?to reserve
echo "<u>html entities preserved :</u> <br>" .htmlentities($boldText) ."<br>";
    //?to decord
echo nl2br(htmlentities($boldText));

// https://www.php.net/manual/en/ref.strings.php