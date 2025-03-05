<?php



if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if ($age >= 18) {
        echo "$name you are eligible for voting";
    } else {
        echo "$name you are not eligible for voting";
    }
}