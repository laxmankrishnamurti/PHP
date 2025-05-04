<?php

/**
 * Arithmetic Operators
 * +
 * -
 * *
 * /
 * %
 * ** (Exponential Operators)
 * 
 * Use "dot(.)" sign for containation.
 * 
 * x++ (Post-Increment Operator) :: Will reflect after the line
 * ++x (Pre-Increment Operator)
 * x-- (Post-Decrement Operator) :: Will reflect after the line
 * --x (Pre-Decrement Operator)
 */

$x = 2;
$y = 5;
$z1 = $x + $y;
$z2 = $x - $y;
echo $x . " + " . $y . " = " . $z1;
echo "<br>";
echo $x . " - " . $y . " = " . $z2;
echo "<br>";


$a = 10;
$b = $a++;
$c = 12;
$d = $b++;
$e = --$d;

echo "b is " . $b;
echo "<br/>";
echo "c is " . $c;
echo "<br/>";
echo "d is " . $d;
echo "<br/>";
echo "e is " . $e;


/**
 * Operator Precedence
 * ()
 * **
 * * / %
 * + -
 * 
 * 
 * For Equal Precedency :: Execution will start from left to right
 */
