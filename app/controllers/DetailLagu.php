<?php

class DetailLagu extends Controller {
  public function index($id) {
    $this->view('detaillagu/index', array('id' => $id));
  }
}