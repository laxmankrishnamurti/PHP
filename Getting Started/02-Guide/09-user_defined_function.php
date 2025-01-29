<?php

/**
 * Function :: It is a block of code that can be re-used. 
 */
greet("Harshad");

function greet($name)
{
    echo "Namaste {$name}!";
}


function get_user_info($user_id, $user_password)
{
    if ($user_id && $user_password) {
        return array(
            "name" => "Laxman Krishnamurti",
            "age" => 22,
            "email" => "laxmankrishnamurti@gmail.com",
            "is_logged_in" => true
        );
    }

    return "Wrong Credentials";
}

$logged_in_user = get_user_info(1, 1);
echo "<pre/>";
print_r($logged_in_user);
