<?php
include "header.php";
include "navbar.php";

?>
<div class="card-body px-5 py-5" style="background-color:darkgray;">


            
              
                <h3 class="card-title text-left mb-3">Login</h3>
                <form action="../Controller/login.php" method="post">
                  <div class="form-group">
                    <label>email *</label>
                    <span style="color: red;"><?= (isset($_SESSION['error_login']['email']) ? $_SESSION['error_login']['email'] : null) ?> </span>
                    <input type="email" name="email" class="form-control p_input" >
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <span style="color: red;"><?= (isset($_SESSION['error_login']['password']) ? $_SESSION['error_login']['password'] : null) ?> </span>  
                    <input type="text" name="password" class="form-control p_input" >
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="forgetPassword.php" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook me-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="signup.php"> Sign Up</a></p>
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


  