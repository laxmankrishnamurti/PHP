<?php

if ($_REQUEST) {
    foreach ($_REQUEST as $key => $value) {
        echo $key . " is " . $value;
        echo "<br/>";
    }
}


//Super global variable

echo "<br/>";
print_r($_SERVER);
print_r($_POST);
print_r($_COOKIE);
print_r($_FILES);
print_r($_SESSION);