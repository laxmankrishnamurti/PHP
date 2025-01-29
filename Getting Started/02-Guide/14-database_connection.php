<?php

/**
 * There are two ways to connect PHP with a databse. 
 *      1. MySQLi Extension :: Works with only MySQL Database
 *      2. PDO (PHP Data Object) :: Works with 12 different databases
 */

/**
 * To make a connection with MySQL database through MySQLi required these following credentials :- 
 *      - servername
 *      - username
 *      - password
 *      - dbname
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

# Create a connection (Object oriented approach)
// $conn = new mysqli($servernma, $username, $password, $dbname);

// // Check connection status

// if ($conn->connect_error) {
//     die("Database connection failed. Err :: " . $conn->connect_error);
// }

// echo "Database connection is successful!";

# Procedural approach

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_error()) {
    echo "Failed to connect to database!";
} else {
    echo "Database connection connected successfully!";
}
