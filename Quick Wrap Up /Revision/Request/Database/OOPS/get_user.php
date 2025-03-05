<?php

include ("../utils/connect_db_pdo.php");
function autoLoader($class)
{
    include ($class . '.php');
}

spl_autoload_register('autoLoader');

$getUser = new Users($conn);

$getUser->getUserData();