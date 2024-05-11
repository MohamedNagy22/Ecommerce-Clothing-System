
<?php session_start(); ?>
<?php

include "../view/header.php";

include "../view/sidebar.php";
include "../view/navbar.php";
include "../../../DB/DB_Connection.php";
include "../../../Controller/run_prepare.php";

?>

<div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">

<?php
if(isset($_POST['addProduct']))
{
  // extract($_POST);            //hna extract by5zn kol value fe variable bnfs el esm bta3 el input, ex $title=hyt5zn gwaha el input 
  $category = htmlspecialchars($_POST['category']);
  $title = htmlspecialchars($_POST['title']);
  $desc = htmlspecialchars($_POST['desc']);
  $price = htmlspecialchars($_POST['price']);
  $quantity = htmlspecialchars($_POST['quantity']);
  
  $img = $_FILES['img'];
  $imgName = $img['name'];
  $tmpName = $img['tmp_name'];
  $imgSize = $img['size'];
  $imgEx = pathinfo($imgName,PATHINFO_EXTENSION);
  $extension = ['jpg','png','jpeg'];

  //validation
  if($category=="" || $title=="" || $desc=="" || $price=="" || $quantity=="")
  {
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
     all inputs is required
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
     ';
  }elseif(!in_array($imgEx,$extension))
  {
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
     please choose image
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
     ';
  }
  else
  {
    $cat_id = runprepare($conn , "SELECT id from categories where name=?" , [$category],'s');
    // print_r($cat_id[0]['id']);
    if($cat_id){
    $value = runprepare($conn , "INSERT INTO product (category_id,title,description,price,quantity,img) values (?,?,?,?,?,?)" , [$cat_id[0]['id'] , $title , $desc , $price , $quantity, $imgName] , 'isssis');
  
    if($value){
      move_uploaded_file($tmpName,"../upload/$imgName");
      echo 'success';
    }else{
      echo'check the error';
    }
  
  }else{
   echo 'there is category with this name '; 
  }
  }
}

?>

              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Add Product</h3>
                <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Category</label>
                    <input type="text" name="category" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="desc" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="quantity" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="img" class="form-control p_input">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="addProduct" class="btn btn-primary btn-block enter-btn">Add</button>
                  </div>
                
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