<?php
require_once "Controller.php";
require_once "mvc/models/Model.php";
require_once 'mvc/views/View.php';

class product_add extends Controller{


  public function __construct() 
  {
    $this->view = new View();
    
    $this->render_view('pages/product_add.php');

    
    if (!isset($_POST["save"]) && empty($_POST["save"])) {
      echo "No";
    } else {  
      $SKU = $_POST['SKU'];
      $name = $_POST['name'];
      $category = $_POST['category']; 
      $price = $_POST['price'];
      $height = $_POST['height'];
      $width = $_POST['width']; 
      $length = $_POST['length'];
           
      $product = new Product($SKU, $name, $category, $price);
      $furniture = new Furniture($SKU, $height, $width, $length);
      print_r($product);
      

      
      
    }
  }

  
}