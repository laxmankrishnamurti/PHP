<?php

$file_path = 'create_file/index.html';

// $open_file = fopen($file_path, "r") || die("Ubable to find the file");
$open_file = fopen($file_path, "r") or die("Ubable to find the file");

echo "open_file value is : " . $open_file;

echo fread($open_file, filesize($file_path));
fclose($open_file);