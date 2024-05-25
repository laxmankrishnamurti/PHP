<?php

function Parent($name)
{
    echo "$name from Parent function";
    echo "<br/>";
    // function Child($name)
    // {
    //     echo "$name from child function";
    // }

    // Child("Child");


    //Using parent values

    // function Child($parentName)
    // {
    //     echo "$parentName from child function";
    // }

    // Child($name);


    $Child = function () use ($name) {
        echo "$name  from Child function";
    };

    $Child();

}

Parent("Parent");

//Default parameters
function sum($a, $b = 90)
{
    echo "<br/>";
    echo "sum is " . $a + $b;
}
sum(10);