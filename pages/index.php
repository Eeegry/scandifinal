<nav class="navbar navbar-light bg-light navbar-expand-lg">
  <div class="navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="product_add.php" class="nav-link">Add products</a>
      </li>
    </ul>
  </div>
  <form method="post" class="w-25 d-flex">
    <select name="category" class="form-control">
      <option value="All">All categories</option>
      <option value="disc">Disc</option>
      <option value="book">Book</option>
      <option value="furniture">Furniture</option>
      <option value="delete">Delete</option>
    </select>
    <input name="Ok" value="Ok" type="submit" class="btn btn-primary ml-2">
  </form>
</nav>
<div class="container mt-5">
  <h1 class="my-3 text-center d-block">Products</h1>
  <div class="row">
    <?php foreach ($data as $item) : ?>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12">
        <div class="card" style="height: 200px">
          <div class="card-body">
            <h5 class="card-title"><?php echo "<input type='checkbox' name='checkbox[]' value=" . $item['SKU'] . ">" ?></h5>
            <h5 class="card-title"><?= $item['name'] ?></h5>
            <p class="card-text">
              <?php
                if ($item['category'] == "disc") {
                  echo "Size: " . $item['size'] . " Mb";
                } elseif ($item['category'] == "book") {
                  echo "Weight: " . $item['weight'] . " Kg";
                } elseif ($item['category'] == "furniture") {
                  echo "Dimensions: " . $item['height'] . "x" . $item['width'] . "x" . $item['length'];
                }
                ?>
            </p>
            <p class="card-text"><?= $item['price'] . " $" ?></p>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>