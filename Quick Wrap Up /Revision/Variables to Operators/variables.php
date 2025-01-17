<?php

/**
 * Variables
 */

$name = "Laxman Krishnamurti";
$_name = "Harshad Mehta";

echo "$ name is " . $name;
echo "<br/>";
echo "_name is " . $_name;

//PHP with HTML

echo "<h1>$ name is : $name</h1>";
echo "<h2>_name is : $_name</h2>";

//PHP with HTML & CSS

echo "<h1 style = 'color:red'>$ name is $name</h1>";
echo "<h2 style = 'color:orange'>_name is : $_name</h2>";

$colorValue = "blue";

echo "<h1 style = 'color:$colorValue'>$ name is : $name</h1>";


/**
 * Constants
 */

const age = 21;

echo "$name age is : " . age;