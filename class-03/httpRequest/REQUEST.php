<?php

echo "Data received successfully via REQUEST";

if ($_REQUEST) {
    echo "<pre/>";
    print_r($_REQUEST);
}

if ($_COOKIE) {
    print_r($_COOKIE);
}

?>