<?php

//Connection via MySQLi 

//Pre-requisities to coonect php to mySQL

$hostname = "localhost";
$username = "root";
$password = null;
$database = "users";

// $dbConnect = new mysqli($hostname, $username, $password, $database);

// if ($dbConnect->connect_error) {
//     die("Database connection failed. Connection error : " . $dbConnect->connect_error);
// } else {
//     echo "Database connection successfull.";
//     echo "<br/>";
// }

// $userData = $dbConnect->query("show tables")->fetch_all();

// echo "<pre/>";
// print_r($userData);


//Connection via PDO

try {
    $conn = new PDO("mysql:host=$hostname; dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successfull";
} catch (PDOException $e) {
    echo "Database connection failed!!! Error : " . $e->getMessage();
}

echo "<pre/>";

$userData = $conn->query("show tables");

while ($row = $userData->fetch(PDO::FETCH_NUM)) {
    print_r($row);
}
?>