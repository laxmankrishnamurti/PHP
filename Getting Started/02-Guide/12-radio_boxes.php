<?php

if (empty($_POST['course'])) {
    echo "Please select any one of the course";
} else {
    $course = $_POST['course'];
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
