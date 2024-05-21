<?php

$users = ["Laxman", "Anjali", "Fruti", "Vikram"];

for ($i = 0; $i < count($users); $i++) {
    echo "<h1>" . $users[$i] . "</h1>";
}

foreach ($users as $key) {
    echo "<b>" . $key . "</b> <br/>";
}

?>