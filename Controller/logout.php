<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login'] === true){
    unset($_SESSION['login']);
    header("location: ../views/login.php");
}



?>