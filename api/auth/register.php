<?php

require_once '../../config/config.php';
require_once '../../app/core/App.php';
require_once '../../app/core/Database.php';

if (isset($_POST['username'])) {
  $db = new Database();

  $query = "INSERT INTO users (email, username, password, is_admin) values (:email, :username, :password, false)";
  $db->query($query);
  $db->bind('email', $_POST['email']);
  $db->bind('username', $_POST['username']);
  $db->bind('password', password_hash($_POST['password'], PASSWORD_DEFAULT));

  if ($db->execute()){
    echo "Register Success";
    header('Location: ../../?login');
  } else {
    echo "Register Failed";
  }
}