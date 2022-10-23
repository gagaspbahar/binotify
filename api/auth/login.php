<?php

require_once '../../config/config.php';
require_once '../../app/core/App.php';
require_once '../../app/core/Database.php';

if (isset($_POST['username'])) {
  $db = new Database();
  $username = $_POST['username'];
  $password = $_POST['password'];


  $query = "SELECT * FROM users WHERE username = :username";
  $db->query($query);
  $db->bind('username', $username);
  $result = $db->single();

  
  if (password_verify($password, $result['password'])) {
    // TODO: Benerin cookie biar gaada password atau bikin session
    setcookie('user', json_encode($result), time() + 3600, '/');
    echo "Hello, " . json_decode($_COOKIE['user'])->username;
    header('Location: ../../?home');
  } else {
    echo "Login Failed";
  }
}