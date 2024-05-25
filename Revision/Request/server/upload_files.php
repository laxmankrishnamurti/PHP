<?php

if (isset($_FILES['file'])) {
    $upload_path = './assets/' . $_FILES['file']['name'];
    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_path)) {
        echo "File uploaded successfully";
    } else {
        echo "Failed to upload";
    }
} else {
    echo "No file is selected";
}

echo "<br/>";

if (isset($_POST["button"])) {
    setcookie("username", "laxman", time() + (86400), true);
    btnClicked();

    echo "<br/>";

    if (($_COOKIE["username"])) {
        echo "Cookie value is : " . $_COOKIE["username"];
    }
}

function btnClicked()
{
    echo "Button clicked function called";
}