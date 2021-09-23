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
        <th style="text-align:center;">TYPE</th>
        <th style="text-align:center;">USERNAME</th>
        <th style="text-align:center;">EMAIL</th>
        <th style="text-align:center;">PASSWORD</th>
        <th style="text-align:center;">DATE_CREATED</th>
        <th style="text-align:center;">DATE_EXPIRES</th>
        <th style="text-align:center;">OPERATION</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
    $sql="select * from users ORDER BY id ASC";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>
      <tr style="text-align:center;">
        <td><?php echo $r['id'] ?></td>
        <td><?php echo $r['type'] ?></td>
        <td><?php echo $r['username'] ?></td>
        <td><?php echo $r['email'] ?></td>
        <td><?php echo $r['pass'] ?></td>
        <td><?php echo $r['date_created'] ?></td>
        <td><?php echo $r['date_expires'] ?></td>
        <td style="text-align:center;"><a href="#">DELETE</a>||<a href="#">UPDATE</a>||<a href="historyorder.php?id=<?php echo $r['id'] ?>">historyorder</a></td>
      </tr>
      <?PHP 
	}
      ?>      
    </tbody>
  </table>
</div>
</body>
</html>