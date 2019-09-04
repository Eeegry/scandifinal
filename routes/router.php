<?php 

class Router {
  
  function __construct () {
    define("URI", $_SERVER['REQUEST_URI']);
    define("ROOT", $_SERVER['DOCUMENT_ROOT']);
  }


  function start() {
    $url = explode('/', URI);
    $route = $url[2];
    $class_name = explode('.php', $route)[0];
    
    if ($route == 'product_add.php') {
      $file_path = "mvc/controllers/$route";
    } else {
      $file_path = "mvc/controllers/index.php";
      $class_name = "index";
    } 
    require_once($file_path);
    
    $controller = new $class_name;

  }
}
