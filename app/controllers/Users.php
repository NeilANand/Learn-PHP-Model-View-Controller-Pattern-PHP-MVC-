<?php
class Users extends Controller{
  public function get($id = null){
    $userModel = $this->model("user");

    var_dump($userModel);
  }
}
