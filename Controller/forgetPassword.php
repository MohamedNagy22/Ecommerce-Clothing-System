<?php 
session_start();
include "validation.php";
include "../DB/DB_Connection.php";
include "run_prepare.php";

if(isset($_POST['submit'])  && $_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach($inputs as $input_name => $input_rules){
        $value = filter_input(INPUT_POST , $input_name , $input_rules['filter'] , ['options' => (isset($input_rules['option']) ? $input_rules['option'] : 0)]);
        if(empty($_POST[$input_name]) ){
            $error[$input_name] = 'please fill in the input';
        }elseif ($value === false){
            $error[$input_name] = $input_rules['error'];
        }else{
            $data[] = $value;
        }

    }
    // print_r($error['new_password']);

 if(isset($error['email']) || isset($error['new_password']) || isset($error['confirm_password'])){
    $_SESSION['error'] = $error;
    print_r($_SESSION['error']['new_password']);
    header("location: ../views/forgetpassword.php");
 }else{
    $query_return_password = "SELECT password from users where email = ?  "; 
    $get_password = runPrepare($conn , $query_return_password , [$data[0]] , 's');
    // print_r($get_email);
    if(!empty($get_password) && $data[1]==$data[2]){
    $query_update_password = "UPDATE users SET password = ? where email= ?";
    $update_password = runprepare($conn , $query_update_password , [password_hash($data[1],PASSWORD_BCRYPT), $data[0]] , 'ss');
    } if($update_password){
        header("location: ../views/login.php");
    }else{
        echo "success";
    }
}

}

?>