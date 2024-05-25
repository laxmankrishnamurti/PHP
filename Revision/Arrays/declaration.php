<?php

/**
 * What is array?
 * 
 * Array is just like a variable but the difference is it can store multiple objects reference in a single variable. 
 */

$users = ["Laxman", "Anjali", 'Fruti', "Vikram"];
print_r($users);

echo "<br/>";

/**
 * There are three types of array in PHP
 * 
 * (1). Indexed array
 * (2). Associative array
 * (3). Multidimensional arrays
 */

//above array is an exmple of Indexed array

//Associative array :- The array in which each array's element have an unique key

$Users = ["name" => "Laxman", "age" => 21, "email" => "laxmankrishnamurti@gmail.com", "blood-type" => "A+"];

// print_r($Users);
// echo "<br/>";
// echo "username is : " . $Users['name'];
// echo "<br/>";
// echo "user age is : " . $Users['age'];
// echo "<br/>";
// echo "user email is : " . $Users['email'];
// echo "<br/>";
// echo "user blood-type is : " . $Users['blood-type'];

foreach ($Users as $key => $user) {
    echo "<br/>";
    echo $key . " id " . $user;
}

echo "<hr/>";


//Multidimensional array :- Array inside array called multidimensional array

$userData = [
    [1, "Laxman", "laxmankrishnamurti", "A+"],
    [2, "Anjali", "anjalikumari@gmail.com", "A+"],
    [3, "fruti", "frutikumari@gmail.com", "A+"],
    [4, "Vikram", "vikramkumar@gmail.com", "A+"],
];

echo "<table border = 2>";
echo "
    <tr>
        <th>S.N</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>BLOOD</th>
    </tr>
";
foreach ($userData as $user) {
    echo "<tr>";
    foreach ($user as $key => $value) {
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    echo "</tr>";
}
;
echo "</table>";

echo "<br/>";

$personData = [
    ["no" => 1, "name" => "Laxman", "email" => "laxmankrishnamurti", "blooed" => "A+"],
    ["no" => 2, "name" => "Anjali", "email" => "anjalikumari@gmail.com", "blooed" => "A+"],
    ["no" => 3, "name" => "fruti", "email" => "frutikumari@gmail.com", "blooed" => "A+"],
    ["no" => 4, "name" => "Vikram", "email" => "vikramkumar@gmail.com", "blooed" => "A+"],
];

echo "<table border = 2>";
echo "
    <tr>
        <th>S.N</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>BLOOD</th>
    </tr>
";
foreach ($personData as $user) {
    echo "<tr>";
    foreach ($user as $key => $value) {
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    echo "</tr>";
}
;
echo "</table>";