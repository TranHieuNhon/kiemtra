<?php
	include('../connect/connect.php');
	include('header.php');
	include('nav_admin.php');
  include('xulydangnhap.php');
?>
<br>
<div class="container">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<form method="POST">
				<input type="date" name="date" style="width:300px">
				<input type="submit" value="tìm"></input>
			</form>
		</div>
	</div>
	<div class="col-sm-4"></div>
	<?php
	$tonghang=0;
		$sql="select AMOUNT FROM products";
    $res=mysqli_query($connection,$sql); 
    while($r=mysqli_fetch_array($res))
    {
    	$tonghang=$tonghang+$r['AMOUNT'];
    }
	?>
			
<?php 
$tongngay=0;
$tongthang=0;
$tongnam=0;
$tongquy=0;
$tongdonngay=$tongdonthang=$tongdonnam=$tongdonquy=0;
$tongspngay=$tongspthang=$tongspnam=$tongspquy=0;
$tongsptonngay=$tongsptonthang=$tongsptonnam=$tongsptonquy=0;

if (isset($_POST['date'])) {
  $date = $_POST['date'];
     $sql="select totalprice,DAY(timestamp) as DAY,YEAR(timestamp) as YEAR,MONTH(timestamp) as MONTH,id FROM historyorder where timestamp like '$date %'";
    $res=mysqli_query($connection,$sql); 
    while($r=mysqli_fetch_array($res))
    {
    	   $ngay=$r['DAY'];
           $thang=$r['MONTH'];
           $nam=$r['YEAR'];
           $id=$r['id'];
           if ($id!='null') {
           	$sodon=1;
           	$tongdonngay=$tongdonngay+$sodon;
           }
       $tongngay=$tongngay + $r['totalprice'];
      $sql1="select * from historyorderitems where orderid=$id";
      $res1=mysqli_query($connection,$sql1); 
	    while($r=mysqli_fetch_array($res1))
	    {
	    	$tongspngay=$tongspngay + $r['pquantity'];
	    }
     }
   }
?>

<?php 
if (!empty($thang)) {
    $sql="select totalprice,id FROM historyorder where MONTH(timestamp)=$thang AND YEAR(timestamp)=$nam";
    $res=mysqli_query($connection,$sql); 
    while($row=mysqli_fetch_array($res))
    {	    	
      $id=$row['id'];
      $tongthang=$tongthang+ $row['totalprice'];
      if ($id!='null') {
           	$sodon=1;
           	$tongdonthang=$tongdonthang+$sodon;
           }
        $sql1="select * from historyorderitems where orderid=$id";
        $res1=mysqli_query($connection,$sql1); 
	    while($r=mysqli_fetch_array($res1))
	    {
	    	$tongspthang=$tongspthang + $r['pquantity'];
	    }
    }
  }
?>

<?php 
if (!empty($nam)) {
    $sql="select totalprice,id FROM historyorder where YEAR(timestamp)=$nam";
    $res=mysqli_query($connection,$sql); 
    while($row=mysqli_fetch_array($res))
    {
    	$id=$row['id'];
		$tongtiennam=$row['totalprice'];
       $tongnam = $tongnam + $tongtiennam;
       if ($id!='null') {
           	$sodon=1;
           	 $tongdonnam=$tongdonnam+$sodon;
           }
        $sql1="select * from historyorderitems where orderid=$id";
        $res1=mysqli_query($connection,$sql1); 
	    while($r=mysqli_fetch_array($res1))
	    {
	    	$tongspnam=$tongspnam + $r['pquantity'];
	    }
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<br>
	<div class="container">
		<div class="col-sm-6" style=" ;height: 400px;border-right: 1px solid black;border-bottom:1px solid black ;">
			<h1 style="text-align:center;">DOANH THU NGÀY</h1>
			<div class="col-sm-6" style="en">
				<h3>tổng doanh thu :</h3>
				<h3>tổng đơn hàng :</h3>
				<h3>số sp đã bán: </h3>
				<h3>số sp còn tồn: </h3>
			</div>
			<div class="col-sm-6" style="">
				<h3><?php echo VndDot($tongngay*23000) ?> VNĐ</h3>
				<h3><?php echo $tongdonngay ?> đơn</h3>
				<h3><?php echo $tongspngay ?></h3>
				<h3><?php echo $tonghang-$tongspngay ?>     || <a href="admin_product.php">INFO</a></h3>
			</div>
			
		</div>
		<div class="col-sm-6" style=" ;height: 400px;border-bottom:1px solid black ;">
			<h1 style="text-align:center;">DOANH THU THÁNG</h1>
			<div class="col-sm-6" style="en">
				<h3>tổng doanh thu :</h3>
				<h3>tổng đơn hàng :</h3>
				<h3>số sp đã bán: </h3>
				<h3>số sp còn tồn: </h3>
			</div>
			<div class="col-sm-6" style="">
				<h3><?php echo VndDot($tongthang*23000) ?> VNĐ</h3>
				<h3><?php echo $tongdonthang ?> đơn</h3>
				<h3><?php echo $tongspthang ?></h3>
				<h3><?php echo $tonghang-$tongspthang ?>     || <a href="admin_product.php">INFO</a></h3>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-sm-6" style="height: 400px;border-right: 1px solid black;">
			<h1 style="text-align:center;">DOANH THU NĂM</h1>
			<div class="col-sm-6" style="en">
				<h3>tổng doanh thu :</h3>
				<h3>tổng đơn hàng :</h3>
				<h3>số sp đã bán: </h3>
				<h3>số sp còn tồn: </h3>
			</div>
			<div class="col-sm-6" style="">
				<h3><?php echo VndDot($tongnam*23000) ?> VNĐ</h3>
				<h3><?php echo $tongdonnam ?> đơn</h3>
				<h3><?php echo $tongspnam ?></h3>
				<h3><?php echo $tonghang-$tongspnam ?>     || <a href="admin_product.php">INFO</a></h3>
			</div>
		</div>
		<div class="col-sm-6" style="height: 400px"></div>
	</div>
</body>
</html>
<?php
	function VndDot($strNum)
{
	$len = strlen($strNum);
	$counter = 3;
	$result = "";
	while ($len - $counter >= 1)
	{
		$con = substr($strNum, $len - $counter , 3);
		$result = ','.$con.$result;
		$counter+= 3;
	}
	$con = substr($strNum, 0 , 3 - ($counter - $len) );
	$result = $con.$result;
	if(substr($result,0,1)=='.'){
		$result=substr($result,1,$len+1);
	}
	
	return $result;	
}
?>