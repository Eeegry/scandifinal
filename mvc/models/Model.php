<?php

class Model {
  public $connect;
  public $dbServername = "localhost";
  public $dbUsername = "root";
  public $dbPassword = "";
  public $dbName = "scandifinal";
  

  public function __construct(){
    $this->connect = new mysqli($this->dbServername, $this->dbUsername,$this->dbPassword, $this->dbName);
    
    if ($this->connect->connect_error){
      die("Connection failed".$connect->connect_error);
      return $this->connect;
    } else {
      return $this->connect;
    }
  }
    

  public function getData()
  {
    $sql_query = "SELECT * FROM products;";
    $result = mysqli_query($this->connect, $sql_query);
    return $result;
  }

  public function addItem($item)
  {
    switch ($item['category']) {
      case "furniture":
                $product = new Furniture($item['sku'], $item['name'], $item['price'], $item['category'], $item['height'],$item['width'],$item['length']);
                $sql_query = "INSERT INTO products(SKU, name, price, category, height, width, length) VALUES ('$product->sku', '$product->name', '$product->price', '$product->category', '$product->height', '$product->width', '$product->length');";
                mysqli_query($this->connect, $sql_query);
                break;
      case "disc":
                $product = new Disc($item['sku'], $item['name'], $item['price'], $item['category'], $item['size']);
                $sql_query = "INSERT INTO products(SKU, name, price, category, size) VALUES ('$product->sku', '$product->name', '$product->price', '$product->category', '$product->size');";
                mysqli_query($this->connect, $sql_query);
                break;
      case "book":
                $product = new Book($item['sku'], $item['name'], $item['price'], $item['category'], $item['weight']);
                $sql_query = "INSERT INTO products(SKU, name, price, category, weight) VALUES ('$product->sku', '$product->name', '$product->price', '$product->category', '$product->weight');";
                mysqli_query($this->connect, $sql_query);
                break;
      default:
                echo "something went wrong!";
                break;
    }
  }

  public function filterData($category)
  {
    $sql_query = "SELECT * FROM products WHERE category = '$category';";
    $result = mysqli_query($this->connect, $sql_query);
    return $result;
    
  }

  public function deleteItem($SKU)
  {
    $sql_query ="DELETE from products WHERE SKU='$SKU';";
    $result = mysqli_query($this->connect, $sql_query);
    return $result; 
  }
}