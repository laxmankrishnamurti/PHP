<?php

$users = ["Laxman", "Anjali", "Fruti", "Vikram"];

for ($i = 0; $i < count($users); $i++) {
    echo "<h1>" . $users[$i] . "</h1>";
}

foreach ($users as $key) {
    echo "<b>" . $key . "</b> <br/>";
}


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


for ($i = 0; $i < count($users); $i++) {
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo $users[$i][$j];
        echo "<br/>";
    }
}

?>