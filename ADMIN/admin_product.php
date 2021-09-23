<?php
	include('../connect/connect.php');
	include('header.php');
	include('nav_admin.php');
  include('xulydangnhap.php');
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
 <div >
  <table class="table">
    <thead>
      <tr>
        <th style="text-align:center;">ID</th>
        <th style="text-align:center;">CATEGORYID</th>
        <th style="text-align:center;">TITLE</th>
        <th style="text-align:center;">PRICE</th>
        <th style="text-align:center;">IMAGE</th>
        <th style="text-align:center;">insurance</th>
        <th style="text-align:center;">amount</th>
        <th style="text-align:center;">OPERATION</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
    $sql="select*from products ORDER BY catid ASC";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>
      <tr>
        <td><?php echo $r['id'] ?></td>
        <td style="text-align: center;"><?php echo $r['catid'] ?></td>
        <td><?php echo $r['title'] ?></td>
        <td style="text-align: center;"><?php echo $r['price'] ?></td>
        <td><?php echo $r['image'] ?></td>
        <td style="text-align: center;"><?php echo $r['insurance'] ?></td>
        <td style="text-align: center;"><?php echo $r['AMOUNT'] ?></td>
        <td style="text-align:center;"><a href="delete.php?id=<?php echo $r['id'] ?>">DELETE</a>||<a href="update_product.php?id=<?php echo $r['id'] ?>">UPDATE</a></td>
      </tr>
      <?PHP 
	}
      ?>      
    </tbody>
  </table>
</div>
</body>
</html>