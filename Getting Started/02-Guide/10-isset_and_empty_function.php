<?php

/**
 * isset() :: Returns "True", if the variable is declared or not null.
 * empty() :: Returns "True", if the variable is not declared, false, null, or "". 
 */

$name = "Laxman Krishnamurti";
echo isset($name);
echo "<br/>";
$age;
if (isset($age)) {
    echo "Age is set.";
} else {
    echo "Age is not set.";
}

echo "<br/>";
if (!empty($age)) {
    echo "Age is empty";
} else {
    echo "Age is set";
}
