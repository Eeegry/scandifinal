<?php 
 class Product {
    public $sku;
    public $name;
    public $category;
    public $price;

    public function __construct($sku, $name, $price, $category)
    {
        $this->$sku = $sku;
        $this->$name = $name;
        $this->$price = $price;
        $this->$category = $category;
    }

   

}