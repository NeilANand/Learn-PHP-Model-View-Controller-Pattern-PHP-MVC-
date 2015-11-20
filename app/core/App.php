<?php
class App{
  public function __construct(){
    $url = $this->parseUrl();
  }

  protected function parseUrl(){
    if(isset($_GET["url"])){
      //Splits URL by / & trims off any extra /s (so /test//////testing would be seen as /test/testing by the explode function) and makes sures the URL doesn't contain anything malicious
      return explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
    }
  }
}
