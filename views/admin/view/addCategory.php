<?php
session_start();
// include_once "../../../Controller/addcategory.php";
include "../view/header.php";
include "../view/sidebar.php";
include "../view/navbar.php";


// if(isset($_POST['addCategory']) && $_SERVER['REQUEST_METHOD']=='POST' ){
//   // $cat = htmlspecialchars($_POST['name']);
//   // if(count(runPrepare($con , "SELECT * FROM categories Where name = ?" , [$cat] , 's'))>=1){
//   //   echo "you are already exist";
//   //   }else{
//   //     $value = runPrepare($conn , "INSERT INTO categories (name) VALUES (?) ", [$cat] , 's');
//   //     echo $value;
//   //   }
//   echo 'thaks';
//   }




?>


      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">

              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Add Category</h3>
                <form method="POST" action="../../../Controller/addcategory.php">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="category" class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="addCategory" class="btn btn-primary btn-block enter-btn">Add</button>
                  </div>
                  <?php if(isset($_SESSION['x']) && $_SESSION['x']==='false' ){ ?>
                    <span style="color: red; display: inline-block; text-align: center;width: 100%;"> <?php   echo 'This input already token before'; ?> </span>
                    <?php }elseif(isset($_SESSION['x']) && $_SESSION['x'] ==='true'){ ?>
                      <span style="color: Green;display: inline-block; text-align: center;width: 100%;"> <?php   echo 'Success'; ?> </span>
                  <?php }; ?>
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

<?php 
include "../view/footer.php";
 ?>