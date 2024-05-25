<?php

if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];

    switch ($age) {

        case ($age < 18);
            echo "$name You are not eligible for voting";
            break;

        case ($age >= 18):
            echo "$name You are eligible for voting";
            break;

        default:
            echo "$name You are not eligible for voting";
    }
}