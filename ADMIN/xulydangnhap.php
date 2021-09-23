<?php
	include('../connect/connect.php');
	session_start();
	if(!isset($_SESSION['customer']) || empty($_SESSION['customer'])){
	header('location:../login.php');
}
else{
	$name=$_SESSION['customer'];
            $sql="select * from users where email='$name'";
            $res=mysqli_query($connection,$sql);
            while($r=mysqli_fetch_array($res))
          { 
          	 $quyen=$r['type'];      
		  }
		  if ($quyen!="admin") {
		  	header('location:../input.php');
		  }
}
			
?>