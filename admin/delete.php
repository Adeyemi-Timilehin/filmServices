<?php
require "adminClass.php";
$obj=new Admin;
if(!empty($_GET['result'])){
$id=$_GET['result'];
$obj->deletefilm($id);
}
?>