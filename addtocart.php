<?php
session_start();
if (isset($_GET['id']) & !empty($_GET['id'])) {
	$item = $_GET['id'];
	if (isset($_GET['quanlity']) & !empty($_GET['quanlity'])) {
		$quanlity = $_GET['quanlity'];
	} else {
		$quanlity = 1;
	}
	if (isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		foreach ($cart as $key => $value) {
			if ($key == $item)
				$quanlity = $quanlity + $value;
		}
	}
	$_SESSION['cart'] [$item] = $quanlity;
	header('location:cart.php');
	
} else {
	header('location:cart.php');
	}
?>