<?php
  date_default_timezone_set('Asia/Ho_Chi_Minh');
   $startTime =date('Y-m-d');
   $cenvertedTime = date('Y-m-d',strtotime('+10 year',strtotime($startTime)));
?>
<?php
	include'nav.php';
	include'Header.php';
	include'NAV_MIDLE.PHP';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<div class="container">
		<div class="row">
				<?php 
					if (isset($_GET['event'])) {
						$event=$_GET['event'];
						if ($event==1) {
							?>
								<div class="alert alert-danger">
							  	<strong>CẢNH BÁO </strong>TÀI KHOẢN ĐÃ TỒN TẠI
							</div>
							<?php
						}elseif ($event==2) {
							?>
								<div class="alert alert-danger">
							  	<strong>CẢNH BÁO </strong>TÀI KHOẢN KHÔNG HỢP LỆ
							</div>
							<?php
						}elseif ($event==3) {
							?>
								<div class="alert alert-success">
							  	<strong>THÀNH CÔNG </strong>ĐĂNG KÝ TÀI KHOẢN THÀNH CÔNG
							</div>
							<?php
								}
							}
							?>
			</div>
		<h1 style="text-align:center;">ĐĂNG KÝ</h1>
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<form action="xulydangky.php" method="post">
			<input type="hidden" name="loai" value="member">
			<input type="hidden" name="ngayhethan" value="<?php echo$cenvertedTime ?>"><br>
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input type="text" class="form-control" name="username" placeholder="username">
			  </div>
			<br>
					<div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
		  </div><br>
			<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			    <input type="text" class="form-control" name="password" placeholder="password">
			</div><br>
			<div class="col-sm-3"></div>
			<div class="col-sm-2">
				<input type="submit"  class="btn btn-success" value="ĐĂNG KÝ" style="width:100PX"><br>
			</div>
			<div class="col-sm-2">
				
			</div>
			<div class="col-sm-2">
				<input type="reset"  class="btn btn-danger" value="HỦY" style="width:100PX"><br>
			</div>
			<div class="col-sm-3"></div>
			
		</form>
	</div>
	<div class="col-sm-3"></div>
	</div>
</body>
</html>
<?php
	include'footer.php';
?>