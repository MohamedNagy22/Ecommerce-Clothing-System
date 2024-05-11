<?php
include "header.php";
include "navbar.php";

?>
<div class="card-body px-5 py-5" style="background-color:darkgray;">


            
              
                <h3 class="card-title text-left mb-3">Change your password</h3>
                <form action="../Controller/forgetpassword.php" method="post">
                  <div class="form-group">
                    <label>email *</label>
                    <span style="color: red;"><?= (isset($_SESSION['error']['email']) ? $_SESSION['error']['email'] : null) ?> </span>  
                    <input type="text" name="email" class="form-control p_input" >
                  </div>
                  <div class="form-group">
                    <label>New Password *</label>
                    <span style="color: red;"><?= (isset($_SESSION['error']['new_password']) ? $_SESSION['error']['new_password'] : null) ?> </span>  
                    <input type="text" name="new_password" class="form-control p_input" >
                  </div>
                  <div class="form-group">
                    <label>Confirm Password *</label>
                    <span style="color: red;"><?= (isset($_SESSION['error']['confirm_password']) ? $_SESSION['error']['confirm_password'] : null) ?> </span>  
                    <input type="text" name="confirm_password" class="form-control p_input" >
                  </div>
                 
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Confirm</button>
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

