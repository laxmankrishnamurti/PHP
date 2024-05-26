<?php

include ("../utils/connect_db_pdo.php");

$name = "";
$age = "";
$email = "";
$phone = "";
$profession = "";

if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $profession = $_POST["profession"];
}

try {

    $create_user = $conn->prepare("INSERT into persons (Name, Age, Email, Phone, Profession) VALUES (:name, :age, :email, :phone, :profession)");

    // Bind the parameters to the placeholders
    $create_user->bindParam(':name', $name);
    $create_user->bindParam(':age', $age);
    $create_user->bindParam(':email', $email);
    $create_user->bindParam(':phone', $phone);
    $create_user->bindParam(':profession', $profession);

    // Execute the statement
    $result = $create_user->execute();

    if ($result) {
        echo "Registration successfull";
    } else {
        echo "Registration failed, Please try again";
    }
} catch (PDOException $e) {
    echo "Error from catch block : " . $e->getMessage();
}