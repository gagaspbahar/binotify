<?php

require_once '../../config/config.php';
require_once '../../app/models/Song.php';

$img_dir = "../../public/img/song-cover/";
$target_img_file = $img_dir . basename($_FILES["file"]["name"]);
$saved_img_dir = "public/img/song-cover/" . basename($_FILES["file"]["name"]);

if(isset($_POST['judul']) && isset($_POST['genre']) && isset($_POST['penyanyi']) && isset($_POST['tanggal_terbit']) && isset($_FILES['file'])) {
    $uploadOk = 1;
    $imgFileType = strtolower(pathinfo($target_img_file,PATHINFO_EXTENSION));

    // Check if file already exists 
    if (file_exists($target_img_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["file"]["size"]> 10000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imgFileType != "png" && $imgFileType != "jpeg" && $imgFileType != "jpg") {
        echo "Sorry, only png, jpg & jpeg files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        $st = move_uploaded_file($_FILES["file"]["tmp_name"], $target_img_file);
        
        $album_model = new AlbumModel();
    
        $dataparams = array(
            'judul' => $_POST['judul'],
            'penyanyi' => $_POST['penyanyi'],
            'tanggal_terbit' => $_POST['tanggal_terbit'],
            'genre' => $_POST['genre'],
            'duration' => 0,
            'image_path' => $saved_img_dir
        );
        $rows = $album_model->insertAlbum($dataparams);
    
        if ($rows && $uploadOk == 1) {
            http_response_code(200);
            echo "Album added.";
        } else {
            http_response_code(500);
            echo "Adding album failed";
        }
    }  
} else {
    http_response_code(400);
    echo "Bad request";
}