<?php

if (isset($_POST["filename"])) {
    $file_name = $_POST["filename"];
    $file_path = "./create_file/$file_name";
    $file_content = $_POST["filecontent"];

    $ope_file = fopen($file_path, "w");
    fwrite($ope_file, $file_content);
    fclose($ope_file);

    echo "File created successfully";
}