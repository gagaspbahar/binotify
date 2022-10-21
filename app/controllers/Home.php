<?php

class Home extends Controller {
  public function __construct()
  {
    echo "test";
  }
  public function index() {
    $this->view('home/index');
  }
}