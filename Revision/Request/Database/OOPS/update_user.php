<?php

include ("../utils/connect_db_pdo.php");
function autoLoader($class)
{
    include ($class . '.php');
}

spl_autoload_register('autoLoader');

$createUser = new Users($conn);
$createUser->updateUser($conn);

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