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
 *  - strlen(variable) :: Returns the length of the string including white spaces. 
 *  - str_replace("Choose_Character", "Replace_With", variable) :: Case-Sensitive
 *  - str_ireplace("Choose_Character", "Replace_With", variable) :: Case-Insensitive
 *  - ucwords(variable) :: Capitalize first character of each word in a string.
 *  - ucfirst(variable) :: Capitalize first character of only first word of a string. 
 *  - strtoupper(variable)  :: Capitalize each word of a string. 
 */

# String Function

$user_email = "laxmankrishnamurti@gmail.com";
$user_email_leng = strlen($user_email);
echo "User Email Length is {$user_email_leng}";
echo "<br/>";
$new_user_email = str_replace("laxmankrishnamurti", "laxmankrishnamurti.dev", $user_email);
echo "New user_email : {$new_user_email}";
echo "<br/>";

$first_str = "Capitalize first character of each word in a string.";
$cap_first_str = ucwords($first_str);
echo $cap_first_str;
echo "<br/>";

$second_str = "capitalize first character of only first word of a string.";
$cap_second_str = ucfirst($second_str);
echo $cap_second_str;
echo "<br/>";

$third_str = "Capitalize each word of a string.";
$cap_third_str = strtoupper($third_str);
echo $cap_third_str;
echo "<br/>";

# Number Function

$x = 30;
$result = is_int($x);
echo $result;
$result1 = is_float($x);
echo "<br/>";
echo "var_dump result";
echo "<br/>";
echo $result1;
echo "result1 : $result1";
echo "<br/>";
var_dump($result1);


$y = "56566.5561";
$result2 = is_numeric($y);
echo "<br/>";
echo $result2;
echo "<br/>";
var_dump($result2);

$char = "abc";
$char_result = is_numeric($char);
echo "<br/>";
var_dump($char_result);
echo "<br/>";

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
