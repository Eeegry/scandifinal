<?php 
include 'Furniture.php';
 class Product {
    public $SKU;
    public $name;
    public $category;
    public $price;

    public function __construct($SKU, $name, $category, $price)
    {
        $model = new Model();
        $model->addItem($SKU, $name, $category, $price);
    }

   

}