<?php

// $file_path = 'create_file/index.html';

// // $open_file = fopen($file_path, "r") || die("Ubable to find the file");
// $open_file = fopen($file_path, "r") or die("Ubable to find the file");

// echo "open_file value is : " . $open_file;

// echo fread($open_file, filesize($file_path));
// fclose($open_file);


//Read local system file 

if (isset($_FILES["file"])) {

    $file_name = $_FILES["file"]["name"];
    $file_tmp_path = $_FILES["file"]["tmp_name"];

    $open_local_file = fopen($file_tmp_path, "r") or die("Unable to find the file");

    echo fread($open_local_file, filesize($file_tmp_path));
    fclose($open_local_file);

} else {
    echo "No file found";
}

/**
 * Keep in mind while reading local file is that use local file tmp_name to open and read file rather than creating a whole directory path.
 */