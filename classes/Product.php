<?php 
include 'Furniture.php';
 class Product {
    public $SKU;
    public $name;
    public $category;
    public $price;

    public function __construct($SKU, $name, $price, $category)
    {
        $model = new Model();
        $model->addItem($SKU, $name, $price, $category);
    }

   

}