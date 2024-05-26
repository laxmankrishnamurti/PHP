<?php

$hostname = "localhost";
$username = "root";
$password = null;
$database = "users";

$db_connect = new mysqli($hostname, $username, $password, $database);
if ($db_connect->connect_error) {
    echo "Database connection via mysqli is failed!!!. Err : " . $db_connect->connect_errno;
} else {
    echo "Database connection via mysqli is successfull";
}

$userData = $db_connect->query("show tables")->fetch_all();
echo "<pre/>";
print_r($userData);