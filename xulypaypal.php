<?php
	include('connect/connect.php');
	$idorder=$_GET['id'];
	$sql="update `orders` SET `orderstatus`='paid' WHERE id=$idorder";
	mysqli_query($connection,$sql);
	header('location:input.php');
?>