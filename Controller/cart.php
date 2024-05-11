<?php
session_start();


if(isset($_POST['addcart']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $img = $_POST['img'];
  
      $data = [
          'id'=>$id,
          'title'=>$title,
          'description'=>$description,
          'price'=>$price,
          'quantity'=>$quantity,
          'img'=>$img
      
      ]; 
  }

if($quantity < 1){
    echo'he';
    header("location: ../views/shop.php?message=Choose the quantity");
}else{
   
  if(!isset($_SESSION['data'])){
    $_SESSION['data']=[ ];
  }
  
  if(isset($_SESSION['data'])){
    if(!in_array($data, $_SESSION['data'])){
      $_SESSION['data'][]=$data; }
    }else{
    $_SESSION['data']=$data;
  }
  header("location: ../views/shop.php");  
}
//   echo "<pre>";
//   print_r($_SESSION['data']);
//  echo "</pre>";
// $value = (isset($_SESSION['data'])) ? ((!in_array($data,$_SESSION['data']))? $_SESSION['data'][]=$data :'') : $_SESSION['data'] = $data ;
// header("location: ../views/shop.php");

if(isset($_POST['delete_cart']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
   $deleted_id = $_POST['array_key'];
//    echo $deleted_id;
    unset($_SESSION['data'][$deleted_id]);
    $_SESSION['data']=  array_filter($_SESSION['data']);
    $_SESSION['data']=  array_values($_SESSION['data']);
    // echo "<pre>";
    // print_r($_SESSION['data']);
    // echo "</pre>";
    header("location: ../views/cart.php");

}
?>