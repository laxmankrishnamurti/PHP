<?php

include("./config/database_connection.php");

// INSERT Query

$date = date("Y-m-d H:i:s");
$sql = "INSERT into users (username, password, created_at) values ('Harshad Mehta', 'harshad@123','$date')";

$result = $conn->query($sql);
if ($result) {
    echo "Signed up successfully!";
} else {
    echo "Signup failed!, Err :: " . $conn->error;
}
