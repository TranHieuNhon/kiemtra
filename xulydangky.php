<?php
require('connect/connect.php');
	if (isset($_POST['loai'])) {
		$loai=($_POST['loai']);
	}
	if (isset($_POST['ngayhethan'])) {
		$ngayhethan=($_POST['ngayhethan']);	}
	if (isset($_POST['username'])) {
		$username=($_POST['username']);
	}
	if (isset($_POST['password'])) {
		$password=($_POST['password']);
	}
	if (isset($_POST['email'])) {
		$email=($_POST['email']);
		if ($email=='') {
			header('location:DANGKY.php?event=2');	
		}
		else{
			$sql="select email from users where email='$email'";
			$res=mysqli_query($connection,$sql);
			$r=mysqli_fetch_array($res);
			if (empty($r)) {
				$sql="INSERT INTO `users`( `type`, `username`, `email`, `pass`, `date_expires`) VALUES ('$loai','$username','$email','$password','$ngayhethan')";
					$res=mysqli_query($connection,$sql);
					$sql1="select id from users where email='$email'";
					$res1=mysqli_query($connection,$sql1);
					while($r=mysqli_fetch_array($res1))
    				{
    					$mailpc=$r['id'];
						$sql1="INSERT INTO `buildpc`( `uid`, `CPU`, `MAIN`, `RAM`, `HDD`, `SSD`, `VGA`, `PSU`, `CASE`, `SL_CPU`) VALUES ('$mailpc','0','0','0','0','0','0','0','0','0')";
						$res=mysqli_query($connection,$sql1);
					}
					header('location:DANGKY.php?event=3');
			}
			else
			{
				header('location:DANGKY.php?event=1');
			}   
		}
	}
		
?>