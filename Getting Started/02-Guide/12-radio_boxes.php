<?php

if (empty($_POST['course'])) {
    echo "Please select any one of the course";
} else {
    $course = $_POST['course'];
    // Extract all data from the $_POST variable using extract method
    // extract($_POST);
    // Now, we can use the name attribute like a variable.
    // Ex:- $choosed_course = $course(This is the name attribute);
    switch ($course) {
        case "DSA":
            echo "You have purchased your {$course} course successfully!";
            break;
        case "C++":
            echo "You have purchased your {$course} course successfully!";
            break;
        case "C":
            echo "You have purchased your {$course} course successfully!";
            break;
        default:
            echo "Please choose any one of the course";
    }
}
