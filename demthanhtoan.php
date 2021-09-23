<?php
include('connect/connect.php');	
	$sql="select * from orders WHERE id = (SELECT MAX(id) FROM orders);";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    { if ($r['paymentmode'] =="cod") {
    	header('location:input.php');
    }
    else
    	header('location:thanhtoan.php');
} 
?>