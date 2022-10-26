<?php

class AddSong extends Controller {
  public function index() {
    if(isset($_SESSION['is_admin'])){
      if ($_SESSION['is_admin'] == 1) {
        $this->view('addsong/index');
      } else {
        header('Location: /?home');
      }
    }
    else {
      header('Location: /?home');
    }
  }
}