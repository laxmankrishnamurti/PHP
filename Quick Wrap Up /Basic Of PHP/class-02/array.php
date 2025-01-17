<?php

$users = ["Laxman", "Anjali", "Fruti", "Vikram"];

// for ($i = 0; $i < count($users); $i++) {
//     echo "<h1>" . $users[$i] . "</h1>";
// }

// foreach ($users as $key) {
//     echo "<b>" . $key . "</b> <br/>";
// }


//Associative array 


$person = [
    "name" => "Laxman",
    "age" => 21,
    "status" => "Student"
];


// print_r($person)

foreach ($person as $key => $value) {
    // echo $key . " = " . $value;
    echo $key . " is " . $person[$key];
    echo "<br/>";
}

echo "<hr/>";

//Multidimensional array 

$users = [
    [1, "Laxman", 21, "laxmankrishnamurti@gmail.com"],
    [2, "Harsh", 21, "harsh@gmail.com"],
    [3, "Aakash", 21, "aaskash@gmail.com"],
    [4, "Sonu", 21, "sonu@gmail.com"],
    [5, "Harshad", 21, "harshad@gmail.com"],
];

// echo "<pre/>";
// print_r($users);
// echo "<pre/>";


// for ($i = 0; $i < count($users); $i++) {
//     for ($j = 0; $j < count($users[$i]); $j++) {
//         echo $users[$i][$j];
//         echo "<br/>";
//     }
// }


//Multidimensional associative array

$persons = [
    ["id" => 1, "username" => "Laxman Krishnamurti", "age" => 21],
    ["id" => 2, "username" => "Anjali Kumari", "age" => 19],
    ["id" => 3, "username" => "Fruti Kumari", "age" => 17],
    ["id" => 4, "username" => "Vikram Kumar", "age" => 13],
    ["id" => 5, "username" => "Kawya Krishnamurti", "age" => 6],
];

foreach ($persons as $key) {
    echo "<pre/>";
    print_r($key);
    foreach ($key as $personKey => $person) {
        echo $personKey . " is " . $person;
        echo "<br/>";
    }
}
;

echo "<hr/>";

$country = ["India", "Pakistan", "China"];
array_push($country, "Russia", "Iran", "America", "Ukrain");

print_r($country);

for ($i = 0; $i <= 3; $i++) {
    // array_pop($country);
}

print_r($country);

array_splice($country, 1, 3);
print_r($country);

?>