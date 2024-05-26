<?php

include ("../utils/connect_db_pdo.php");
function autoLoader($class)
{
    include ($class . '.php');
}

spl_autoload_register('autoLoader');

$createUser = new Users($conn);
$createUser->createUser($_POST);