<?php
include "header.php";
include "navbar.php";

$error = "please fill in the inputs";
?>

<div class="card-body px-5 py-5" style="background-color:darkgray;">

                <h3 class="card-title text-left mb-3">Register</h3>
                <?php if(isset($_GET['message'])){?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php 
                $message = (isset($_GET['message']))? $_GET['message'] : '';
                echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>
                <form action="../Controller/signup.php" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <span style="color: red;"><?= (isset($_SESSION['error_signup']['name']) ? $_SESSION['error_signup']['name'] : null) ?> </span>
                    <input type="text" class="form-control p_input" name="name" value="">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <span style="color: red;"><?= (isset($_SESSION['error_signup']['email']) ? $_SESSION['error_signup']['email'] : null) ?> </span>
                    <input type="email" class="form-control p_input" name="email">
                </div>
                  <div class="form-group">
                    <label>Password</label>
                    <span style="color: red;"><?= (isset($_SESSION['error_signup']['password']) ? $_SESSION['error_signup']['password'] : null) ?> </span>
                    <input type="text" class="form-control p_input" name="password">
                 </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <span style="color: red;"><?= (isset($_SESSION['error_signup']['phone']) ? $_SESSION['error_signup']['phone'] : null) ?> </span>
                    <input type="text" class="form-control p_input"name="phone">
                 </div>
                  <div class="form-group">
                    <label>Address</label>
                    <span style="color: red;"><?= (isset($_SESSION['error_signup']['address']) ? $_SESSION['error_signup']['address'] : null) ?> </span>
                    <input type="text" class="form-control p_input" name="address">
                  </div>
              
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                     
                  <div class="text-center">
                    <button type="submit" name="signup" class="btn btn-primary btn-block enter-btn">Signup</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook col me-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="login.php"> Login</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <?php include "footer.php" ?>


   