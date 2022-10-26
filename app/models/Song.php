<?php

require_once '../../config/config.php';
require_once '../../app/core/Database.php';

class SongModel
{
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

  public function findSong($data)
  {
    $query = "SELECT * FROM songs";
    $where = false;
    if (isset($data['judul'])) {
      $query .= " WHERE LOWER(judul) LIKE :judul";
      $where = true;
      error_log(print_r($query, TRUE));
    }
    if (isset($data['genre'])) {
      if ($where) {
        $query .= " AND genre = :genre";
      } else {
        $query .= " WHERE genre = :genre";
        $where = true;
      }
    }
    if (!isset($data['sort'])) {
      $query .= " ORDER BY judul";
    } else {
      $sign = array_shift($data['sort']);
      if ($data['sort'] == 'judul') {
        $query .= " ORDER BY judul";
      } else if ($data['sort'] == 'tanggal_terbit') {
        $query .= " ORDER BY tanggal_terbit";
        if ($sign == '-') {
          $query .= " DESC";
        } else {
          $query .= " ASC";
        }
      }
    }

    $query .= " LIMIT 5";

    if (isset($data['page'])) {
      $query .= " OFFSET :offset";
    }
    
    $this->db->query($query);
    if (isset($data['judul'])) {
      $this->db->bind('judul', '%' . $data['judul'] . '%');
    }
    if (isset($data['genre'])) {
      $this->db->bind('genre', $data['genre']);
    }
    if (isset($data['page'])) {
      $this->db->bind('offset', $data['limit'] * ($data['page'] - 1));
    }
    $this->db->execute();

    return $this->db->resultSet();
  }
}
