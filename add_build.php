<?php
include('connect/connect.php');
session_start();
if (isset($_GET['CPU']) & !empty($_GET['CPU'])) {
	$item = $_GET['CPU'];
	if (isset($_GET['quanlity_CPU']) & !empty($_GET['quanlity_CPU'])) {
		$quanlity = $_GET['quanlity_CPU'];
	} else {
		$quanlity = +1;
	}
	if (isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		foreach ($cart as $key => $value) {
			if ($key == $item)
				$quanlity = $quanlity;
		}
	}
	$_SESSION['cart'] [$item] = $quanlity;	
}

if (isset($_GET['MAIN']) & !empty($_GET['MAIN'])) {
	$item = $_GET['MAIN'];
	if (isset($_GET['quanlity_MAIN']) & !empty($_GET['quanlity_MAIN'])) {
		$quanlity = $_GET['quanlity_MAIN'];
	} else {
		$quanlity = +1;
	}
	if (isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		foreach ($cart as $key => $value) {
			if ($key == $item)
				$quanlity = $quanlity;
		}
	}
	$_SESSION['cart'] [$item] = $quanlity;	
}

if (isset($_GET['RAM']) & !empty($_GET['RAM'])) {
	$item = $_GET['RAM'];
	if (isset($_GET['quanlity_RAM']) & !empty($_GET['quanlity_RAM'])) {
		$quanlity = $_GET['quanlity_RAM'];
	} else {
		$quanlity = +1;
	}
	if (isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		foreach ($cart as $key => $value) {
			if ($key == $item)
				$quanlity = $quanlity;
		}
	}
	$_SESSION['cart'] [$item] = $quanlity;	
}

if (isset($_GET['HDD']) & !empty($_GET['HDD'])) {
	$item = $_GET['HDD'];
	if (isset($_GET['quanlity_HDD']) & !empty($_GET['quanlity_HDD'])) {
		$quanlity = $_GET['quanlity_HDD'];
	} else {
		$quanlity = +1;
	}
	if (isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		foreach ($cart as $key => $value) {
			if ($key == $item)
				$quanlity = $quanlity;
		}
	}
	$_SESSION['cart'] [$item] = $quanlity;	
}

if (isset($_GET['SSD']) & !empty($_GET['SSD'])) {
	$item = $_GET['SSD'];
	if (isset($_GET['quanlity_SSD']) & !empty($_GET['quanlity_SSD'])) {
		$quanlity = $_GET['quanlity_SSD'];
	} else {
		$quanlity = +1;
	}
	if (isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		foreach ($cart as $key => $value) {
			if ($key == $item)
				$quanlity = $quanlity;
		}
	}
	$_SESSION['cart'] [$item] = $quanlity;	
}

if (isset($_GET['VGA']) & !empty($_GET['VGA'])) {
	$item = $_GET['VGA'];
	if (isset($_GET['quanlity_VGA']) & !empty($_GET['quanlity_VGA'])) {
		$quanlity = $_GET['quanlity_VGA'];
	} else {
		$quanlity = +1;
	}
	if (isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		foreach ($cart as $key => $value) {
			if ($key == $item)
				$quanlity = $quanlity;
		}
	}
	$_SESSION['cart'] [$item] = $quanlity;	
}
if (isset($_GET['PSU']) & !empty($_GET['PSU'])) {
	$item = $_GET['PSU'];
	if (isset($_GET['quanlity_PSU']) & !empty($_GET['quanlity_PSU'])) {
		$quanlity = $_GET['quanlity_PSU'];
	} else {
		$quanlity = +1;
	}
	if (isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		foreach ($cart as $key => $value) {
			if ($key == $item)
				$quanlity = $quanlity;
		}
	}
	$_SESSION['cart'] [$item] = $quanlity;	
}


if (isset($_GET['CASE']) & !empty($_GET['CASE'])) {
	$item = $_GET['CASE'];
	if (isset($_GET['quanlity_CASE']) & !empty($_GET['quanlity_CASE'])) {
		$quanlity = $_GET['quanlity_CASE'];
	} else {
		$quanlity = +1;
	}
	if (isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		foreach ($cart as $key => $value) {
			if ($key == $item)
				$quanlity = $quanlity;
		}
	}
	$_SESSION['cart'] [$item] = $quanlity;	
} 
if (empty($_GET['idbuild'])) {	
	}
	else
	{
		$buildid=$_GET['idbuild'];
	$sql="update `buildpc` SET `CPU`=0,`MAIN`='0',`RAM`='0',`HDD`='0',`SSD`='0',`VGA`='0',`PSU`='0',`CASE`='0',`SL_CPU`='0',`SL_MAIN`='0',`SL_RAM`='0',`SL_HDD`='0',`SL_SSD`='0',`SL_VGA`='0',`SL_PSU`='0',`SL_CASE`='0' WHERE uid='$buildid'; ";
	$res=mysqli_query($connection,$sql);
	}
	header('location:cart.php');
	
?>