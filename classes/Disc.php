<?php 
require_once 'Product.php';
class Disc extends Product {

    public $size;
    
    public function __construct($sku, $name, $price, $category, $size)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->size = $size;
        
    }

    
}