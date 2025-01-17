<?php

$hostname = "localhost";
$username = "root";
$password = null;
$database = "users";

try {
    $conn = new PDO("mysql:host=$hostname; dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection via PDO is successfull";
} catch (PDOException $e) {
    echo "Database connection via PDO is failed!!! Err message : " . $e->getMessage();
}

echo "<br/>";

// $getUsers = $conn->prepare("select * from persons");
// $getUsers->execute();

// $userData = $getUsers->fetchAll();
// foreach ($userData as $user) {
//     echo "<pre/>";
//     print_r($user);
// }

// $userData = $conn->query("show tables");
// print_r($userData);

// while ($row = $userData->fetch(PDO::FETCH_NUM)) {
//     print_r($row);
// }