<?php 
include "views/header.php";
include "views/navbar.php";
?>


    <!-- Start header -->

 
    <!-- End header -->
    <section id="prodeteails" class="section-p1">

        <div class="single-pro-img">
            <img src="img/products/f1.jpg" width="100%" id="mainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>

            </div>

        </div>
        <div class="single-pro-details">
            <h6>Home / T-shirt</h6>
            <h4>Men's fashion T shirt</h4>
            <h2>$139.00</h2>
            <select>
                <option value="">Select Size</option>
                <option value="">X-Small</option>
                <option value="">Small</option>
                <option value="">larg</option>
                <option value="">X-larg</option>
            </select>
            <input type="number" id="" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo animi voluptate dolor aut sed voluptatibus eveniet vel eius perspiciatis natus ipsa consequatur aliquam fugiat quod, inventore deleniti voluptates veritatis magni doloremque rerum sit voluptas adipisci! Eum minus assumenda quaerat repudiandae libero fuga maxime minima doloremque modi numquam expedita, blanditiis iure.</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrival</h2>
        <p>Summer Collection New Modren Desgin</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/n1.jpg" alt="p1">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78</h4>
                    <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/n2.jpg" alt="p1">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78</h4>
                    <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="p1">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78</h4>
                    <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="p1">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78</h4>
                    <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </section>


    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newletters</h4>
            <p>Get E-mail Updates about our latest shop and <span class="text-warning">Special Offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Enter Your E-mail...">
            <button class="normal">Sign Up</button>
        </div>
    </section>


    <?php include "views/footer.php";?>