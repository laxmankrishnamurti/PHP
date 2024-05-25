<?php

function sayHello()
{
    echo "Hello";
}

sayHello();

//Parameters

echo "<br/>";
function checkVotingEligibility($name, $age)
{
    if ($age >= 18) {
        echo "$name you are eligible to get driving licence";
    } else {
        echo "$name you are not eligible to get driving licence";
    }
}

checkVotingEligibility("Laxman", 21);       //Laxman & 21 are called Arguments