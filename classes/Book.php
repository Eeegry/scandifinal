<?php 
require_once 'Product.php';
class Book extends Product {

  public $weight;
    
  public function __construct($sku, $name, $price, $category, $weight)
  {
    $this->sku = $sku;
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;
    $this->weight = $weight;
  }
}