<?php
	include('../connect/connect.php');
	include('header.php');
	include('nav_admin.php');
  include('xulydangnhap.php');
	$idorder=$_GET['id'];
?>
<!-- <h1 style="text-align:center">DANH SÁCH SẢN PHẨM</h1> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
  <br>
 <div class="container">
  <table class="table">
    <thead>
      <tr>
        <th style="text-align:center;">ID sanpham</th>
        <th style="text-align:center;">Hãng sản xuất</th>
        <th style="text-align:center;width: 30%;">tên sản phẩm</th>
        <th style="text-align:center;">giá sản phẩm</th>
        <th style="text-align:center;">IMAGE</th>
        <th style="text-align:center;">bảo hành</th>
        <th style="text-align:center;">Số Lượng</th>
        <th style="text-align:center;">OPERATION</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
	    $sql="select*from historyorderitems where orderid=$idorder";
	    $res=mysqli_query($connection,$sql);
	    while($r=mysqli_fetch_array($res))
	    {
	    	$masp=$r['pid'];
	    	$soluong=$r['pquantity'];
	    	$sql1="select*from products where id=$masp";
		    $res1=mysqli_query($connection,$sql1);
		    while($row=mysqli_fetch_array($res1))
		    {?>
      <tr style="text-align:center;">
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['hãng'] ?></td>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><img src="../resources/img/<?php echo $row['image'] ?>" style="height: 150px; width: 200px;"></td>
        <td><?php echo $row['insurance'] ?></td>
        <td><?php echo $soluong ?></td>
        <td style="text-align:center;"><a href="../info_product.php?idpro=<?php echo $row['id'] ?>">INFO</a></td>
      </tr>
      <?php
     	}
	}
    ?>       
    </tbody>
  </table>
</div>
</body>
</html>