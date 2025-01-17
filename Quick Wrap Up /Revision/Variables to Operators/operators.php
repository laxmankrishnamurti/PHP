<?php

/**
 * What is Operator?
 * 
 * Operators are a symbol that takes arguments(called operand) as an input and return some outputs. There are multiple types of operators. They are :-
 * 
 * (1). Arithmetic Operators
 * (2). Assignment Operators
 * (3). Comparison Operators
 * (4). Increament/Decreament Operatos
 * (5). Logical Operators
 * (6). Array Operators Conditional ......etc
 */


//Arithmetic Operators  = (+, -, *, /, **)

echo "<p style = 'display:inline'>2<sup>5</sup> = </p>";
echo 2 ** 5;        //Exponential operators (2*2*2*2*2 = 32);       //Output :- 32

//Assignment Operators :- It takes value from right hand side and assigns it to the left hand side.

$age = 21;      //21 is the value that is assign by " = " operator to the $age variable

$age += 1;      // $age = $age + 1
echo "<br/>";
echo "age is $age";

//same as :- 
$age -= 1;
$age *= 5;
$age /= 2;

//Comparison Operators :- It compair two operands

// Operators :- (>, <, >=, <=, !=, !)

//Increament or Decreament Operator

$age++;     //Post-increament
++$age;     //Pre increament
$age--;     //Post decreament
--$age;     //Pre decreament 

//Modulo Operators :- Returen remender

echo "<br/>";
echo 10 % 3;            //Output : 1
echo "<br/>";
echo 13 % 5;            //Output : 3
echo "<br/>";
echo 100 % 10;          //Output : 0


//Spaceship Operator :- Returns an interger less that, equal to, or greater that Zero depending on if the first operand is less that, equal to or greater than second operand.

echo "<br/>";
echo 20 <=> 34;         //Output :- -1   Because 20(first operand) is less than 34(second operand)
echo "<br/>";
echo 34 <=> 20;         //Output :-  1   Because 34(first operand) is greater than 20(second operand)
echo "<br/>";
echo 34 <=> 34;         //Output :-  0   Because both operands are equal