<?php 
session_start(); 
include "../DB/DB_Connection.php";
include "validation.php";
include "run_prepare.php";

if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] == 'POST'){

foreach ($inputs as $input_name => $input_rules){
$value = filter_input(INPUT_POST , $input_name , $input_rules['filter'] ,  ['options' => (isset($input_rules['option']) ? $input_rules['option'] : 0)] );

if(empty($_POST[$input_name])){
    $error[$input_name] = 'please fill this input';
}elseif ($value === false){
    $error[$input_name] = $input_rules['error'];
}else{
    $data[] = $value;
    
}

}

if(isset($error['email']) && isset($error['password'])){     // Validation Check
    $_SESSION['error_login'] = $error;
    header("location: ../views/login.php");
}else{

$value = runprepare($conn , "SELECT password,id,role from users where email = ? ", [$data[0]] , 's'); //return password + id + role of the user
// print_r($value);
$check_pass = password_verify($data[1],$value[0]['password']);

if($check_pass){
    $_SESSION['login'] = true;
    $_SESSION['user_id'] = $value[0]['id'];
    if($value[0]['role'] == 'user'){                       //checking the role ->admin or user
    header("location: ../views/shop.php");
    }else{
        header("location: ../views/admin/view/layout.php");      
    }
}else{
    header("location: ../views/login.php");
}
}
}

?>