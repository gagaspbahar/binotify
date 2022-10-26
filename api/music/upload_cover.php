<?php

require_once '../../config/config.php';

$xml = file_get_contents('php://input');

$dir = "../../public/song/song-cover";
$target_file = $dir . basename($_FILES["file"]["name"]);

if(isset($_POST["submit"])){
    $uploadOk = 1;
    $songFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["file"]["size"] > 2000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($songFileType != "png" && $songFileType != "jpg" && $songFileType != "jpeg") {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
