<?php
	include('connect/connect.php');
?>
<?php
if (empty($_POST['idbuild'])) {	
	}
	else
	{
		$buildid=$_POST['idbuild'];
	$sql="update `buildpc` SET `CPU`=0,`MAIN`='0',`RAM`='0',`HDD`='0',`SSD`='0',`VGA`='0',`PSU`='0',`CASE`='0',`SL_CPU`='0',`SL_MAIN`='0',`SL_RAM`='0',`SL_HDD`='0',`SL_SSD`='0',`SL_VGA`='0',`SL_PSU`='0',`SL_CASE`='0' WHERE uid='$buildid'; ";
	$res=mysqli_query($connection,$sql);
	}
	
?>

<?php
	$userid=$_POST['UID'];
		
	if (empty($_POST['tenCPU'])) {	
	}
	else
	{
		$tencpu=$_POST['tenCPU'];
	$sql="update `buildpc` SET `CPU`='$tencpu' , `SL_CPU`='1' WHERE uid='$userid';";
	$res=mysqli_query($connection,$sql);
	}
?>

 <?php
	if (empty($_POST['UID_xoa_CPU'])) {		
	}
	else
	{
	$useridxoa=$_POST['UID_xoa_CPU'];
	$sql1="update `buildpc` SET `CPU`='0',`SL_CPU`='0' WHERE uid='$useridxoa';";
	$res=mysqli_query($connection,$sql1);
	}
?>
<?php
		if (empty($_POST['quanlity_cpu'])) {
			
		}
		else{
			$quanlity=$_POST['quanlity_cpu'];
			$sql1="update `buildpc` SET `CPU`='$tencpu',`SL_CPU`='$quanlity' WHERE uid='$userid';";
			$res=mysqli_query($connection,$sql1);
		}
		
	?> 
	<!-- ============================================================================================================================-->
	<?php
	$userid=$_POST['UID'];
		
	if (empty($_POST['tenMAIN'])) {	
	}
	else
	{
		$tenmain=$_POST['tenMAIN'];
	$sql="update `buildpc` SET `MAIN`='$tenmain' , `SL_MAIN`='1' WHERE uid='$userid';";
	$res=mysqli_query($connection,$sql);
	}
?>

 <?php
	if (empty($_POST['UID_xoa_MAIN'])) {		
	}
	else
	{
	$useridxoa=$_POST['UID_xoa_MAIN'];
	$sql1="update `buildpc` SET `MAIN`='0',`SL_MAIN`='0' WHERE uid='$useridxoa';";
	$res=mysqli_query($connection,$sql1);
	}
?>
<?php
		if (empty($_POST['quanlity_MAIN'])) {
			
		}
		else{
			$quanlity_MAIN=$_POST['quanlity_MAIN'];
			$sql1="update `buildpc` SET `MAIN`='$tenmain',`SL_MAIN`='$quanlity_MAIN' WHERE uid='$userid';";
			$res=mysqli_query($connection,$sql1);
		}
		
	?> 
	<!-- ============================================================================================================================-->
	<?php
	$userid=$_POST['UID'];
		
	if (empty($_POST['tenRAM'])) {	
	}
	else
	{
		$tenRAM=$_POST['tenRAM'];
	$sql="update `buildpc` SET `RAM`='$tenRAM' , `SL_RAM`='1' WHERE uid='$userid';";
	$res=mysqli_query($connection,$sql);
	}
?>

 <?php
	if (empty($_POST['UID_xoa_RAM'])) {		
	}
	else
	{
	$useridxoa=$_POST['UID_xoa_RAM'];
	$sql1="update `buildpc` SET `RAM`='0',`SL_RAM`='0' WHERE uid='$useridxoa';";
	$res=mysqli_query($connection,$sql1);
	}
?>
<?php
		if (empty($_POST['quanlity_RAM'])) {
			
		}
		else{
			$quanlity_RAM=$_POST['quanlity_RAM'];
			$sql1="update `buildpc` SET `RAM`='$tenRAM',`SL_RAM`='$quanlity_RAM' WHERE uid='$userid';";
			$res=mysqli_query($connection,$sql1);
		}
		
	?> 
	<!-- ===========================================================================================================================-->
	<?php
	$userid=$_POST['UID'];
		
	if (empty($_POST['tenHDD'])) {	
	}
	else
	{
		$tenHDD=$_POST['tenHDD'];
	$sql="update `buildpc` SET `HDD`='$tenHDD' , `SL_HDD`='1' WHERE uid='$userid';";
	$res=mysqli_query($connection,$sql);
	}
?>

 <?php
	if (empty($_POST['UID_xoa_HDD'])) {		
	}
	else
	{
	$useridxoa=$_POST['UID_xoa_HDD'];
	$sql1="update `buildpc` SET `HDD`='0',`SL_HDD`='0' WHERE uid='$useridxoa';";
	$res=mysqli_query($connection,$sql1);
	}
