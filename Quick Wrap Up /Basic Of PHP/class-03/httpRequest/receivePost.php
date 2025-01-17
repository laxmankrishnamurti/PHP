<?php

echo "Data received successfully via POST method";
echo "<br/>";

if ($_POST) {
    echo "<pre/>";
    print_r($_POST);
}

?>