<?php
class Users extends Controller{
  public function get($id = null){
    $userModel = $this->model("user");

    $user = null;

    if($id){
      $user = $userModel->find($id);
    }
  }
}
