
<h1>Home page</h1>
  <form method="POST">
    <select name="category">
      <option value="All">All categories</option>
      <option value="disc">Disc</option>
      <option value="book">Book</option>
      <option value="furniture">Furniture</option>
      <option value="delete">Delete</option>
    </select>
    <input name="Ok" value="Ok" type="submit" class="btn btn-primary">
    <hr/>
    <div class="container">
      <div class="row">
        <?php foreach($data as $item): ?>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?php echo "<input type='checkbox' name='checkbox[]' value=".$item['SKU'].">" ?></h5>
              <h5 class="card-title"><?= $item['SKU'] ?></h5>
              <h5 class="card-text"><?= $item['name'] ?></h5>
              <h5 class="card-text"><?= $item['price']." $" ?></h5>
              <h5 class="card-text">
              <?php 
              if ($item['category'] == "disc") {
                echo $item['size']." Mb"; 
              }elseif($item['category'] == "book") {
                echo $item['weight']." Kg";
              }elseif($item['category'] == "furniture"){
                echo "Dimension: ".$item['height']."x".$item['width']."x".$item['length'];
              }?>
              </h5>
            </div>
          </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </form>
<footer class="footer">
<hr/>
  <a href="product_add.php">Add a new product</a>
  <?php ?>
</footer>