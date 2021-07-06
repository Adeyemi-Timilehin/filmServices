<?php
session_start();
	
	require "CustomerClass.php";
	$obj=new Customer;
	
    $obj->logout();
  require "header.php";
    ?>
     
        <h3>You have successfully logout</h3>
        <a href="index.php">Login</a>
    </body>
    </html>