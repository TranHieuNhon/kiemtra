<?php
$connection = mysqli_connect('localhost','root','');
if(!$connection){
	die("Not Found!".mysqli_error($connection));
}
$select_db = mysqli_select_db($connection,'ShopPC');
if(!$select_db){
	die("Not Fuond".mysqli_error($connection));
}
mysqli_set_charset($connection,"utf8");
?>