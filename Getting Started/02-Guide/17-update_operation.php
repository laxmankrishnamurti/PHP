<?php

include("./config/database_connection.php");

$date = date("Y-m-d H:i:s");
$query = "UPDATE users SET password='sonukumar@123', created_at='$date' WHERE id=3";
$result = $conn->query($query);
if (!empty($result)) {
    echo "Profile updated successfully";
} else {
    echo "Updatation failed!";
}
