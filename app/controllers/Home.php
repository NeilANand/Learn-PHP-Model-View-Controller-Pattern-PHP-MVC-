<?php
class Home extends Controller{
  public function index($name, $mood){
    $this->view("home/index", []);
  }
}
