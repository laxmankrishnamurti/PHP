<?php
include("./config/database_connection.php");
?>

<!-- Get parameter  -->
<a href="destination_location.php?id=<?php $row['id'] ?>">Edit</a>
<form action="edit_user.php?id=<?php echo $_GET['id'] ?>" method="post">
    <!-- form's element  -->
</form>

<?php
## Step-1 (Get User's data by user_id)

if (isset($_GET['id'])) {
    $query = "SELECT * FROM users WHERE id = " . $_GET['id'];
    $result = $conn->query($query);
    // Access value directly
    $user = mysqli_fetch_assoc($result);
} else {
    echo "<h1>Invalid Request</h1>";
}

# Step-2

if (isset($_POST['submit'])) {
    extract($_POST);
    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = " . $_GET['id'];
    $result = $conn->query($query);
    if ($result) {
        echo "Profile updated successfully!";
    } else {
        echo "Failed to update!";
    }
}
?>

<!-- Show the fetched data into the form dynamically -->

<form action="edit_user.php?id=<?php echo $user['id'] ?>" method="post">
    <!-- form's element  -->
    <input type="text" name="username" required value="<?php echo $user['username'] ?>">
    <input type="password" name="username" required value="<?php echo $user['password'] ?>">
</form>