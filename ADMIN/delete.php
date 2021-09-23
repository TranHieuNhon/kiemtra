<?php
	include('../connect/connect.php');
	$id=$_GET['id'];
	$sql="DELETE from products WHERE id='$id'";
    mysqli_query($connection,$sql);
    header('Location: admin_product.php')
?>
