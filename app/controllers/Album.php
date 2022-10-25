<?php

class Album extends Controller {
  public function index() {
    $this->view('album/index');
  }
}