?>
<?php
		if (empty($_POST['quanlity_HDD'])) {
			
		}
		else{
			$quanlity_HDD=$_POST['quanlity_HDD'];
			$sql1="update `buildpc` SET `HDD`='$tenHDD',`SL_HDD`='$quanlity_HDD' WHERE uid='$userid';";
			$res=mysqli_query($connection,$sql1);
		}
		
	?> 
	<!-- =======================================================================================================================-->
	<?php
	$userid=$_POST['UID'];
		
	if (empty($_POST['tenSSD'])) {	
	}
	else
	{
		$tenSSD=$_POST['tenSSD'];
	$sql="update `buildpc` SET `SSD`='$tenSSD' , `SL_SSD`='1' WHERE uid='$userid';";
	$res=mysqli_query($connection,$sql);
	}
?>

 <?php
	if (empty($_POST['UID_xoa_SSD'])) {		
	}
	else
	{
	$useridxoa=$_POST['UID_xoa_SSD'];
	$sql1="update `buildpc` SET `SSD`='0',`SL_SSD`='0' WHERE uid='$useridxoa';";
	$res=mysqli_query($connection,$sql1);
	}
?>
<?php
		if (empty($_POST['quanlity_SSD'])) {
			
		}
		else{
			$quanlity_SSD=$_POST['quanlity_SSD'];
			$sql1="update `buildpc` SET `SSD`='$tenSSD',`SL_SSD`='$quanlity_SSD' WHERE uid='$userid';";
			$res=mysqli_query($connection,$sql1);
		}
		
	?> 
	<!-- =========================================================================================================================-->
	<?php
	$userid=$_POST['UID'];
		
	if (empty($_POST['tenVGA'])) {	
	}
	else
	{
		$tenVGA=$_POST['tenVGA'];
	$sql="update `buildpc` SET `VGA`='$tenVGA' , `SL_VGA`='1' WHERE uid='$userid';";
	$res=mysqli_query($connection,$sql);
	}
?>

 <?php
	if (empty($_POST['UID_xoa_VGA'])) {		
	}
	else
	{
	$useridxoa=$_POST['UID_xoa_VGA'];
	$sql1="update `buildpc` SET `VGA`='0',`SL_VGA`='0' WHERE uid='$useridxoa';";
	$res=mysqli_query($connection,$sql1);
	}
?>
<?php
		if (empty($_POST['quanlity_VGA'])) {
			
		}
		else{
			$quanlity_VGA=$_POST['quanlity_VGA'];
			$sql1="update `buildpc` SET `VGA`='$tenVGA',`SL_VGA`='$quanlity_VGA' WHERE uid='$userid';";
			$res=mysqli_query($connection,$sql1);
		}
		
	?> 
	<!-- =========================================================================================================================-->
	<?php
	$userid=$_POST['UID'];
		
	if (empty($_POST['tenPSU'])) {	
	}
	else
	{
		$tenPSU=$_POST['tenPSU'];
	$sql="update `buildpc` SET `PSU`='$tenPSU' , `SL_PSU`='1' WHERE uid='$userid';";
	$res=mysqli_query($connection,$sql);
	}
?>

 <?php
	if (empty($_POST['UID_xoa_PSU'])) {		
	}
	else
	{
	$useridxoa=$_POST['UID_xoa_PSU'];
	$sql1="update `buildpc` SET `PSU`='0',`SL_PSU`='0' WHERE uid='$useridxoa';";
	$res=mysqli_query($connection,$sql1);
	}
?>
<?php
		if (empty($_POST['quanlity_PSU'])) {
			
		}
		else{
			$quanlity_PSU=$_POST['quanlity_PSU'];
			$sql1="update `buildpc` SET `PSU`='$tenPSU',`SL_PSU`='$quanlity_PSU' WHERE uid='$userid';";
			$res=mysqli_query($connection,$sql1);
		}
		
	?>
	<!-- ======================================================================================================================-->
	<?php
	$userid=$_POST['UID'];
		
	if (empty($_POST['tenCASE'])) {	
	}
	else
	{
		$tenCASE=$_POST['tenCASE'];
	$sql="update `buildpc` SET `CASE`='$tenCASE' , `SL_CASE`='1' WHERE uid='$userid';";
	$res=mysqli_query($connection,$sql);
	}
?>

 <?php
	if (empty($_POST['UID_xoa_CASE'])) {		
	}
	else
	{
	$useridxoa=$_POST['UID_xoa_CASE'];
	$sql1="update `buildpc` SET `CASE`='0',`SL_CASE`='0' WHERE uid='$useridxoa';";
	$res=mysqli_query($connection,$sql1);
	}
?>
<?php
		if (empty($_POST['quanlity_CASE'])) {
			
		}
		else{
			$quanlity_CASE=$_POST['quanlity_CASE'];
			$sql1="update `buildpc` SET `CASE`='$tenCASE',`SL_CASE`='$quanlity_CASE' WHERE uid='$userid';";
			$res=mysqli_query($connection,$sql1);
		}
		
	?>

<?php
	  header('location:buildpc.php');
?>