<?php
require_once '../../config/config.php';
require_once '../../app/models/Song.php';

// $img_real_dir = '/var/www/html/public/img/song-cover/' . $_FILES['file']['name'];

// $img_dir = "../../public/img/song-cover/";
// $target_img_file = $img_dir . basename($_FILES["file"]["name"]);
// $saved_img_dir = "public/img/song-cover/" . basename($_FILES["file"]["name"]);

if (isset($_POST['judul']) && isset($_POST['genre']) && isset($_POST['tanggal_terbit'])) {
    $uploadOk = 1;
    $imgFileType = strtolower(pathinfo($target_img_file,PATHINFO_EXTENSION));
    echo "Helo";
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
        echo "Sorry, song edit failed.";
        
    // if everything is ok, try to upload file
    } else {
        $st = move_uploaded_file($_FILES["file"]["tmp_name"], $target_img_file);

        $song_model = new SongModel();
    
        $dataparams = array(
            'judul' => $_POST['judul'],
            'tanggal_terbit' => $_POST['tanggal_terbit'],
            'genre' => $_POST['genre'],
            'image_path' => $saved_img_dir
        );

        $rows = $song_model->editSong($dataparams);
    
        if ($rows && $uploadOk == 1) {
            echo "Song uploaded successfully";
        } else {
            echo "Song upload failed";
        }
    }
}

