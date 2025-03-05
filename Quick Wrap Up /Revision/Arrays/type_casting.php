<?php

$age = 21;
$age = (string) $age;

var_dump($age);         //Output :- String 

$age = (int) $age;
var_dump($age);         //Output :- Integer 

echo "<br/>";

$age = (boolean) $age;
var_dump($age);         //Output :- boolean 

echo "<br/>";
$age = (float) $age;
var_dump($age);         //Output :- float