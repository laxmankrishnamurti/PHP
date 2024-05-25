<?php

$dir_path = "../server";
$all_files = scandir($dir_path);

$files = array_diff($all_files, array(".", ".."));

print_r($files);