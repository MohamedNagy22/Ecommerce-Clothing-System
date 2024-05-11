<?php 
session_start();
include "../DB/DB_Connection.php";
include "run_prepare.php";
include "validation.php";

if(isset($_POST['signup']) && $_SERVER['REQUEST_METHOD'] == 'POST'){

    foreach($inputs as $input_name => $input_rules){
        $value = filter_input(INPUT_POST , $input_name , $input_rules['filter'] , ['options' => (isset($input_rules['option']) ? $input_rules['option'] : 0)] ) ; 
        if(empty($_POST[$input_name])){
            $error[$input_name]= 'please fill the input'; 
        }elseif($value === false){
            $error[$input_name] = $input_rules['error'];
        }else{
            $data[$input_name]=$value;
        }
    }
    if(isset($error['name']) || isset($error['email']) || isset($error['password']) || isset($error['phone']) || isset($error['address'])){
        $_SESSION['error_signup'] = $error;
        header("location: ../views/signup.php");
    }else{
    //    print_r($data['name']);
    if(count(runPrepare($conn, "SELECT * from users where email = ? OR phone = ?" ,[$data['email'] , $data['phone']],'ss')) >= 1){
        header("location: ../views/signup.php?message=This account is already exist.");
    }else{
        $password = password_hash($data['password'] , PASSWORD_BCRYPT); 
        $query = "INSERT INTO users (name , email , password , phone , address) VALUES (? , ? , ? , ? , ?)";
        $result = runPrepare($conn , $query , [$data['name'] , $data['email'] , $password , $data['phone'] , $data['address']],'sssss');
                if($result === true){
                    header("location: ../views/login.php");
                }else{
                    header("location: ../views/signup.php");
                }
            }
    }
        
    }
?>