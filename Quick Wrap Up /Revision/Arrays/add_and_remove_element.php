<?php

$country = ["India", "Pakistan", "China", "Russia", "Srilanka", "Indoneshiya"];
array_push($country, "Afganistan", "Ujbekistan");
print_r($country);

echo "<br/>";

array_pop($country);
foreach ($country as $value) {
    echo $value;
    echo "<br/>";
}

echo "<hr/>";

array_splice($country, 1);

foreach ($country as $value) {
    echo $value;
    echo "<br/>";
}