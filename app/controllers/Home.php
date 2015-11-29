<?php
class Home extends Controller{
  public function index($name = "", $mood = ""){
    $user = $this->model("user");

    $user->name = $name;

    $this->view("home/index", [
      "name" => $user->name,
      "mood" => $mood
    ]);
  }
}
