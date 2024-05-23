<?php

class MathOperation
{
    function add($x, $y)
    {
        return $x + $y;
    }

    function subtraction($x, $y)
    {
        return $x - $y;
    }

    function multiplication($x, $y)
    {
        return $x * $y;
    }

    function division($x, $y)
    {
        return $x / $y;
    }
}

$add_operation = new MathOperation();
echo "sum is : " . $add_operation->add(10, 20);

echo "<br/>";

echo "Quotient is : " . $add_operation->division(10, 5);
?>