<?php
class Home extends Controller{
  public function index($name = "", $mood = ""){
    $somethingElse = "123";

    $this->view("home/index", [
      "name" => $name,
      "mood" => $mood,
      "somethingElse" => $somethingElse
    ]);
  }
}
