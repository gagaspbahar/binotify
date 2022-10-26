<?php
// belum paham 
    if(isset($_POST['song_id'])) {
        $song_id = $_POST['song_id'];
        $db = new Database;
        $query = "SELECT * FROM songs WHERE song_id = :song_id";
        $db->query($query);
        $db->bind('song_id', $song_id);
        $song = $db->single();
        echo json_encode($song);
    }
?>