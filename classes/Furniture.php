<?php 
require_once 'Product.php';
class Furniture extends Product {

    public $height;
    public $width;
    public $length;
    
    
    public function __construct($sku, $name, $price, $category, $height, $width, $length)
    {   
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }
    
}