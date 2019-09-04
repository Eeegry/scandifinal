<?php 
require_once 'Product.php';
class Book extends Product {

  public $weight;
    
  public function __construct($SKU, $name, $category, $price)
  {
    $model = new Model();
    $model->addBook($SKU, $height, $width, $length);
  }
}