<?php 
include "header.php";
include "navbar.php";
?>

    
<?php
// echo "<pre>";
// print_r($_SESSION['data']);
// echo "<\pre>";

?>


<section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modren Desgin</p>
        <div class="pro-container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Img</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
    <?php $sum = 0;
    $number=0;?>
  <?php if(isset($_SESSION['data'])){foreach($_SESSION['data'] as $key => $value){ ?>
    <tr>
      <?php
        $sum += $value['price']*$value['quantity'];
      ?>
      <th scope="row"><?= $number+= 1;?></th>
      <td><?= $value['title'];?></td>
      <td><?= $value['description'];?></td>
      <td><?= $value['price'];?></td>
      <td><?= $value['quantity'];?></td>
      <td><img width= "50px"src="admin/upload/<?= $value['img'];?>" > </td>
      <td><form action="../Controller/cart.php" method="post">
      <input type="hidden" name='array_key'  value=<?= $key;?>>
      <button type="submit" name="delete_cart" class="btn btn-danger">Delete</button>
      </form></td>
</tr>
<?php }}?>
  </tbody>
</table>   
<label for="">Total Price = <?= $sum; ?></label>
<form action="payment_method.php" method='post'>
<button type="submit" name="confirm_cart" class="btn btn-primary btn-block enter-btn">Confirm</button>
</form>
            </div>
        </div>
    </section>

    <section id="pagenation" class="section-p1">

        <a href="# ">1</a>
        <a href="# ">2</a>
        <a href="# "><i class="fas fa-long-arrow-alt-right "></i></a>

    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext ">
            <h4>Sign Up For Newletters</h4>
            <p>Get E-mail Updates about our latest shop and <span class="text-warning ">Special Offers.</span></p>
        </div>
        <div class="form ">
            <input type="text " placeholder="Enter Your E-mail... ">
            <button class="normal ">Sign Up</button>
        </div>
    </section>

 
<?php include "footer.php";?>