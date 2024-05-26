<?php

include ("../utils/connect_db_pdo.php");
class Users
{
    public $callDB;
    function __construct($conn)
    {
        $this->callDB = $conn;
    }

    function getUserData()
    {
        $getUsers = $this->callDB->prepare("select * from persons");
        $getUsers->execute();

        $userDetails = $getUsers->fetchAll();

        echo "<table border=5 style='font-size:18px'>";
        echo "<tr style='background-color:brown; color:white'>
            <td>ID</td>
            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Professions</td>
        </tr>";
        foreach ($userDetails as $user) {
            echo "<tr style='background-color:aqua'>
                <td>" . $user['_id'] . "</td>
                <td>" . $user['Name'] . "</td>
                <td>" . $user['Age'] . "</td>
                <td>" . $user['Email'] . "</td>
                <td>" . $user['Phone'] . "</td>
                <td>" . $user['Profession'] . "</td>
            </tr>";
        }
        echo "</table>";
    }

    function createUser($Data)
    {
        $_POST = $Data;

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

            $create_user = $this->callDB->prepare("INSERT into persons (Name, Age, Email, Phone, Profession) VALUES (:name, :age, :email, :phone, :profession)");

            // Bind the parameters to the placeholders
            $create_user->bindParam(':name', $name);
            $create_user->bindParam(':age', $age);
            $create_user->bindParam(':email', $email);
            $create_user->bindParam(':phone', $phone);
            $create_user->bindParam(':profession', $profession);

            // Execute the statement
            $result = $create_user->execute();

            if ($result) {
                header('location:update_user.php');
                echo "Registration successfull";
            } else {
                echo "Registration failed, Please try again";
            }
        } catch (PDOException $e) {
            echo "Error from catch block : " . $e->getMessage();
        }
    }

    function deleteUser($Data)
    {
        $_POST = $Data;

        $getUsers = $this->callDB->prepare("select * from persons");
        $getUsers->execute();

        echo "<br/>";

        $userDetails = $getUsers->fetchAll();

        echo "<table border='2'";
        foreach ($userDetails as $user) {
            echo "<tr>
    <td>" . $user['_id'] . "</td>
    <td>" . $user['Name'] . "</td>
    <td>" . $user['Age'] . "</td>
    <td>" . $user['Email'] . "</td>
    <td>" . $user['Phone'] . "</td>
    <td>" . $user['Profession'] . "</td>
    <td><form method='post'>
        <button name='delete_btn' value=" . $user['_id'] . " style='cursor:pointer'>Delete</button>
    </form></td>
    <td><form action='http://localhost/PHP/Revision/Request/Database/client/create_user.html' method='post'>
        <button type='submit' name='register_btn' style='cursor:pointer'>Register</button>
    </form></td>
    <td>
        <a href='update_user.php?id=" . $user['_id'] . "'>Edit</a>
    </td>
    </tr>";
        }
        echo "</table>";

        if (isset($_POST['delete_btn'])) {
            $button_id = $_POST['delete_btn'];

            $user_tobe_deleted = $this->callDB->prepare("DELETE from persons WHERE _id='$button_id' ");

            /**
             Use a prepared statement with a placeholder
             $user_tobe_deleted = $conn->prepare("DELETE FROM persons WHERE _id = :id");

             Bind the placeholder to the actual value
             $user_tobe_deleted->bindParam(':id', $button_id, PDO::PARAM_INT);

             */

            if ($user_tobe_deleted->execute()) {
                header('location:delete_user.php');
                echo "User deleted successfully";
            } else {
                echo "Oops!!! unable to delete the user. Internal server error. Please try again";
            }
        }
    }

    function updateUser($Data)
    {
        include ("../utils/connect_db_pdo.php");

        if (isset($_GET['id'])) {
            $user_id = $_GET['id'];

            $get_user = $this->callDB->prepare("SELECT * from persons where _id='$user_id' ");
            $get_user->execute();

            $fetch_user = $get_user->fetchAll();
        }
        ;

        echo "<hr/>";

        $_id = $fetch_user[0]["_id"];
        $Name = $fetch_user[0]["Name"];
        $Age = $fetch_user[0]["Age"];
        $Email = $fetch_user[0]["Email"];
        $Phone = $fetch_user[0]["Phone"];
        $Profession = $fetch_user[0]["Profession"];

        if (isset($_POST['update'])) {

            $user_id = $_POST['update'];
            $Name = $_POST['Name'];
            $Age = $_POST['Age'];
            $Email = $_POST['Email'];
            $Phone = $_POST['Phone'];
            $Profession = $_POST['Profession'];

            $update_user_profile = $this->callDB->prepare("UPDATE persons set 
                Name='$Name',
                Age='$Age',
                Email='$Email',
                Phone='$Phone',
                Profession='$Profession'
                where _id='$user_id'");

            if ($update_user_profile->execute()) {
                echo "User profile updated successfully";
                header('location:delete_user.php');
            } else {
                echo "Oops!!! failed to update. Please try again";
            }
        }
    }


}