<?php
session_start();

require "CustomerClass.php";
$obj=new Customer;
if(isset($_POST['login'])){
   
    $email=htmlspecialchars(strip_tags($_POST['email']));
    $pass=htmlspecialchars(strip_tags($_POST['pwd']));
   $output= $obj->login($email,$pass);

    if($output>1){
        $_SESSION['user']=$output;
        header("location:manage.php");

    }
    else{
        header("location:login.php?msg='incorrect Password'");
    }
}

?>