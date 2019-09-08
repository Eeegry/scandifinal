<?php 
  require_once 'mvc/models/Model.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product list</title>
</head>
<body>
<h1>Home page</h1>
      <form method="POST">
      <select name="typeswitch">
        <option value="All">All categories</option>
        <option value="disc">Disc</option>
        <option value="book">Book</option>
        <option value="furniture">Furniture</option>
        <option value="delete">Delete</option>
        <option value="mass-delete">Mass Delete!</option>
      </select>
      <input name="Ok" value="Ok" type="submit">
      </form>
<hr/>


<?php
?>

<div class="footer">
  <a href="product_add.php">Add a new product</a>
  <hr/>
</div>

</body>
</html>
