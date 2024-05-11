<?php 
include "header.php";
include "navbar.php";
include "../DB/DB_Connection.php";
?>
<?php


$data = mysqli_query($conn , "SELECT * from product");
$all_data = mysqli_fetch_all($data , MYSQLI_ASSOC);
// print_r($all_data);
?>
    <!-- End header -->
    <!-- Start Hero -->

    <section id="page-header">
        <h2>Super value deals</h2>
        <p>Save more woth coupons & up to 70% off!</p>
    </section>

    <!-- End Hero -->



    <!-- Start New Arrival or productCard Features -->
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modren Desgin</p>
        <?php if(isset($_GET['message'])){?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <?php 
         $message = (isset($_GET['message']))? $_GET['message'] : '';
         echo $message; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>
        <div class="pro-container">
        <?php foreach($all_data as $value) {?>            
            <div class="pro">
            <form method="POST" action="../Controller/cart.php" >
                <img src="admin/upload/<?= $value['img'];?>" alt="p1 ">
                <div class="des ">
                    <span><?= $value['title'] ?></span>
                    <h5><?= $value['description'] ?></h5>
                    <div class="star ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                    </div>
                    <h4><?= $value['price'] ?></h4>
                    <input type = "number" name="quantity" min='1' max='30'>
                    <input type="hidden" name='id' value=<?= $value['id'];?> >
                    <input type="hidden" name='title' value=<?= $value['title'];?> >
                    <input type="hidden" name='description' value=<?= $value['description'];?> >
                    <input type="hidden" name='price' value=<?= $value['price'];?> >
                    <input type="hidden" name='img' value=<?= $value['img'];?> >

                    <button type="submit" name="addcart" class="cart"><i class="fas fa-shopping-cart "></i></a></button>
                </div>
                </form>
            </div>
            <?php }?>
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