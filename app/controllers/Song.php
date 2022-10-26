<?php

class Song extends Controller {
  public function index($id = 0) {
    $this->view('song/index', array('id' => $id));
  }
}