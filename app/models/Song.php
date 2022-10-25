<?php

class SongModel {
  private $table = 'songs';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllSongs()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getSongById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function addSong($data)
  {
    $query = "INSERT INTO songs
              VALUES
              (:title, :artist, :genre, :year, :album, :lyrics)";
    $this->db->query($query);
    $this->db->bind('title', $data['title']);
    $this->db->bind('artist', $data['artist']);
    $this->db->bind('genre', $data['genre']);
    $this->db->bind('year', $data['year']);
    $this->db->bind('album', $data['album']);
    $this->db->bind('lyrics', $data['lyrics']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteSong($id)
  {
    $query = "DELETE FROM songs WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateSong($data)
  {
    $query = "UPDATE songs SET
                title = :title,
                artist = :artist,
                genre = :genre,
                year = :year,
                album = :album,
                lyrics = :lyrics
              WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('title', $data['title']);
    $this->db->bind('artist', $data['artist']);
    $this->db->bind('genre', $data['genre']);
    $this->db->bind('year', $data['year']);
    $this->db->bind('album', $data['album']);
  }


}

// class SongModel {
//   private $table = 'songs';
//   private $db;
//   private $id;

//   public function __construct()
//   {
//     $this->db = new Database;
//   }

//   public function getSongTitle($judul) {
//     $this->db->query("SELECT * FROM ' . $this->table . ' WHERE id = '$this->id'");
//     $this->db->bind('judul', $judul);
//     return $this->db->single();
//   }

//   public function getSongSinger($penyanyi) {
//     $this->db->query("SELECT * FROM ' . $this->table . ' WHERE id = '$this->id'");
//     $this->db->bind('penyanyi', $penyanyi);
//     return $this->db->single();
//   }

//   public function getSongReleaseDate($tanggal_terbit) {
//     $this->db->query("SELECT * FROM ' . $this->table . ' WHERE id = '$this->id'");
//     $this->db->bind('tanggal_terbit', $tanggal_terbit);
//     return $this->db->single();
//   }

//   public function getSongGenre($genre) {
//     $this->db->query("SELECT * FROM ' . $this->table . ' WHERE id = '$this->id'");
//     $this->db->bind('genre', $genre);
//     return $this->db->single();
//   }

//   public function getSongDuration($duration) {
//     $this->db->query("SELECT * FROM ' . $this->table . ' WHERE id = '$this->id'");
//     $this->db->bind('duration', $duration);
//     return $this->db->single();
//   }

//   public function getSongAudioPath($audio_path) {
//     $this->db->query("SELECT * FROM ' . $this->table . ' WHERE id = '$this->id'");
//     $this->db->bind('audio_path', $audio_path);
//     return $this->db->single();
//   }

//   public function getSongImagePath($image_path) {
//     $this->db->query("SELECT * FROM ' . $this->table . ' WHERE id = '$this->id'");
//     $this->db->bind('image_path', $image_path);
//     return $this->db->single();
//   }

//   public function getSongAlbumID($album_id) {
//     $this->db->query("SELECT * FROM ' . $this->table . ' WHERE id = '$this->id'");
//     $this->db->bind('album_id', $album_id);
//     return $this->db->single();
//   }


// }