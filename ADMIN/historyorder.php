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
        <th style="text-align:center;">UID</th>
        <th style="text-align:center;">totalprice</th>
        <th style="text-align:center;">orderstatus</th>
        <th style="text-align:center;">paymentmode</th>
        <th style="text-align:center;"> timestamp</th>
        <th style="text-align:center;">OPERATION</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
    $sql="select*from historyorder ORDER BY timestamp DESC";
    if (isset($_GET['id'])) {
      $uid=$_GET['id'];
      $sql="select*from historyorder where uid='$uid' ORDER BY timestamp DESC";
    }
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>
      <tr style="text-align: center">
        <td><?php echo $r['id'] ?></td>
        <td><?php echo $r['uid'] ?></td>
        <td><?php echo $r['totalprice'] ?></td>
        <td><?php echo $r['orderstatus'] ?></td>
        <td><?php echo $r['paymentmode'] ?></td>
        <td><?php echo $r['timestamp'] ?></td>
        <td style="text-align:center;"><a href="Xu_Ly_donhang.php?IDCHECK=<?php echo $r['id'] ?>">CHECK</a>||<a href="INFO_ORDERHISTORY.php?id=<?php echo $r['id'] ?>">INFO</a></td>
      </tr>
      <?PHP 
	}
      ?>      
    </tbody>
  </table>
</div>
</body>
</html>