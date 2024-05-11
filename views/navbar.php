<?php session_start();  ?>
<section id="header">

<a href="index.html">
    <img src="../img/logo.png" alt="homeLogo">
</a>
<div>
    <ul id="navbar">
        <li class="link">
            <a class="active " href="index.php">Home</a>
        </li>
        <li class="link">
            <a href="shop.php">Shop</a>
        </li>
        <li class="link">
            <a href="blog.html">Blog</a>
        </li>
        <li class="link">
            <a href="signup.php">Signup</a>
        </li>
        <?php if(isset($_SESSION['login']) && $_SESSION['login'] === true){  ?>
        <!-- <li class="link">
            <a href="cart.php">Cart</a>
        </li> -->
        <li class="link">
            <a href="../Controller/logout.php">Logout</a>
        </li> 
        <?php }else{ ?>
        <li class="link">
            <a href="login.php">Login</a>
        </li>
        <?php } ?>
        <?php if(isset($_SESSION['login']) && $_SESSION['login'] === true){  ?>
        <li class="link">
            <a id="lg-cart" href="cart.php">
                <i class="fas fa-shopping-cart"></i>
            </a>
        </li>
        <?php } ?>
        <a href="#" id="close"><i class="fas fa-times"></i></a>
    </ul>

</div>
<div id="mobile">
    <a href="cart.html">
        <i class="fas fa-shopping-cart"></i>
    </a>
    <a href="#" id="bar"> <i class="fas fa-outdent"></i> </a>
</div>
</section>