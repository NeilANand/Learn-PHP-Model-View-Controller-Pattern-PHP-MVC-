<?php
class Home extends Controller{
  public function index($name = ""){
    $user = $this->model("user");

    var_dump($user);

    $this->view("home/index", [
      "name" => $name
    ]);
  }
}
