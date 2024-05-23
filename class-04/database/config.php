<?php

$hostname = "localhost";
$username = "root";
$password = null;
$database = "users";

try {
    $conn = new PDO("mysql:host=$hostname; dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successfull";
} catch (PDOException $e) {
    echo "Failed to connection database!!! Error : " . $e->getMessage();
}


?>