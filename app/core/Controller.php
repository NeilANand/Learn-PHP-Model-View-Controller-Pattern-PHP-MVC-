<?php
class Controller{
  public function view($viewName, $data){
    $view = new View($viewName, $data);

    echo $view;
  }

  public function model($modelName){
    $modelFile = "../app/models/" . ucfirst($modelName) . ".php";

    if(file_exists($modelFile))
      require $modelFile;
    else
      return false;

    return new $modelName();
  }
}
