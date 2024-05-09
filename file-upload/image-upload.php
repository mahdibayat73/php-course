<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $file = $_FILES["fileToUpload"];
    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowedExt = ["jpg", "jpeg", "png"];

    if ( in_array( $fileActualExt, $allowedExt ) ) {
        if ( $fileError === 0 ) {
            if ( $fileSize < 500000 ) {
                $fileNewName = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = "uploads/" . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "Upload success!";
            } else {
                echo "Your file is too large!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}
