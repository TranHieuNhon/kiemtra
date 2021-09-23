<?php
include('nav.php');
include('header.php');
require('NAV_MIDLE.php');
require'connect/connect.php';
//session_start();
$giasausale=0;
if (isset($_GET['sale'])) {
	$giasausale=$_GET['sale'];
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div class="container">
	<table class="table">
	    <thead>
	      <tr>
	        <th>Number</th>
	        <th style="width: 40%;">Item Name</th>
	        <th>Price</th>
	        <th>quantity</th>
	        <th>curency</th>
	        <th>Action</th>
	      </tr>	      
	    </thead>
	    <?php 
	    		$total = 0;
	    		$i = 1;
	    		if (isset($_SESSION['cart']) & !empty($_SESSION['cart'])) {
	    			$idtem_array = $_SESSION['cart'];
	    			foreach ($idtem_array as $id => $quanlity) {
	    			 	$sql = "select * FROM products WHERE id=$id";
	    			 	$res = mysqli_query($connection,$sql);
	    			 	$r = mysqli_fetch_array($res);
	    	 ?>
	      <tr>
	        <td><?php echo $i; ?></td>
	        <td><?php echo $r['title']; ?></td>
	        <td><?php echo VndDot($r['price']*23000) ?> VNĐ</td>
	        <td>
	        	<form action="addcard.php" method="get">
	        		<input type="hidden" name="id" value="<?php echo $r['id'] ?>">
	        		<input aria-label="quanlity" class="input-qty" max="<?php echo$r['AMOUNT'] ?>" min="1" name="quanlity" type="number" value="<?php echo $quanlity; ?>">
	        		<input type="submit" value="Add" class="btn btn-primary">
	        	</form>
	        </td>
	        <td><?php echo VndDot($r['price']*$quanlity*23000); ?> VNĐ</td>
	        <td >
	        	<a href="delcart.php?remove=<?php echo $id; ?>">Remove</a>|
	        	<a href="deltailitem.php?id=<?php echo $id ?>">info</a>
	        	
	        </td>
	      </tr>
	      <?php
	      	$total+=$r['price']*$quanlity;
	      	$i+=1;
	      ?>
	      <?php
	  }
	}
	?>
<?PHP
	if ($giasausale>1) {
		if ($total>$giasausale) {
			$giaend=$giasausale;
		}
		else{
			$giaend=$total;
		}
	}
	else{
		$giaend=$total;
	}
?>
	      <tr>
	      	<td colspan="2">Total</td>
	      	<td><?php echo VndDot($total*23000); ?> VNĐ</td>
	      	<td></td>
	        <td><a href="REMOTEALL.php" class="btn btn-info">remote all</a></td>
	      	<td><a href="checkout.php?totalsale=<?php echo $giaend ?>" class="btn btn-info">checkout</a></td>
	      </tr>
	      <tr>
	      	<td colspan="2">total after discount</td>
	      	<td><?php echo VndDot($giasausale*23000) ?> VNĐ</td>
	      	<td></td>
	        <td></td>
	      </tr>
	    </tbody>
  	</table>
  	<form action="MAGG.php" method="post">
  		<input type="hidden" name="total" value="<?php echo $total ;?>">
  		<h3>nhập mã SALE <input type="text" name="MGG">   <input type="submit" name="ADD_MGG" class="btn btn-info"></h3>
  	</form>
  	
  	
</div>
<?php 
	include('footer.php');
?>
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