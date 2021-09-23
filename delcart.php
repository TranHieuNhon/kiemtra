<?php
	session_start();
	if (isset($_GET['remove']) & !empty($_GET['remove']))
	{
		$id=$_GET['remove'];
		unset($_SESSION['cart'][$id]);
		header('location:cart.php');
	}
?>