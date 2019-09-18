<?php
require_once "Controller.php";
require_once "classes/Book.php";
require_once "classes/Disc.php";
require_once "classes/Furniture.php";
require_once "mvc/models/Model.php";
require_once 'mvc/views/View.php';

class product_add extends Controller{


  public function __construct() 
  {
    $this->view = new View();
    $this->model = new Model();
    
    $this->render_view('pages/product_add.php', "");

    
    if (!isset($_POST["save"]) && empty($_POST["save"])) {
      
    } else {
      $newItem = $_POST;
      $this->model->addItem($newItem);
    }
  }
}