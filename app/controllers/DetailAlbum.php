<?php

class DetailAlbum extends Controller {
  public function index($id = 0) {
    $this->view('detailalbum/index', array('id' => $id));
  }
}