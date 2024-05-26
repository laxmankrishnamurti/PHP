<?php

include ("../utils/connect_db_pdo.php");

$getUsers = $conn->prepare("select * from persons");
$getUsers->execute();

echo "<br/>";

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
    <td><form method='post'>
        <button name='delete_btn' value=" . $user['_id'] . " style='cursor:pointer'>Delete</button>
    </form></td>
    <td><form action='http://localhost/PHP/Revision/Request/Database/client/create_user.html' method='post'>
        <button type='submit' name='register_btn' style='cursor:pointer'>Register</button>
    </form></td>
    <td>
        <a href='update_user.php?id=" . $user['_id'] . "'>Edit</a>
    </td>
    </tr>";
}
echo "</table>";

if (isset($_POST['delete_btn'])) {
    $button_id = $_POST['delete_btn'];

    $user_tobe_deleted = $conn->prepare("DELETE from persons WHERE _id='$button_id' ");

    /**
     Use a prepared statement with a placeholder
     $user_tobe_deleted = $conn->prepare("DELETE FROM persons WHERE _id = :id");

     Bind the placeholder to the actual value
     $user_tobe_deleted->bindParam(':id', $button_id, PDO::PARAM_INT);

     */

    if ($user_tobe_deleted->execute()) {
        header('location:delete_user.php');
        echo "User deleted successfully";
    } else {
        echo "Oops!!! unable to delete the user. Internal server error. Please try again";
    }
}