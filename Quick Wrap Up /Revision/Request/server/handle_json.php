<?php

$user = ["id" => 1, "name" => "laxman", "email" => "laxmankrishnamurti@gmail.com", "gender" => "male"];

print_r($user);
echo "<br/>";

$json_user = json_encode($user);
echo "json_user is : " . $json_user;

echo "<br/>";

$decoded_json_user = json_decode($json_user, true);
"decoded_json_user is : " . print_r($decoded_json_user);