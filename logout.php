<?php 
session_start();
if (isset($_SESSION['customer']) & isset($_SESSION['customerid'])) {
	unset($_SESSION['customer']);
	unset($_SESSION['customerid']);
	header('location:input.php');
}
?>