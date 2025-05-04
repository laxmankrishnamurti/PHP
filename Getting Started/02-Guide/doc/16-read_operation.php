<?php

include("./config/database_connection.php");

$query = "SELECT * from users";
$fetched_data = $conn->query($query);
// $data = $fetched_data->fetch_all(MYSQLI_ASSOC);  :: Loads all the data in a single call into the memory, can cause out-of-memory usage if the dataset is huge. 

echo "<pre/>";
while ($row = $fetched_data->fetch_assoc()) {   // Loads one-by-one and discards the used row. 
    print_r($row);
}

// while($row = mysqli_fetch_assoc($fetched_data)){
//     print_r($row)
// }