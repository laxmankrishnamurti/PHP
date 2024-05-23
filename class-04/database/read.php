<?php

include ("./config.php");

$getUsers = $conn->prepare("select * from persons");
$getUsers->execute();
$getUsers = $getUsers->fetchAll();

echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<table border=2>";
echo "
        <tr>
            <td>_Id</td>
            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Profession</td>
        </tr>";
foreach ($getUsers as $key => $user) {
    echo "<tr>
         <td>" . $getUsers[$key]["_id"] . "</td>
        <td>" . $getUsers[$key]["Name"] . "</td>
        <td>" . $getUsers[$key]["Age"] . "</td>
        <td>" . $getUsers[$key]["Email"] . "</td>
        <td>" . $getUsers[$key]["Phone"] . "</td>
        <td>" . $getUsers[$key]["Profession"] . "</td>

    </tr>";
}
echo "</table>";