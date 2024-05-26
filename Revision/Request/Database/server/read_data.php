<?php

include ("../utils/connect_db_pdo.php");

$getUsers = $conn->prepare("select * from persons");
$getUsers->execute();

echo "<br/>";

$userDetails = $getUsers->fetchAll();

echo "<table border = '2'>";
echo "<tr>
    <th>_id</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Profession</th>
</tr>";
foreach ($userDetails as $key => $users) {
    echo "<tr>";
    foreach ($users as $key => $user) {
        if (is_string($key)) {
            echo "<td>
                $user
            </td>";
        }
    }
    echo "</tr>";
}
echo "<table/>";

echo "<br/>";



// //Make a dropDown option 
// 

// Select _id

// echo "<select>";
// // echo "<option>Select _id</option>";
// foreach ($userDetails as $key => $users) {
// foreach ($users as $key => $user) {
// // if (is_string($key)) {
//     // if ($key == "_id") {
//     // echo "<option>
//                 // $user
//             </option>";
//             }
//         }
//     }
// }
// echo "</select>";

// Select Age

// echo "<select>";
// // echo "<option>Select Age</option>";
// foreach ($userDetails as $key => $users) {
// foreach ($users as $key => $user) {
// // if (is_string($key)) {
//     // if ($key == "Age") {
//     // echo "<option>
//                 // $user
//             </option>";
//             }
//         }
//     }
// }
// echo "</select>";


// Select Name 

// echo "<select>";
// // echo "<option>Select Name</option>";
// foreach ($userDetails as $key => $users) {
// foreach ($users as $key => $user) {
// // if (is_string($key)) {
//     // if ($key == "Name") {
//     // echo "<option>
//                 // $user
//             </option>";
//             }
//         }
//     }
// }
// echo "</select>";


// Select Email

// echo "<select>";
// // echo "<option>Select Email</option>";
// foreach ($userDetails as $key => $users) {
// foreach ($users as $key => $user) {
// // if (is_string($key)) {
//     // if ($key == "Email") {
//     // echo "<option>
//                 // $user
//             </option>";
//             }
//         }
//     }
// }
// echo "</select>";

// Select Phone 

// echo "<select>";
// // echo "<option>Select Phone</option>";
// foreach ($userDetails as $key => $users) {
// foreach ($users as $key => $user) {
// // if (is_string($key)) {
//     // if ($key == "Phone") {
//     // echo "<option>
//                 // $user
//             </option>";
//             }
//         }
//     }
// }
// echo "</select>";


// Select Profession

// echo "<select>";
// echo "<option>Select Profession</option>";
// foreach ($userDetails as $key => $users) {
//     foreach ($users as $key => $user) {
//         if (is_string($key)) {
//             if ($key == "Profession") {
//                 echo "<option>
//                 $user
//             </option>";
//             }
//         }
//     }
// }
// echo "</select>";

function createDropdown($userDetails, $attribute, $label)
{
    echo "<select>";
    echo "<option style='color:red'>Select $label</option>";
    foreach ($userDetails as $key => $users) {
        print_r($userDetails);
        foreach ($users as $key => $user) {
            if (is_string($key)) {
                if ($key == $attribute) {
                    echo "<option style='color:brown'>
                            $users[$key]
                    </option>";
                }
            }
        }
    }
    echo "</select>";
}

createDropdown($userDetails, "_id", "_id");
createDropdown($userDetails, "Name", "Name");
createDropdown($userDetails, "Age", "Age");
createDropdown($userDetails, "Email", "Email");
createDropdown($userDetails, "Phone", "Phone");
createDropdown($userDetails, "Profession", "Profession");