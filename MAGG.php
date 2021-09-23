<?php
	include('connect/connect.php');
	$mag=$_POST['MGG'];
	$GIA=$_POST['total'];
	$sql="select * from magg where loaiGG='$mag';";
	$giasale=$GIA;
	$res=mysqli_query($connection,$sql);
	while($r=mysqli_fetch_array($res))
    {
    	if (isset($r['loaiGG'])) {
    		$giasale=$GIA-($GIA*$r['%sale']/100);
    	}
    	else{
    		$giasale=$GIA;

    	}
    }
    header("location:cart.php?sale=$giasale")
?>