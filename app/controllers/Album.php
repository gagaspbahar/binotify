<?php

class Album extends Controller {
  public function index() {
    $this->view('album/index');
  }
  public function add() {
    if(isset($_SESSION['is_admin'])){
      if ($_SESSION['is_admin'] == 1) {
        $this->view('album/add');
      } else {
        header('Location: /?home');
      }
    }
    else {
      header('Location: /?home');
    }
  }

  public function detail($id) {
    $this->view('album/detail', array('id' => $id));
  }
}