<?php

$dir_path = "../server";
$all_files = scandir($dir_path);

$files = array_diff($all_files, array(".", ".."));

echo "All file data in the $dir_path directory are :- ";
echo "<br/>";

foreach ($files as $file) {
    echo $file;
    echo "<br/>";
}