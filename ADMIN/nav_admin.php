<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <ul class="nav nav-tabs">
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" >DANH SÁCH SẢN PHẨM<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="admin_product.php">danh sách sản phẩm</a></li>
      <li><a href="ADD_product.php">thêm sản phẩm</a></li>
    </ul>
  </li>

  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">DANH SÁCH LOẠI HÀNG
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="admin_caregory.php" >danh sách loại hàng</a></li>
      <li><a href="#">thêm loại hàng</a></li>
    </ul>
  </li>
  <li class="<?php echo $c ?>"><a href="admin_user.php">DANH SÁCH USER</a></li>
  <li class="<?php echo $d ?>"><a href="admin_order.php">DANH SÁCH ĐƠN HÀNG</a></li>
  <li class="<?php echo $d ?>"><a href="historyorder.php">LỊCH SỬ ĐƠN HÀNG</a></li>
  <li class="<?php echo $d ?>"><a href="THONGKE.php">THỐNG KÊ</a></li>
</ul>
</div> 
</body>
</html>
