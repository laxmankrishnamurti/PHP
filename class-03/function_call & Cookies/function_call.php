<?php
$username;

if ($_GET) {
    $username = $_GET["name"];
    sayHello($username);
}
;

//Whenever the button is clicked the function is going to execute

function sayHello($user)
{
    echo "Hello " . $user;
    setcookie("username", $user, time() + (86400), true);
}
;

if ($_COOKIE) {
    echo "<pre/>";
    print_r($_COOKIE);
}

?>