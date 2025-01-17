<form method="get">
    <input type="text" name="search_input">
    <button type="submit">Search</button>
</form>

<hr />

<?php

include ("../utils/connect_db_pdo.php");

if (isset($_GET['search_input'])) {
    $input_value = $_GET['search_input'];

    $getUsers = $conn->prepare("SELECT * from persons where Name like '%$input_value%' ");
    $getUsers->execute();

    $userDetails = $getUsers->fetchAll();

    echo "<table border='2'";
    foreach ($userDetails as $user) {
        echo "<tr>
                <td>" . $user['_id'] . "</td>
                <td>" . $user['Name'] . "</td>
                <td>" . $user['Age'] . "</td>
                <td>" . $user['Email'] . "</td>
                <td>" . $user['Phone'] . "</td>
                <td>" . $user['Profession'] . "</td>
    </tr>";
    }
    echo "</table>";

}

?>