<?php 
require_once 'Product.php';
class Book extends Product {

  public $weight;
    
  public function __construct($SKU, $weight)
  {
    $model = new Model();
    $model->addBook($SKU, $weight);
  }
}