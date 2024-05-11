<?php
session_start();
include "../DB/DB_Connection.php";
include "run_prepare.php";

if(isset($_POST['addCategory']) && $_SERVER['REQUEST_METHOD']=='POST'){
    $cat = htmlspecialchars($_POST['category']);

if(!empty($_POST['category'])){
    if(count(runprepare($conn , "SELECT * FROM categories WHERE name =?" , [$cat] , 's'))>=1){
       $_SESSION['x'] = 'false';        
        header("location: ../views/admin/view/addCategory.php" );
    }else{
        $_SESSION['x']='true'; 
        $value = runprepare($conn , "INSERT INTO categories (name) VALUES (?)" , [$cat] , 's');
        header("location: ../views/admin/view/addCategory.php" );
    }
}else{
    $_SESSION['x']='false'; 
    header("location: ../views/admin/view/addCategory.php" );
}


}

$quer_get_cat='SELECT name from categories';
$_SESSION['all_category'] = runprepare($conn , $quer_get_cat , [], 's');
print_r($_SESSION['all_category']);
?>