<?php 
require_once 'Product.php';
class Disc extends Product {

    public $size;
    
    public function __construct($SKU, $name, $category, $price)
    {
        $model = new Model();
        $model->addDisc($SKU, $height, $width, $length);
    }

    
}