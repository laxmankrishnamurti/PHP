<?php

/**
 * Functions :: Re-Usable Code
 * 
 * Pre-defined Function
 *  - String Function
 *  - Number Function
 *  - Math Function
 */

/**
 * String Functions
 *  - strlen(variable) :: Returns the lenght of the string including white spaces. 
 *  - str_replace("Choose_Character", "Replace_With", variable) :: Case-Sensitive
 *  - str_ireplace("Choose_Character", "Replace_With", variable) :: Case-Insensitive
 *  - ucwords(variable) :: Capitalize first character of each word in a string.
 *  - ucfirst(variable) :: Capitalize first character of only first word of a string. 
 *  - strtoupper(variable)  :: Capitalize each word of a string. 
 */

# Number Function

$x = 30;
$result = is_int($x);
echo $result;
$result1 = is_float($x);
echo "<br/>";
var_dump($result1);

$y = "56566.5561";
$result2 = is_numeric($y);
echo "<br/>";
echo $result2;
echo "<br/>";
var_dump($result2);

# Math Function
echo "<br/>";
echo pi();
echo "<br/>";
echo abs(-52652);
echo "<br/>";
echo sqrt(100);
echo "<br/>";
echo round(30.4958);
echo "<br/>";
echo rand();
echo "<br/>";
echo rand(1, 10);
