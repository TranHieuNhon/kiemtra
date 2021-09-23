<?php
include('../connect/connect.php');
	$name=$_POST['Name'];
	$price=$_POST['price'];
	$img=$_POST['img'];
	$category=$_POST['category'];
	$amount=$_POST['amount'];
	$insure=$_POST['INSUARE'];
	//kiem tra khach hang đã có trong usermeta hay chưa
	$sql_addproduct="insert into products(`catid`, `title`, `price`, `image`, `insurance`, `AMOUNT`)
values('$category', '$name','$price','$img','$insure','$amount')";
	mysqli_query($connection,$sql_addproduct);

	$sql1="select id from products where title='$name'";
	$res=mysqli_query($connection,$sql1);
	while($r=mysqli_fetch_array($res))
	{
		$id=$r['id'];
	}
	header('location:ADD_product_info.php?catid='.$category.'&'.'id='.$id);
?>