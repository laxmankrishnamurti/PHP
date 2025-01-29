<?php

/**
 * Use "$" sign to declare a variable in PHP
 * Use "Terminator" to terminate the line otherwise interpreter will give you an error.
 * 
 * Variable Types
 * 
 * String
 * Integer
 * Float
 * Bool (Boolean)
 * 
 * Use "var_dump(variable_name)" method to verify variable type
 */

$name = "Laxman Krishnamurti";
$age = 22;
$price = 150.45;
$isLoggedIn = true;

var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($price);
echo "<br>";
var_dump($isLoggedIn);

/**
 * Use ".(dot)" sign to concatinate a variable with string or use "{}" sign and put that variable inside the expression. 
 * 
 * Always use "double quotes" to concatinate a variable inside the string.
 * Printing a string using "single quotes" with variable will always treated as a string and interpreter will ignore the variable in this case. 
 */

echo 'This is a string using single quotes with variable $name';
echo "<br>";
echo "This is a string using single quotes with variable $name";
echo "<br>";
echo "My name is {$name}";
