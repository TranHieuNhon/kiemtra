<?PHP
	include('../connect/connect.php');
?>
<?php
$catid=$_POST['catid'];
if ($catid==1) {
	
	$id=$_POST['id'];
	$ten=$_POST['TEN_CPU'];
	$xung=$_POST['XUNG_CPU'];
	$socket=$_POST['SOCKET_CPU'];
	$hang=$_POST['HANG_CPU'];
	$cardth=$_POST['CARD_CPU'];
	$cache=$_POST['CACHE_CPU'];
	$tientrinh=$_POST['TIENTRINH_CPU'];
	$dong=$_POST['DONG_CPU'];
	$series=$_POST['SERIES_CPU'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];
	

	$sql="insert INTO `cpu`(`id`, `TEN_CPU`, `XUNG`, `SOCKET`, `HANG`, `CARD_TICH_HOP`, `CACHE`, `TIEN_TRINH`, `DONG`, `SERIES`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$id','$ten','$xung','$socket','$hang','$cardth','$cache','$tientrinh','$dong','$series','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);
}
// =============================================MAIN===================================================
if ($catid==2) {
	
	$id=$_POST['id'];
	$socket=$_POST['SOCKET_MAIN'];
	$KHERAM=$_POST['KHE_RAM'];
	$PCIE=$_POST['PCIE'];
	$CHIPSET=$_POST['CHIPSET'];
	$SATA=$_POST['SATA'];
	$SSD=$_POST['SSD'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];

	$sql="insert INTO `main`(`SOCKET`, `id`, `KHE_RAM`, `CỔNG_PCIE`, `CHIPSET`, `CỎNG_SATA`, `KHE_SSD`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$socket','$id','$KHERAM','$PCIE','$CHIPSET','$SATA','$SSD','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);
}
// ============================================gpu===============================================
if ($catid==3) {	
	$id=$_POST['id'];
	$Memory_Amount=$_POST['Memory_Amount'];
	$Graphics_Clock=$_POST['Graphics_Clock'];
	$Recommended_PSU=$_POST['Recommended_PSU'];
	$CORE_CUDA=$_POST['CORE_CUDA'];
	$Memory_Type=$_POST['Memory_Type'];
	$Graphics_Processing=$_POST['Graphics_Processing'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];
	

	$sql="insert INTO `gpu`(`id`, `Memory_Amount`, `Graphics_Clock`, `Recommended_PSU`, `CORE_CUDA`, `Memory_Type`, `Graphics_Processing`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$id','$Memory_Amount','$Graphics_Clock','$Recommended_PSU','$CORE_CUDA','$Memory_Type','$Graphics_Processing','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);
}
// ============================================psu===============================================
if ($catid==4) {
	
	$id=$_POST['id'];
	$LOAI=$_POST['LOAI'];
	$CONGXUAT=$_POST['CONGXUAT'];
	$CHUAN=$_POST['CHUAN'];
	$RGP=$_POST['RGB'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];
	

	$sql="insert INTO `psu`(`id`, `Loại`, `Công_Xuất`, `Tiêu_Chuẩn`, `RGP`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$id','$LOAI','$CONGXUAT','$CHUAN','$RGP','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);
}
// ============================================RAM===============================================
if ($catid==5) {
	$id=$_POST['id'];
	$CHUAN=$_POST['CHUẨN'];
	$BUSS=$_POST['BUSS'];
	$MODEL=$_POST['MODEL'];
	$HANG=$_POST['HANG'];
	$SIZE=$_POST['SIZE'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];
	$sql="INSERT INTO `ram`(`id`, `Chuẩn_RAM`, `Bus_hỗ_trợ`, `Model`, `Hãng`, `Dung_lượng`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$id','$CHUAN','$BUSS','$MODEL','$HANG','$SIZE','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);
}
// ============================================HDD===============================================
if ($catid==6) {
	$id=$_POST['id'];
	$DUNGLUONG=$_POST['DUNGLUONG'];
	$CHUAN=$_POST['CHUAN'];
	$HANG=$_POST['HANG'];
	$TUOI=$_POST['TUOI'];
	$SPEED=$_POST['SPEED'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];
	$sql="INSERT INTO `hdd`(`id`, `Dung_Lượng`, `Chuẩn_Kết_Nối`, `Hãng`, `Tốc_Độ`, `Tuổi_Thọ`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$id','$DUNGLUONG','$CHUAN','$HANG','$SPEED','$TUOI','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);}
// ============================================SSD===============================================
	if ($catid==7) {
	$id=$_POST['id'];
	$DUNGLUONG=$_POST['DUNGLUONG'];
	$CHUAN=$_POST['CHUAN'];
	$HANG=$_POST['HANG'];
	$TUOI=$_POST['TUOI'];
	$SPEED=$_POST['SPEED'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];
	$sql="INSERT INTO `ssd`(`id`, `Dung_Lượng`, `Chuẩn_Kết_Nối`, `Hãng`, `Tốc_Độ`, `Tuổi_Thọ`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$id','$DUNGLUONG','$CHUAN','$HANG','$SPEED','$TUOI','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);}
// ============================================PC===============================================
	if ($catid==9) {
	$id=$_POST['id'];
	$CPU=$_POST['CPU'];
	$GPU=$_POST['GPU'];
	$MAIN=$_POST['MAIN'];
	$PSU=$_POST['PSU'];
	$SSD=$_POST['SSD'];
	$CASE=$_POST['CASE'];
	$HDD=$_POST['HDD'];
	$RAM=$_POST['RAM'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];
	$sql="INSERT INTO `pc`(`id`, `CPU`, `GPU`, `MAIN`, `PSU`, `SSD`, `CASEPC`, `HDD`, `RAM`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$id','$CPU','$GPU','$MAIN','$PSU','$SSD','$CASE','$HDD','$RAM','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);}
// ============================================LAPTOP===============================================
	if ($catid==10) {
	$id=$_POST['id'];
	$CPU=$_POST['CPU'];
	$GPU=$_POST['GPU'];
	$AUDIO=$_POST['AUDIO'];
	$WIFI=$_POST['WIFI'];
	$PIN=$_POST['PIN'];
	$TRONGLUONG=$_POST['TRONGLUONG'];
	$HDD=$_POST['HDD'];
	$RAM=$_POST['RAM'];
	$LOAI=$_POST['LOAI'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];
	$sql="INSERT INTO `laptop`(`CPU`, `RAM`, `Lưu_trữ`, `graphics`, `Audio`, `WIFI`, `Pin`, `Trọng_Lượng`, `id`, `loại`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$CPU','$RAM','$HDD','$GPU','$AUDIO','$WIFI','$PIN','$TRONGLUONG','$id','$LOAI','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);}
// ============================================KEYBOARD===============================================
	if ($catid==11) {
	$id=$_POST['id'];
	$SIZE=$_POST['SIZE'];
	$SWITCH=$_POST['SWITCH'];
	$RGB=$_POST['RGB'];
	$HANG=$_POST['HANG'];
	$KETNOI=$_POST['KETNOI'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];
	$sql="INSERT INTO `keyboard`(`id`, `Kích_Thước`, `Switch`, `RGP`, `Hãng`, `Kết_Nối`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$id','$SIZE','$SWITCH','$RGB','$HANG','$KETNOI','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);
}
// ============================================MOUSE===============================================
	if ($catid==11) {
	$id=$_POST['id'];
	$TRONGLUONG=$_POST['TRONGLUONG'];
	$LOAI=$_POST['LOAI'];
	$RGB=$_POST['RGB'];
	$HANG=$_POST['HANG'];
	$KETNOI=$_POST['KETNOI'];
	$anh1=$_POST['img1'];
	$anh2=$_POST['img2'];
	$anh3=$_POST['img3'];
	$anh4=$_POST['img4'];
	$anh5=$_POST['img5'];
	$sql="INSERT INTO `mouse`(`id`, `Kết_Nối`, `RGP`, `Hãng`, `Trọng_Lượng`, `Loại`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES ('$id','$KETNOI','$RGB','$HANG','$TRONGLUONG','$LOAI','$anh1','$anh2','$anh3','$anh4','$anh5')";
	$res=mysqli_query($connection,$sql);}
// ============================================psu===============================================
// ============================================psu===============================================
	header('location:ADD_product.php');
?>