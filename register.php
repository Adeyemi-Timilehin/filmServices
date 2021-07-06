<?php 
require "CustomerClass.php";
$obj=new Customer;

if(isset($_POST)){
    $full=htmlspecialchars(strip_tags($_POST['fullname']));
    $phone=htmlspecialchars(strip_tags($_POST['phone']));
    $password=htmlspecialchars(strip_tags($_POST['password']));
    $address=htmlspecialchars(strip_tags($_POST['address']));
    $email=htmlspecialchars(strip_tags($_POST['email']));
    $country=htmlspecialchars(strip_tags($_POST['country']));
    $dob=htmlspecialchars(strip_tags($_POST['dob']));

    
    $output=$obj->insertRegister($full,$phone,$password,$email,$address,$country,$dob);
    if($output) {
       
        header ("Location: index.php?result='$output'");
    }
}



?>