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
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="checkbox" id= '.$row['SKU'].'>';
        echo $row['SKU'];
        echo '<br/>';
        echo $row['name'];
        echo '<br/>';
        echo $row['price'];
        echo '<br/>';
        echo '<hr/>';
      }
    }
  }

  public function getFurniture()
  {

    $sql_query = "SELECT * FROM products WHERE category = 'furniture';";
    $result = mysqli_query($this->connect, $sql_query);
    $resultCheck = mysqli_num_rows($result);

    $sql_query_furniture = "SELECT * FROM furniture;";
    $furniture_result = mysqli_query($this->connect, $sql_query_furniture);
    $resultCheck = mysqli_num_rows($furniture_result);
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result) and $furniture_row = mysqli_fetch_assoc($furniture_result)) {
        echo '<input type="checkbox" id= '.$row['SKU'].'>';
        echo $row['SKU'];
        echo '<br/>';
        echo $row['name'];
        echo '<br/>';
        echo $row['price'];
        echo '<br/>';
        echo $furniture_row['height'];
        echo '<br/>';
        echo $furniture_row['width'];
        echo '<br/>';
        echo $furniture_row['length'];
        echo '<br/>';
        echo '<hr/>';
        
      }
    }  
  }


  public function getDisc()
  {

    $sql_query = "SELECT * FROM products WHERE category = 'disc';";
    $result = mysqli_query($this->connect, $sql_query);
    $resultCheck = mysqli_num_rows($result);

    $sql_query_furniture = "SELECT * FROM disc;";
    $furniture_result = mysqli_query($this->connect, $sql_query_furniture);
    $resultCheck = mysqli_num_rows($furniture_result);
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result) and $furniture_row = mysqli_fetch_assoc($furniture_result)) {
        echo '<input type="checkbox" id= '.$row['SKU'].'>';
        echo $row['SKU'];
        echo '<br/>';
        echo $row['name'];
        echo '<br/>';
        echo $row['price'];
        echo '<br/>';
        echo $furniture_row['size'];
        echo '<br/>';
        echo '<hr/>';
        
      }
    }  
  }


  public function getBook()
  {

    $sql_query = "SELECT * FROM products WHERE category = 'book';";
    $result = mysqli_query($this->connect, $sql_query);
    $resultCheck = mysqli_num_rows($result);

    $sql_query_furniture = "SELECT * FROM book;";
    $furniture_result = mysqli_query($this->connect, $sql_query_furniture);
    $resultCheck = mysqli_num_rows($furniture_result);
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result) and $furniture_row = mysqli_fetch_assoc($furniture_result)) {
        echo '<input type="checkbox" id= '.$row['SKU'].'>';
        echo $row['SKU'];
        echo '<br/>';
        echo $row['name'];
        echo '<br/>';
        echo $row['price'];
        echo '<br/>';
        echo $furniture_row['weight'];
        echo '<br/>';
        echo '<hr/>';
        
      }
    }  
  }

  public function getItem($SKU)
  {
    $sql_query = "SELECT * FROM products WHERE SKU=$SKU;";
    $result = mysqli_query($this->connect, $sql_query);
    
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck < 1) {
        return "No products found";
    } else {
        return $result;
    }
  }

  public function addItem($SKU, $name, $price, $category)
  {
    $sql_query ="INSERT into products (SKU, name, price, category) VALUES ('$SKU', '$name', '$price', '$category');";
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