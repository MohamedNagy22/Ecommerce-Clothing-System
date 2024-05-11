<?php
function runPrepare($conn , $query , $parameter = [] , $type = ' '){
    $stmt = mysqli_prepare($conn , $query);
    if($stmt === false){
        return false;
    }
    if(isset($parameter) && !empty($parameter)){
        $db = mysqli_stmt_bind_param($stmt , $type , ...$parameter);
    }
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if($result === false){
        return true;   //insert
    }else{
    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $row;
    }
}







?>