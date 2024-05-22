<?php

if ($_FILES["uploadfile"]) {

    $file_name = $_FILES["uploadfile"]["name"];
    $file_path = "./public/" . $file_name;

    if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $file_path)) {
        echo "File uploaded successfully";
    } else {
        echo "Failed to upload. Please try agian";
    }

} else {
    echo "no file GET";
}

?>