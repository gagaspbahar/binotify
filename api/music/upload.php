<?php

error_reporting(-1);
ini_set('display_errors', 'On');

require_once '../../config/config.php';
require_once '../../app/models/Song.php';


// // FOR USE ON DOCKER ONLY
$song_real_dir = '/var/www/html/public/song/' . $_FILES['file2']['name'];
$img_real_dir = '/var/www/html/public/img/song-cover/' . $_FILES['file']['name'];


$img_dir = "../../public/img/song-cover/";
$target_img_file = $img_dir . basename($_FILES["file"]["name"]);
$saved_img_dir = "public/img/song-cover/" . basename($_FILES["file"]["name"]);

$song_dir = "../../public/song/";
$target_song_file = $song_dir . basename($_FILES["file2"]["name"]);
$saved_song_dir = "public/song/" . basename($_FILES["file2"]["name"]);

error_log(print_r($_FILES, TRUE));

if(isset($_POST['judul']) && isset($_POST['genre']) && isset($_POST['penyanyi']) && isset($_POST['tanggal_terbit'])) {
    $uploadOk = 1;
    $songFileType = strtolower(pathinfo($target_song_file,PATHINFO_EXTENSION));
    $imgFileType = strtolower(pathinfo($target_img_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_song_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    if (file_exists($target_img_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["file"]["size"]> 10000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if ($_FILES["file2"]["size"] > 10000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($songFileType != "mp3" && $songFileType != "wav" && $songFileType != "ogg") {
        echo "Sorry, only mp3, wav & ogg files are allowed.";
        $uploadOk = 0;
    }

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
        $st2 = move_uploaded_file($_FILES["file2"]["tmp_name"], $target_song_file);
        
        $song_model = new SongModel();
    
        $cmd = 'mp3info -p "%S" ' . $target_song_file;
        $duration = intval(exec($cmd));
    
        $dataparams = array(
            'judul' => $_POST['judul'],
            'penyanyi' => $_POST['penyanyi'],
            'tanggal_terbit' => $_POST['tanggal_terbit'],
            'genre' => $_POST['genre'],
            'duration' => $duration,
            'audio_path' => $saved_song_dir,
            'image_path' => $saved_img_dir
        );
        $rows = $song_model->insertSong($dataparams);
    
        if ($rows && $uploadOk == 1) {
            echo "Song uploaded successfully";
        } else {
            echo "Song upload failed";
        }
    }  
}