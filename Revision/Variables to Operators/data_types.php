<?php

/**
 * Data-types :- Data-type is the fundamental concept of every programming language. Actually computer should know that what type of data we are going to store in it's memory. So, data type means what is the type of our data it can be multiple? -> Yes
 * 
 * There can be multiple data-types like - Intrger, String, Character, Boolean.....etc 
 */


//String :- Collection of characters

$name = "Laxman Krishnamurti";
echo var_dump($name);           //Output : String 

//Integer :- Positive or Negative numbers (Except decimal numbers)

$age = 21;
echo "<br/>";
echo var_dump($age);            //Output : Integer


//float  :-  decimal numbers 

$marks = 89.5;
echo "<br/>";
echo var_dump($marks);          //Output : float

//Boolean  :- either true or false

$isLoggedIn = true;
echo "<br/>";
echo var_dump($isLoggedIn);         //Output : bool

//Array :- Stored reference of multiple value in a single variable

$users = ["Laxman", "Anjali", "Fruti", "Vikram"];
echo "<br/>";
echo var_dump($users);              //Output : Array


//NULL      :-      means it holds nothing(it dosen't mean 0)

$temperature = "";

if (!$temperature) {
    $temperature = null;
}

echo "<br/>";
echo var_dump($temperature);            //Output : NULL