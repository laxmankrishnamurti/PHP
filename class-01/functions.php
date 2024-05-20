<?php

sayHello();

function sayHello()
{
    echo "Hello, Namaste, Good morning <br/> <hr/>";
}

sayHello();
sayHello();
sayHello();
sayHello();
sayHello();
sayHello();
sayHello();


function add($a, $b)
{
    return ($a + $b);
}

echo "sum is " . add(20, 30) . "<br/>";

function parentFun()
{


    echo "Parent function called <br/>";
    function childFun()
    {
        $name = "Laxman krishnamruti";
        echo $name . "<br/>";
        echo "Nested child function has been called <br/>";
    }

    childFun();

}

// parentFun();
// childFun();

$parentFunction = "parentFun";
$parentFunction();

//Callback function

function callFunc()
{
    echo "This is from callback function";
}

$storeCall = "callFunc";

function callingFunc($call)
{
    $call();
}

callingFunc($storeCall);
?>