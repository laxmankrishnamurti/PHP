<?php

$username = "Laxman Krishnamurti";
function sayHello()
{
    $user2 = "Sonu";
    global $username;
    echo "Hello " . $username;
    echo "<br/>";

    function sayHello2()
    {
        $user = "Harshad";
        echo "Namaste " . $user;
        echo "<br/>";
    }

    sayHello2();
    echo "Local variable username : " . $user2;
}

sayHello();

?>