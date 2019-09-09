<?php 
  /* $cards = [
    [ 'title' => 'Title 1' ],
    [ 'title' => 'Title 2' ],
    [ 'title' => 'Title 3' ]
  ] */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- TODO: Delete after routing set up -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    <input name="Ok" value="Ok" type="submit" class="btn btn-primary">
  </form>
  <hr/>
<div class="container">
  <div class="row">
    <?php foreach($cards as $card): ?>
      <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $card['title'] ?></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      </div>
    <?php endforeach ?>
  </div>
</div>
<footer class="footer">
  <a href="product_add.php">Add a new product</a>
  <hr/>
</footer>
</body>
</html>