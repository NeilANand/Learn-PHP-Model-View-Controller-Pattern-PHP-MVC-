<?php
class App{
  protected $controller = "home";
  protected $method = "index";
  protected $params = [];

  public function __construct(){
    $url = $this->parseUrl();

    //$url[0] is the controller name
    if(file_exists("../app/controllers/" . ucfirst($url[0]) . ".php")){
      $this->controller = $url[0];
      unset($url[0]);
    }

    require "../app/controllers/" . ucfirst($this->controller) . ".php";

    //Set the controller parameter of this object to an instantiated controller object
    $this->controller = new $this->controller;

    //$url[1] is the method on the controller to call
    if(isset($url[1])){
      if(method_exists($this->controller, $url[1])){
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    //Check if the URL had any extra parameters to be added
    $this->params = !empty($url) ? array_values($url) : [];

    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  protected function parseUrl(){
    if(isset($_GET["url"])){
      //Splits URL by / & trims off any extra /s (so /test//////testing would be seen as /test/testing by the explode function) and makes sures the URL doesn't contain anything malicious
      return explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
    }
  }
}
