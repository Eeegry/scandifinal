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
      //echo "Connected successfully!";
      return $this->connect;
    }
  }
    

  public function getData()
  {
    $sql_query = "SELECT * FROM products;";
    $result = mysqli_query($this->connect, $sql_query);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo $row['name'];
      }
    }
  }

  public function getItem($SKU)
  {
    //select * from products where id = id;
    $sql_query = "SELECT * FROM products WHERE SKU=$SKU;";
    $result = mysqli_query($this->connect, $sql_query);
    
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck < 1) {
        return "No products found";
    } else {
    return $result;
    }
  }

  public function addItem($SKU, $name, $price)
  {
    //insert into products (sku, name) VALUES (values)
    $sql_query ="INSERT into products (SKU, name, price) VALUES ('$SKU', '$name', '$price');";
    if (isset($_POST['save'])) {
      if ($this->connect->query($sql_query) === FALSE) {
          echo 'Error: '. $sql_query."<br>".$this->connect->error;
        }
        else {
          
      }
    }
  }

  public function addFurniture($SKU, $height, $width, $length)
  {
    
    $sql_query ="INSERT into furniture (SKU, height, width, length) VALUES ('$SKU', '$height', '$width', '$length');";
    if (isset($_POST['save'])) {
      if ($this->connect->query($sql_query) === FALSE) {
          echo 'Error: '. $sql_query."<br>".$this->connect->error;
        }
        else {
      }
    }
  }

  public function addDisc($SKU, $size)
  {
    
    $sql_query ="INSERT into disc (SKU, size) VALUES ('$SKU', '$size');";
    if (isset($_POST['save'])) {
      if ($this->connect->query($sql_query) === FALSE) {
          echo 'Error: '. $sql_query."<br>".$this->connect->error;
        }
        else {

      }
    }
  }


  public function addBook($SKU, $weight)
  {
    
    $sql_query ="INSERT into book (SKU, weight) VALUES ('$SKU', '$weight');";
    if (isset($_POST['save'])) {
      if ($this->connect->query($sql_query) === FALSE) {
          echo 'Error: '. $sql_query."<br>".$this->connect->error;
        }
        else {

      }
    }
  }


  public function deleteItem($SKU)
  {
    //insert into products (sku, name) VALUES (values)
    $sql_query ="DELETE from products WHERE SKU=$SKU;";

    if ($this->connect->query($sql_query) === TRUE) {
      }
      else {
        echo 'Error: '. $this->connect->error;
      }
  }
}