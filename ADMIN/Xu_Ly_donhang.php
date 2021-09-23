<?php
	include('../connect/connect.php');
	if (isset($_GET['id'])) {
		$idorder=$_GET['id'];
		$sql="select * from orders WHERE id=$idorder";
		$res=mysqli_query($connection,$sql);
		    while($r=mysqli_fetch_array($res))
		    {
		    	$id=$r['id'];
		    	$orderstatus=$r['orderstatus'];
		    	$paymentmode=$r['paymentmode'];
		    	$totalprice=$r['totalprice'];
		    	$uid=$r['uid'];
		    	$sql1="INSERT INTO `historyorder`(`id`, `orderstatus`, `paymentmode`, `totalprice`, `uid`) VALUES ('$id','$orderstatus','$paymentmode','$totalprice','$uid')";
				mysqli_query($connection,$sql1);
		    }
		$sql="select * from orderitems WHERE orderid=$idorder";
		$res=mysqli_query($connection,$sql);
		    while($r=mysqli_fetch_array($res))
		    {
		    	$id=$r['id'];
		    	$pid=$r['pid'];
		    	$pquantity=$r['pquantity'];
		    	$orderid=$r['orderid'];
		    	$productprice=$r['productprice'];
		    	$sql1="INSERT INTO `historyorderitems`(`id`, `pid`, `pquantity`, `orderid`, `productprice`) VALUES ('$id','$pid','$pquantity','$orderid','$productprice')";
				mysqli_query($connection,$sql1);
				$sql2="select AMOUNT FROM products where id=$pid";
				$res2=mysqli_query($connection,$sql2);
			    while($r=mysqli_fetch_array($res2))
			    {
			    	$TONG=$r['AMOUNT'];
			    	$TONKHO=$TONG-$pquantity;
			    	$sql3="update products set AMOUNT=$TONKHO where id=$pid";
					mysqli_query($connection,$sql3);
			    }
		    }
		    $sql="delete from orderitems WHERE orderid=$idorder";
			$res=mysqli_query($connection,$sql);
		 	$sql="delete from orders WHERE id=$idorder";
			$res=mysqli_query($connection,$sql);  
			header('location:admin_order.php'); 
		}
		if (isset($_GET['IDCHECK'])) {
			$IDCHECK=$_GET['IDCHECK'];
			$sql1="select timestamp from historyorder WHERE id=$IDCHECK";
			$res1=mysqli_query($connection,$sql1);
		    while($r=mysqli_fetch_array($res1))
		    {
		    	$time=$r['timestamp'];
		    }
			 echo$sql="update historyorder SET orderstatus='paid',`timestamp`='$time' WHERE id=$IDCHECK";
			$res=mysqli_query($connection,$sql);
			header('location:historyorder.php'); 
		}
	
?>