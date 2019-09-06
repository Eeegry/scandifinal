<?php 
require_once 'Product.php';
class Furniture extends Product {

    public $height;
    public $width;
    public $length;
    
    
    public function __construct($SKU, $height, $width, $length)
    {     
        $model = new Model();
        $model->addFurniture($SKU, $height, $width, $length);

        
    }
    
}