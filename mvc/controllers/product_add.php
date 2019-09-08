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
    
    $this->render_view('pages/product_add.php');

    
    if (!isset($_POST["save"]) && empty($_POST["save"])) {
      echo "No";
    } else {  
      $SKU      = $_POST['sku'];
      $name     = $_POST['name'];
      $price    = $_POST['price'];
      $category = $_POST['category'];

      switch ($category) {
        case "furniture":
                  $product = new Product($SKU, $name, $price, $category);
                  $height   = $_POST['height'];
                  $width    = $_POST['width']; 
                  $length   = $_POST['length'];
                  $furniture = new Furniture($SKU, $height, $width, $length);
                  break;
        case "disc":
                  $product = new Product($SKU, $name, $price, $category);
                  $size   = $_POST['size'];
                  $disc = new disc($SKU, $size);
                  break;
        case "book":
                  $product = new Product($SKU, $name, $price, $category);
                  $weight   = $_POST['weight'];
                  $book = new Book($SKU, $weight);
                  break;
        default:
                  echo "something went wrong!";
                  break;
      }

      
    }
  }
}