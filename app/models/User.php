<?php

class UserModel {
  private $table = 'users';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getUserByEmail($email)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email = :email');
    $this->db->bind('email', $email);
    return $this->db->single();
  }

  public function getUserByUsername($username)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :username');
    $this->db->bind('username', $username);
    return $this->db->single();
  }

  public function register($data)
  {
    $query = "INSERT INTO users
              VALUES
              (:email, :password, :email, :password)";
    $this->db->query($query);
    $this->db->bind('name', $data['name']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', $data['password']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}