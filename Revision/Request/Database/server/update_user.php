<?php

include ("../utils/connect_db_pdo.php");

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $get_user = $conn->prepare("SELECT * from persons where _id='$user_id' ");
    $get_user->execute();

    $fetch_user = $get_user->fetchAll();
    print_r($fetch_user);
}
;

echo "<hr/>";

$_id = $fetch_user[0]["_id"];
$Name = $fetch_user[0]["Name"];
$Age = $fetch_user[0]["Age"];
$Email = $fetch_user[0]["Email"];
$Phone = $fetch_user[0]["Phone"];
$Profession = $fetch_user[0]["Profession"];

?>
<form method="post">
    <input type="text" name="Name" value="<?php echo $Name ?>">
    <br>
    <br>
    <input type="text" name="Age" value="<?php echo $Age ?>">
    <br>
    <br>
    <input type="email" name="Email" value="<?php echo $Email ?>">
    <br>
    <br>
    <input type="tel" name="Phone" value="<?php echo $Phone ?>">
    <br>
    <br>
    <input type="text" name="Profession" value="<?php echo $Profession ?>">

    <br>
    <br>
    <button type="submit" name="update" value="<?php echo $_id ?>">Update</button>
</form>

<?php

if (isset($_POST['update'])) {

    $user_id = $_POST['update'];
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Profession = $_POST['Profession'];

    $update_user_profile = $conn->prepare("UPDATE persons set 
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
} else {
    echo "Invalid Reuest";
}