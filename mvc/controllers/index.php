<?php
include 'Controller.php';
require_once 'mvc/views/View.php';
require_once 'mvc/models/Model.php';

class index extends Controller{
  public function __construct() 
  { 
    $this->view = new View();
    $this->model = new Model();



    if (!isset($_POST["Ok"]) && empty($_POST["Ok"])) {
      $data = $this->model->getData();
      $this->render_view("pages/index.php", $data);
    } else {
      $category = $_POST['category'];
      if (($category == "book") or ($category == "furniture") or ($category == "disc")){
        $data = $this->model->filterData($category);
        $this->render_view("pages/index.php", $data);
      } else if ($category == "All") {
        $data = $this->model->getData();
        $this->render_view("pages/index.php", $data);
      } else if ($category == "delete"){
        if(!empty($_POST['checkbox'])){
          foreach($_POST['checkbox'] as $SKU){
            $this->model->deleteItem($SKU);
            continue;
          }
          $data = $this->model->getData();
          $this->render_view("pages/index.php", $data);
        } else {
          $data = $this->model->getData();
          $this->render_view("pages/index.php", $data);
        }
      }

    }
  }
}