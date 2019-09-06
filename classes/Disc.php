<?php 
require_once 'Product.php';
class Disc extends Product {

    public $size;
    
    public function __construct($SKU, $size)
    {
        $model = new Model();
        $model->addDisc($SKU, $size);
    }

    
}