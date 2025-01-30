<?php

include("./config/database_connection.php");

// $query = "DELETE from users WHERE id='4'";
$query = "DELETE from users";
$result = $conn->query($query);
if (!empty($result)) {
    echo "Record deleted successfully";
} else {
    echo "Deletion failed";
}
