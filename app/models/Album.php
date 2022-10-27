<?php

require_once '../../config/config.php';
require_once '../../app/core/Database.php';

class AlbumModel
{
  private $table = 'albums';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllAlbums()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getAlbumByAlbumId($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE album_id = :id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
