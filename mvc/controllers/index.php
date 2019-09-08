<?php
include 'Controller.php';
require_once 'mvc/views/View.php';
require_once 'mvc/models/Model.php';

class index extends Controller{
  public function __construct() 
  {
    $this->view = new View();
    
    $this->render_view('pages/index.php');

    $model = new Model();

    
    if (!isset($_POST["Ok"]) && empty($_POST["Ok"])) {
    } else {
      $category = $_POST['typeswitch'];
      switch ($category) {
        case "All":
          $model->getFurniture();
          $model->getDisc();
          $model->getBook();
          break;
        case "furniture":
          $model->getFurniture();
          break;
        case "disc":
          $model->getDisc();
          break;
        case "book":
          $model->getBook();
          break;          
        default:
              echo "";
              break;
      }
    }
  }
}