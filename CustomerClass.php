<?php
class Customer{

    public $con;
    public function __construct(){  
    $this->con=new mysqli('localhost','root','','moviedb');

    }
    public function insertRegister($fname,$phone,$pwd,$email,$address,$country,$dob){
        $encpwd=md5($pwd);
        $sql="INSERT INTO customers(customer_name,phone_number,pass,email,customer_address,country,date_of_birth) VALUES('$fname','$phone','$encpwd','$email','$address','$country','$dob')";
        
        $output=$this->con->query($sql);
        if($output){
            $msg= "<div class='alert alert-success text-center'>You account has been successfully created</div>";
        }
        else{
            $msg="<div class='alert alert-danger  text-center'>You have an account on this page before, please try and login</div>";
        }
        return $msg;
        }
        function login($email,$password){
            $enc=md5($password);
            $q="SELECT * FROM customers WHERE email='$email' AND pass='$enc'";
            $result=$this->con->query($q);
            if($result->num_rows > 0) {
                //				if (is_array ($row)) {
                                $row = $result->fetch_array();
                              
                       if($row){
                           $user_id=$row['id'];
                           return $user_id;
                       }
                       else{
                           return 0;
                       }
        }
        }

        //method to upload your profile 

        public function  updateUser($Id,$fname,$phone,$address,$country){
			
            $sql = "UPDATE customers SET customer_name='$fname',phone_number='$phone',customer_address='$address',country='$country' where id='$Id'";    
            $result = $this->con->query($sql);
           if($result){
               return true;
           }
           return false;
                
            }
            //fetching all customers details based on their Id
            public function getDetails($id) {
                $sql = "SELECT * FROM customers WHERE id = '$id'";
                
                $result = $this->con->query ($sql);
               
                $row = $result->fetch_assoc();
                
                return $row;
            }
            
function logout(){
    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
    session_destroy ();
    
    header ("Location: index.php");
}
 

}

?>