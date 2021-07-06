<?php
session_start();
require "CustomerClass.php";
$obj=new Customer;

if(isset($_POST)){
    $Id=$_SESSION['user'];
    $full=htmlspecialchars(strip_tags($_POST['fullname']));
    $phone=htmlspecialchars(strip_tags($_POST['phone']));
    $address=htmlspecialchars(strip_tags($_POST['address']));
    $country=htmlspecialchars(strip_tags($_POST['country']));
    $output=$obj->updateUser($Id,$full,$phone,$address,$country);
    if($output>1) {
       
        header ("Location: manage.php?result='$output'");
    }
}



?>