<?php
	include('nav.php');
	include('header.php');
	require('NAV_MIDLE.php');
	include('connect/connect.php')
?>
<?php
	if(!isset($_SESSION['customer']) || empty($_SESSION['customer'])){
	header('location:login.php');
	}
	$check=$_SESSION['customer'];
	$sql="select*from users where email='$check'";
	$res=mysqli_query($connection,$sql);
	while($r=mysqli_fetch_array($res))
    {
    	$Uid=$r['id'];
    }
?>
<?php
	$sql="select*from buildpc where uid='$Uid'";
	$res=mysqli_query($connection,$sql);
	while($r=mysqli_fetch_array($res))
    {
    	$id=$r['id'];
    	$uid=$r['uid'];
    	$CPU=$r['CPU'];
    	$MAIN=$r['MAIN'];
    	$RAM=$r['RAM'];
    	$HDD=$r['HDD'];
    	$SSD=$r['SSD'];
    	$VGA=$r['VGA'];
    	$PSU=$r['PSU'];
    	$CASE=$r['CASE'];
    	
    	$SL_CPU=$r['SL_CPU'];
    	$SL_MAIN=$r['SL_MAIN'];
    	$SL_RAM=$r['SL_RAM'];
    	$SL_HDD=$r['SL_HDD'];
    	$SL_SSD=$r['SL_SSD'];
    	$SL_VGA=$r['SL_VGA'];
    	$SL_PSU=$r['SL_PSU'];
    	$SL_CASE=$r['SL_CASE'];
    	


    	$price_CPU_END=0;
    	$price_MAIN_END=0;
    	$price_RAM_END=0;
    	$price_HDD_END=0;
    	$price_SSD_END=0;
    	$price_VGA_END=0;
    	$price_PSU_END=0;
    	$price_CASE_END=0;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>build PC</title>
</head>
<body>
	<div class="container" style="background-image:url(img/buildpc.jpg);background-repeat: no-repeat; 
      background-size: 100% 100%; height: 200px;">
      <br><br><br>
		<h1 style=" color: white; text-align: center; ">XÂY DỰNG CẤU HÌNH MÁY TÌNH HÀNG ĐẦU VIỆT NAM</h1>
		<br>
	</div>
	<!-- <div class="container">
		<br>
		<button type="button" class="btn btn-primary" style="background-color: #00008B " onclick="functionCH1()">CẤU HÌNH 1</button>
		<button type="button" class="btn btn-primary" style="background-color: #00008B ">CẤU HÌNH 2</button>
		<button type="button" class="btn btn-primary" style="background-color: #00008B ">CẤU HÌNH 3</button>
		<button type="button" class="btn btn-primary" style="background-color: #00008B ">CẤU HÌNH 4</button>
		<button type="button" class="btn btn-primary" style="background-color: #00008B ">CẤU HÌNH 5</button>
	</div> -->
	<div class="container">
		<br>
		<form action="xulybuildpc.php" method="post">
			<input type="hidden" name="idbuild" value="<?php echo $id ?>">
			<button type="submit" class="btn btn-primary" style="background-color: #00008B "><span class="glyphicon glyphicon-refresh"></span>  làm mới</button>
		</form>
		
	</div>
			<br>
	<div class="container">
		<table class="table table-bordered">
    <tbody>
      <tr>
        <td style="width:20%;text-align: center; padding: 15px;"><strong>1.Bộ vi xử lý</strong></td>
        <?php if ($CPU=="0") 
        {
        	?>
        	<td>
        	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span>  Chọn Bộ Vi Xử Lý</button>
        	<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>          
			          <form class="navbar-form navbar-left" action="#">
			      		<div class="form-group">
			        		<input type="text" class="form-control" placeholder="Tên CPU" name="search">
			      		</div>
			      		<button type="submit" class="btn btn-default">Submit</button>
			    		</form>
			        </div>
			        <div class="modal-body">
			          <?php
			          	$sql="select*from products where catid=1";
			    				$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    		{
			    			$strNum=$r['price']*23000;
			    		?>
			    			<table class="table table-striped">
						    <tbody>
						      <tr>
						        <td style="width:20%"><div class="panel-body"><img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%;" alt="Image"></div></td>
						        <td style="color: black ; ">
						        	<STRONG><?php echo $r['title'] ?></STRONG>
						        	<p>Bảo hành: <?php echo $r['insurance'] ?></p>
						        	<p>Kho Hàng: <?php if ($r['AMOUNT']>1) {
						        		echo "còn hàng";
						        	} ?></p>
						        	<p><strong style="font-size: 18px;text-align: center; color:red;"><?PHP echo VndDot($strNum); ?> Đ</strong></p>
						        </td>
						        <td>
						        	<?php
						        		if ($r['AMOUNT']>0) {
						        			?>
						        			<form action="xulybuildpc.php" method="post"><!-- addcpu -->
						        				<input type="hidden" name="UID" value="<?php echo $Uid ?>" >
						        				<input type="hidden" name="tenCPU" value="<?php echo $r['id'] ?>">
						        				<button class="btn btn-primary" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span></button>
						        			</form>
						        			<?php
						        		}
						        		else
						        		{
						        		?>
						        			<button type="button" class="btn btn-primary" style="background-color: red "><span class="glyphicon glyphicon-minus"></span></button>
						        		<?php
						        		}
						        		
						        	?>						        	
						        </td>
						      </tr>
						    </tbody>
						  </table>
			    		<?php
			    		}
			          ?>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>			      
			    </div>
			</div>
        </td>
        	<?php
        }
        else
        {
        ?>
        	<td >
        		<?php
        			$sql="select * from products where id='$CPU'";
        			$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    			
			    		{
			    			$strNum1=$r['price']*23000;
			    			$price_cpu=$r['price'];
        		?>
        		<div class="row">
        			<div class="col-sm-2" >
        				<img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%; ">
        			</div>
        			<div class="col-sm-4">
        				<STRONG><?php echo $r['title'] ?></STRONG>
        				<DIV>
        					<strong>bảo hành: </strong> <?php echo $r['insurance'] ?>
        				</DIV>
        				<DIV>
        					<strong>Kho hàng: </strong> <?php if ($r['AMOUNT']>1) {
        						echo "còn hàng";
        					} ?>
        				</DIV>
        			</div>
        			<div class="col-sm-5">       				
        				<form action="xulybuildpc.php" method="post"><!-- thêm số lượng -->
        					<input type="hidden" name="tenCPU" value="<?php echo $CPU ?>">
        					<input type="hidden" name="UID" value="<?php echo $uid ?>">
        					<strong><?php echo VndDot($strNum1); ?> X 
        					<input  max="100" min="1" name="quanlity_cpu" type="number" value="<?php echo $SL_CPU ?>" style="min-width:13px;">
        					<input type="submit"class="btn btn-primary" style="background-color: #00008B " value="ADD"></input> = 
        					<strong><?PHP $price_CPU_END=$price_cpu*$SL_CPU; echo VndDot($price_cpu*$SL_CPU*23000) ; ?> Đ</strong>
        				</strong>
        				</form>        				
        			</div>
        			<div class="col-sm-1" style="">
        				<form action="xulybuildpc.php" method="post"><!-- delete -->
        					<input type="hidden" name="UID_xoa_CPU" value="<?php echo $uid ?>">
        				 <button type="submit" class="btn btn-primary" style="background-color:red;" ><img src="img/bin.png" style="width:100%;" ></button>
        				</form>
        			</div>
        		<?php
        			}
        		?>
        	</td>
        <?php
      }
      ?>
    </tr>


<!-- ======================================== MAIN =================================================================== -->
		

		<tr>
        <td style="width:20%; text-align: center; padding: 15px;"><strong>2. Bo mạch chủ </strong></td>
        <?php if ($MAIN=="0") 
        {
        	?>
        	<td>
        	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span> Chọn bo mạch chủ</button>
        	<div class="modal fade" id="myModal1" role="dialog">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>          
			          <form class="navbar-form navbar-left" action="#">
			      		<div class="form-group">
			        		<input type="text" class="form-control" placeholder="Tên MAIN" name="search">
			      		</div>
			      		<button type="submit" class="btn btn-default">Submit</button>
			    		</form>
			        </div>
			        <div class="modal-body">
			          <?php
			          	$sql="select*from products where catid=2";
			    				$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    		{
			    			$strNum=$r['price']*23000;
			    		?>
			    			<table class="table table-striped">
						    <tbody>
						      <tr>
						        <td style="width:20%"><div class="panel-body"><img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%;" alt="Image"></div></td>
						        <td style="color: black ; ">
						        	<STRONG><?php echo $r['title'] ?></STRONG>
						        	<p>Bảo hành: <?php echo $r['insurance'] ?></p>
						        	<p>Kho Hàng: <?php if ($r['AMOUNT']>1) {
						        		echo "còn hàng";
						        	} ?></p>
						        	<p><strong style="font-size: 18px;text-align: center; color:red;"><?PHP echo VndDot($strNum); ?> Đ</strong></p>
						        </td>
						        <td>
						        	<?php
						        		if ($r['AMOUNT']>0) {
						        			?>
						        			<form action="xulybuildpc.php" method="post">
						        				<input type="hidden" name="UID" value="<?php echo $Uid ?>" >
						        				<input type="hidden" name="tenMAIN" value="<?php echo $r['id'] ?>">
						        				<button class="btn btn-primary" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span></button>
						        			</form>
						        			<?php
						        		}
						        		else
						        		{
						        		?>
						        			<button type="button" class="btn btn-primary" style="background-color: red "><span class="glyphicon glyphicon-minus"></span></button>
						        		<?php
						        		}
						        		
						        	?>						        	
						        </td>
						      </tr>
						    </tbody>
						  </table>
			    		<?php
			    		}
			          ?>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>			      
			    </div>
			</div>
        </td>
        	<?php
        }
        else
        {
        ?>
        	<td >
        		<?php
        			$sql="select * from products where id='$MAIN'";
        			$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    			
			    		{
			    			$strNum1=$r['price']*23000;
			    			$price_MAIN=$r['price'];
        		?>
        		<div class="row">
        			<div class="col-sm-2" >
        				<img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%; ">
        			</div>
        			<div class="col-sm-4">
        				<STRONG><?php echo $r['title'] ?></STRONG>
        				<DIV>
        					<strong>bảo hành: </strong> <?php echo $r['insurance'] ?>
        				</DIV>
        				<DIV>
        					<strong>Kho hàng: </strong> <?php if ($r['AMOUNT']>1) {
        						echo "còn hàng";
        					} ?>
        				</DIV>
        			</div>
        			<div class="col-sm-5">       				
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="tenMAIN" value="<?php echo $MAIN ?>">
        					<input type="hidden" name="UID" value="<?php echo $uid ?>">
        					<strong><?php echo VndDot($strNum1); ?> X 
        					<input  max="100" min="1" name="quanlity_MAIN" type="number" value="<?php echo $SL_MAIN ?>" style="min-width:13px;">
        					<input type="submit"class="btn btn-primary" style="background-color: #00008B " value="ADD"></input> = 
        					<strong><?PHP $price_MAIN_END=$price_MAIN*$SL_MAIN; echo VndDot($price_MAIN*$SL_MAIN*23000) ; ?> Đ</strong>
        				</strong>
        				</form>        				
        			</div>
        			<div class="col-sm-1" style="">
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="UID_xoa_MAIN" value="<?php echo $uid ?>">
        				 <button type="submit" class="btn btn-primary" style="background-color:red;" ><img src="img/bin.png" style="width:100%;" ></button>
        				</form>
        			</div>
        		<?php
        			}
        		?>
        	</td>
        <?php
      }
      ?>
    </tr>
    <!-- ============================================= RAM ======================================================================== -->
      <tr>
        <td style="width:20%;text-align: center; padding: 15px;"><strong>3. RAM</strong></td>
        <?php if ($RAM=="0") 
        {
        	?>
        	<td>
        	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span> Chọn RAM</button>
        	<div class="modal fade" id="myModal2" role="dialog">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>          
			          <form class="navbar-form navbar-left" action="#">
			      		<div class="form-group">
			        		<input type="text" class="form-control" placeholder="Tên MAIN" name="search">
			      		</div>
			      		<button type="submit" class="btn btn-default">Submit</button>
			    		</form>
			        </div>
			        <div class="modal-body">
			          <?php
			          	$sql="select*from products where catid=5";
			    				$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    		{
			    			$strNum=$r['price']*23000;
			    		?>
			    			<table class="table table-striped">
						    <tbody>
						      <tr>
						        <td style="width:20%"><div class="panel-body"><img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%;" alt="Image"></div></td>
						        <td style="color: black ; ">
						        	<STRONG><?php echo $r['title'] ?></STRONG>
						        	<p>Bảo hành: <?php echo $r['insurance'] ?></p>
						        	<p>Kho Hàng: <?php if ($r['AMOUNT']>1) {
						        		echo "còn hàng";
						        	} ?></p>
						        	<p><strong style="font-size: 18px;text-align: center; color:red;"><?PHP echo VndDot($strNum); ?> Đ</strong></p>
						        </td>
						        <td>
						        	<?php
						        		if ($r['AMOUNT']>0) {
						        			?>
						        			<form action="xulybuildpc.php" method="post">
						        				<input type="hidden" name="UID" value="<?php echo $Uid ?>" >
						        				<input type="hidden" name="tenRAM" value="<?php echo $r['id'] ?>">
						        				<button class="btn btn-primary" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span></button>
						        			</form>
						        			<?php
						        		}
						        		else
						        		{
						        		?>
						        			<button type="button" class="btn btn-primary" style="background-color: red "><span class="glyphicon glyphicon-minus"></span></button>
						        		<?php
						        		}
						        		
						        	?>						        	
						        </td>
						      </tr>
						    </tbody>
						  </table>
			    		<?php
			    		}
			          ?>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>			      
			    </div>
			</div>
        </td>
        	<?php
        }
        else
        {
        ?>
        	<td >
        		<?php
        			$sql="select * from products where id='$RAM'";
        			$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    			
			    		{
			    			$strNum1=$r['price']*23000;
			    			$price_RAM=$r['price'];
        		?>
        		<div class="row">
        			<div class="col-sm-2" >
        				<img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%; ">
        			</div>
        			<div class="col-sm-4">
        				<STRONG><?php echo $r['title'] ?></STRONG>
        				<DIV>
        					<strong>bảo hành: </strong> <?php echo $r['insurance'] ?>
        				</DIV>
        				<DIV>
        					<strong>Kho hàng: </strong> <?php if ($r['AMOUNT']>1) {
        						echo "còn hàng";
        					} ?>
        				</DIV>
        			</div>
        			<div class="col-sm-5">       				
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="tenRAM" value="<?php echo $RAM ?>">
        					<input type="hidden" name="UID" value="<?php echo $uid ?>">
        					<strong><?php echo VndDot($strNum1); ?> X 
        					<input  max="100" min="1" name="quanlity_RAM" type="number" value="<?php echo $SL_RAM ?>" style="min-width:13px;">
        					<input type="submit"class="btn btn-primary" style="background-color: #00008B " value="ADD"></input> = 
        					<strong><?PHP $price_RAM_END=$price_RAM*$SL_RAM; echo VndDot($price_RAM*$SL_RAM*23000) ; ?> Đ</strong>
        				</strong>
        				</form>        				
        			</div>
        			<div class="col-sm-1" style="">
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="UID_xoa_RAM" value="<?php echo $uid ?>">
        				 <button type="submit" class="btn btn-primary" style="background-color:red;" ><img src="img/bin.png" style="width:100%;" ></button>
        				</form>
        			</div>
        		<?php
        			}
        		?>
        	</td>
        <?php
      }
      ?>
      </tr>
 <!-- =============================================== HDD ======================================================================== -->
      <tr>
        <td style="width:20%;text-align: center; padding: 15px;"><strong>4. HDD</strong></td>
        <?php if ($HDD=="0") 
        {
        	?>
        	<td>
        	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span> Chọn HDD</button>
        	<div class="modal fade" id="myModal3" role="dialog">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>          
			          <form class="navbar-form navbar-left" action="#">
			      		<div class="form-group">
			        		<input type="text" class="form-control" placeholder="Tên MAIN" name="search">
			      		</div>
			      		<button type="submit" class="btn btn-default">Submit</button>
			    		</form>
			        </div>
			        <div class="modal-body">
			          <?php
			          	$sql="select*from products where catid=6";
			    				$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    		{
			    			$strNum=$r['price']*23000;
			    		?>
			    			<table class="table table-striped">
						    <tbody>
						      <tr>
						        <td style="width:20%"><div class="panel-body"><img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%;" alt="Image"></div></td>
						        <td style="color: black ; ">
						        	<STRONG><?php echo $r['title'] ?></STRONG>
						        	<p>Bảo hành: <?php echo $r['insurance'] ?></p>
						        	<p>Kho Hàng: <?php if ($r['AMOUNT']>1) {
						        		echo "còn hàng";
						        	} ?></p>
						        	<p><strong style="font-size: 18px;text-align: center; color:red;"><?PHP echo VndDot($strNum); ?> Đ</strong></p>
						        </td>
						        <td>
						        	<?php
						        		if ($r['AMOUNT']>0) {
						        			?>
						        			<form action="xulybuildpc.php" method="post">
						        				<input type="hidden" name="UID" value="<?php echo $Uid ?>" >
						        				<input type="hidden" name="tenHDD" value="<?php echo $r['id'] ?>">
						        				<button class="btn btn-primary" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span></button>
						        			</form>
						        			<?php
						        		}
						        		else
						        		{
						        		?>
						        			<button type="button" class="btn btn-primary" style="background-color: red "><span class="glyphicon glyphicon-minus"></span></button>
						        		<?php
						        		}
						        		
						        	?>						        	
						        </td>
						      </tr>
						    </tbody>
						  </table>
			    		<?php
			    		}
			          ?>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>			      
			    </div>
			</div>
        </td>
        	<?php
        }
        else
        {
        ?>
        	<td >
        		<?php
        			$sql="select * from products where id='$HDD'";
        			$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    			
			    		{
			    			$strNum1=$r['price']*23000;
			    			$price_HDD=$r['price'];
        		?>
        		<div class="row">
        			<div class="col-sm-2" >
        				<img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%; ">
        			</div>
        			<div class="col-sm-4">
        				<STRONG><?php echo $r['title'] ?></STRONG>
        				<DIV>
        					<strong>bảo hành: </strong> <?php echo $r['insurance'] ?>
        				</DIV>
        				<DIV>
        					<strong>Kho hàng: </strong> <?php if ($r['AMOUNT']>1) {
        						echo "còn hàng";
        					} ?>
        				</DIV>
        			</div>
        			<div class="col-sm-5">       				
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="tenHDD" value="<?php echo $HDD ?>">
        					<input type="hidden" name="UID" value="<?php echo $uid ?>">
        					<strong><?php echo VndDot($strNum1); ?> X 
        					<input  max="100" min="1" name="quanlity_HDD" type="number" value="<?php echo $SL_HDD ?>" style="min-width:13px;">
        					<input type="submit"class="btn btn-primary" style="background-color: #00008B " value="ADD"></input> = 
        					<strong><?PHP  $price_HDD_END=$price_HDD*$SL_HDD; echo VndDot($price_HDD*$SL_HDD*23000) ; ?> Đ</strong>
        				</strong>
        				</form>        				
        			</div>
        			<div class="col-sm-1" style="">
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="UID_xoa_HDD" value="<?php echo $uid ?>">
        				 <button type="submit" class="btn btn-primary" style="background-color:red;" ><img src="img/bin.png" style="width:100%;" ></button>
        				</form>
        			</div>
        		<?php
        			}
        		?>
        	</td>
        <?php
      }
      ?>
    </tr>
    <!-- =============================================== SSD =================================================================== -->
      <tr>
        <td style="width:20%;text-align: center; padding: 15px;"><strong>5. SSD</strong></td>
        <?php if ($SSD=="0") 
        {
        	?>
        	<td>
        	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal4" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span> Chọn SSD</button>
        	<div class="modal fade" id="myModal4" role="dialog">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>          
			          <form class="navbar-form navbar-left" action="#">
			      		<div class="form-group">
			        		<input type="text" class="form-control" placeholder="Tên MAIN" name="search">
			      		</div>
			      		<button type="submit" class="btn btn-default">Submit</button>
			    		</form>
			        </div>
			        <div class="modal-body">
			          <?php
			          	$sql="select*from products where catid=7";
			    				$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    		{
			    			$strNum=$r['price']*23000;
			    		?>
			    			<table class="table table-striped">
						    <tbody>
						      <tr>
						        <td style="width:20%"><div class="panel-body"><img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%;" alt="Image"></div></td>
						        <td style="color: black ; ">
						        	<STRONG><?php echo $r['title'] ?></STRONG>
						        	<p>Bảo hành: <?php echo $r['insurance'] ?></p>
						        	<p>Kho Hàng: <?php if ($r['AMOUNT']>1) {
						        		echo "còn hàng";
						        	} ?></p>
						        	<p><strong style="font-size: 18px;text-align: center; color:red;"><?PHP echo VndDot($strNum); ?> Đ</strong></p>
						        </td>
						        <td>
						        	<?php
						        		if ($r['AMOUNT']>0) {
						        			?>
						        			<form action="xulybuildpc.php" method="post">
						        				<input type="hidden" name="UID" value="<?php echo $Uid ?>" >
						        				<input type="hidden" name="tenSSD" value="<?php echo $r['id'] ?>">
						        				<button class="btn btn-primary" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span></button>
						        			</form>
						        			<?php
						        		}
						        		else
						        		{
						        		?>
						        			<button type="button" class="btn btn-primary" style="background-color: red "><span class="glyphicon glyphicon-minus"></span></button>
						        		<?php
						        		}
						        		
						        	?>						        	
						        </td>
						      </tr>
						    </tbody>
						  </table>
			    		<?php
			    		}
			          ?>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>			      
			    </div>
			</div>
        </td>
        	<?php
        }
        else
        {
        ?>
        	<td >
        		<?php
        			$sql="select * from products where id='$SSD'";
        			$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    			
			    		{
			    			$strNum1=$r['price']*23000;
			    			$price_SSD=$r['price'];
        		?>
        		<div class="row">
        			<div class="col-sm-2" >
        				<img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%; ">
        			</div>
        			<div class="col-sm-4">
        				<STRONG><?php echo $r['title'] ?></STRONG>
        				<DIV>
        					<strong>bảo hành: </strong> <?php echo $r['insurance'] ?>
        				</DIV>
        				<DIV>
        					<strong>Kho hàng: </strong> <?php if ($r['AMOUNT']>1) {
        						echo "còn hàng";
        					} ?>
        				</DIV>
        			</div>
        			<div class="col-sm-5">       				
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="tenSSD" value="<?php echo $SSD ?>">
        					<input type="hidden" name="UID" value="<?php echo $uid ?>">
        					<strong><?php echo VndDot($strNum1); ?> X 
        					<input  max="100" min="1" name="quanlity_SSD" type="number" value="<?php echo $SL_SSD ?>" style="min-width:13px;">
        					<input type="submit"class="btn btn-primary" style="background-color: #00008B " value="ADD"></input> = 
        					<strong><?PHP $price_SSD_END=$price_SSD*$SL_SSD; echo VndDot($price_SSD*$SL_SSD*23000) ; ?> Đ</strong>
        				</strong>
        				</form>        				
        			</div>
        			<div class="col-sm-1" style="">
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="UID_xoa_SSD" value="<?php echo $uid ?>">
        				 <button type="submit" class="btn btn-primary" style="background-color:red;" ><img src="img/bin.png" style="width:100%;" ></button>
        				</form>
        			</div>
        		<?php
        			}
        		?>
        	</td>
        <?php
      }
      ?>
      </tr>
      <!-- =============================================== VGA ==================================================================== -->
      <tr>
        <td style="width:20%;text-align: center; padding: 15px;"><strong>6. VGA</strong></td>
        <?php if ($VGA=="0") 
        {
        	?>
        	<td>
        	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal5" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span> Chọn VGA</button>
        	<div class="modal fade" id="myModal5" role="dialog">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>          
			          <form class="navbar-form navbar-left" action="#">
			      		<div class="form-group">
			        		<input type="text" class="form-control" placeholder="Tên MAIN" name="search">
			      		</div>
			      		<button type="submit" class="btn btn-default">Submit</button>
			    		</form>
			        </div>
			        <div class="modal-body">
			          <?php
			          	$sql="select*from products where catid=3";
			    				$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    		{
			    			$strNum=$r['price']*23000;
			    		?>
			    			<table class="table table-striped">
						    <tbody>
						      <tr>
						        <td style="width:20%"><div class="panel-body"><img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%;" alt="Image"></div></td>
						        <td style="color: black ; ">
						        	<STRONG><?php echo $r['title'] ?></STRONG>
						        	<p>Bảo hành: <?php echo $r['insurance'] ?></p>
						        	<p>Kho Hàng: <?php if ($r['AMOUNT']>1) {
						        		echo "còn hàng";
						        	} ?></p>
						        	<p><strong style="font-size: 18px;text-align: center; color:red;"><?PHP echo VndDot($strNum); ?> Đ</strong></p>
						        </td>
						        <td>
						        	<?php
						        		if ($r['AMOUNT']>0) {
						        			?>
						        			<form action="xulybuildpc.php" method="post">
						        				<input type="hidden" name="UID" value="<?php echo $Uid ?>" >
						        				<input type="hidden" name="tenVGA" value="<?php echo $r['id'] ?>">
						        				<button class="btn btn-primary" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span></button>
						        			</form>
						        			<?php
						        		}
						        		else
						        		{
						        		?>
						        			<button type="button" class="btn btn-primary" style="background-color: red "><span class="glyphicon glyphicon-minus"></span></button>
						        		<?php
						        		}
						        		
						        	?>						        	
						        </td>
						      </tr>
						    </tbody>
						  </table>
			    		<?php
			    		}
			          ?>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>			      
			    </div>
			</div>
        </td>
        	<?php
        }
        else
        {
        ?>
        	<td >
        		<?php
        			$sql="select * from products where id='$VGA'";
        			$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    			
			    		{
			    			$strNum1=$r['price']*23000;
			    			$price_VGA=$r['price'];
        		?>
        		<div class="row">
        			<div class="col-sm-2" >
        				<img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%; ">
        			</div>
        			<div class="col-sm-4">
        				<STRONG><?php echo $r['title'] ?></STRONG>
        				<DIV>
        					<strong>bảo hành: </strong> <?php echo $r['insurance'] ?>
        				</DIV>
        				<DIV>
        					<strong>Kho hàng: </strong> <?php if ($r['AMOUNT']>1) {
        						echo "còn hàng";
        					} ?>
        				</DIV>
        			</div>
        			<div class="col-sm-5">       				
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="tenVGA" value="<?php echo $VGA ?>">
        					<input type="hidden" name="UID" value="<?php echo $uid ?>">
        					<strong><?php echo VndDot($strNum1); ?> X 
        					<input  max="100" min="1" name="quanlity_VGA" type="number" value="<?php echo $SL_VGA ?>" style="min-width:13px;">
        					<input type="submit"class="btn btn-primary" style="background-color: #00008B " value="ADD"></input> = 
        					<strong><?PHP $price_VGA_END=$price_VGA*$SL_VGA; echo VndDot($price_VGA*$SL_VGA*23000) ; ?> Đ</strong>
        				</strong>
        				</form>        				
        			</div>
        			<div class="col-sm-1" style="">
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="UID_xoa_VGA" value="<?php echo $uid ?>">
        				 <button type="submit" class="btn btn-primary" style="background-color:red;" ><img src="img/bin.png" style="width:100%;" ></button>
        				</form>
        			</div>
        		<?php
        			}
        		?>
        	</td>
        <?php
      }
      ?>
      </tr>
      <!-- =============================================== PSU =================================================================== -->
      <tr>
        <td style="width:20%;text-align: center; padding: 15px;"><strong>7. Nguồn</strong></td>
        <?php if ($PSU=="0") 
        {
        	?>
        	<td>
        	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal6" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span> Chọn PSU</button>
        	<div class="modal fade" id="myModal6" role="dialog">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>          
			          <form class="navbar-form navbar-left" action="#">
			      		<div class="form-group">
			        		<input type="text" class="form-control" placeholder="Tên MAIN" name="search">
			      		</div>
			      		<button type="submit" class="btn btn-default">Submit</button>
			    		</form>
			        </div>
			        <div class="modal-body">
			          <?php
			          	$sql="select*from products where catid=4";
			    				$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    		{
			    			$strNum=$r['price']*23000;
			    		?>
			    			<table class="table table-striped">
						    <tbody>
						      <tr>
						        <td style="width:20%"><div class="panel-body"><img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%;" alt="Image"></div></td>
						        <td style="color: black ; ">
						        	<STRONG><?php echo $r['title'] ?></STRONG>
						        	<p>Bảo hành: <?php echo $r['insurance'] ?></p>
						        	<p>Kho Hàng: <?php if ($r['AMOUNT']>1) {
						        		echo "còn hàng";
						        	} ?></p>
						        	<p><strong style="font-size: 18px;text-align: center; color:red;"><?PHP echo VndDot($strNum); ?> Đ</strong></p>
						        </td>
						        <td>
						        	<?php
						        		if ($r['AMOUNT']>0) {
						        			?>
						        			<form action="xulybuildpc.php" method="post">
						        				<input type="hidden" name="UID" value="<?php echo $Uid ?>" >
						        				<input type="hidden" name="tenPSU" value="<?php echo $r['id'] ?>">
						        				<button class="btn btn-primary" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span></button>
						        			</form>
						        			<?php
						        		}
						        		else
						        		{
						        		?>
						        			<button type="button" class="btn btn-primary" style="background-color: red "><span class="glyphicon glyphicon-minus"></span></button>
						        		<?php
						        		}
						        		
						        	?>						        	
						        </td>
						      </tr>
						    </tbody>
						  </table>
			    		<?php
			    		}
			          ?>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>			      
			    </div>
			</div>
        </td>
        	<?php
        }
        else
        {
        ?>
        	<td >
        		<?php
        			$sql="select * from products where id='$PSU'";
        			$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    			
			    		{
			    			$strNum1=$r['price']*23000;
			    			$price_PSU=$r['price'];
        		?>
        		<div class="row">
        			<div class="col-sm-2" >
        				<img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%; ">
        			</div>
        			<div class="col-sm-4">
        				<STRONG><?php echo $r['title'] ?></STRONG>
        				<DIV>
        					<strong>bảo hành: </strong> <?php echo $r['insurance'] ?>
        				</DIV>
        				<DIV>
        					<strong>Kho hàng: </strong> <?php if ($r['AMOUNT']>1) {
        						echo "còn hàng";
        					} ?>
        				</DIV>
        			</div>
        			<div class="col-sm-5">       				
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="tenPSU" value="<?php echo $PSU ?>">
        					<input type="hidden" name="UID" value="<?php echo $uid ?>">
        					<strong><?php echo VndDot($strNum1); ?> X 
        					<input  max="100" min="1" name="quanlity_PSU" type="number" value="<?php echo $SL_PSU ?>" style="min-width:13px;">
        					<input type="submit"class="btn btn-primary" style="background-color: #00008B " value="ADD"></input> = 
        					<strong><?PHP $price_PSU_END=$price_PSU*$SL_PSU; echo VndDot($price_PSU*$SL_PSU*23000) ; ?> Đ</strong>
        				</strong>
        				</form>        				
        			</div>
        			<div class="col-sm-1" style="">
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="UID_xoa_PSU" value="<?php echo $uid ?>">
        				 <button type="submit" class="btn btn-primary" style="background-color:red;" ><img src="img/bin.png" style="width:100%;" ></button>
        				</form>
        			</div>
        		<?php
        			}
        		?>
        	</td>
        <?php
      }
      ?>
      </tr>
      <!-- =============================================== CASE ================================================================== -->
      <tr>
        <td style="width:20%;text-align: center; padding: 15px;"><strong>8. Vỏ Case</strong></td>
        <?php if ($CASE=="0") 
        {
        	?>
        	<td>
        	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal7" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span> Chọn CASE</button>
        	<div class="modal fade" id="myModal7" role="dialog">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>          
			          <form class="navbar-form navbar-left" action="#">
			      		<div class="form-group">
			        		<input type="text" class="form-control" placeholder="Tên MAIN" name="search">
			      		</div>
			      		<button type="submit" class="btn btn-default">Submit</button>
			    		</form>
			        </div>
			        <div class="modal-body">
			          <?php
			          	$sql="select*from products where catid=8";
			    				$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    		{
			    			$strNum=$r['price']*23000;
			    		?>
			    			<table class="table table-striped">
						    <tbody>
						      <tr>
						        <td style="width:20%"><div class="panel-body"><img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%;" alt="Image"></div></td>
						        <td style="color: black ; ">
						        	<STRONG><?php echo $r['title'] ?></STRONG>
						        	<p>Bảo hành: <?php echo $r['insurance'] ?></p>
						        	<p>Kho Hàng: <?php if ($r['AMOUNT']>1) {
						        		echo "còn hàng";
						        	} ?></p>
						        	<p><strong style="font-size: 18px;text-align: center; color:red;"><?PHP echo VndDot($strNum); ?> Đ</strong></p>
						        </td>
						        <td>
						        	<?php
						        		if ($r['AMOUNT']>0) {
						        			?>
						        			<form action="xulybuildpc.php" method="post">
						        				<input type="hidden" name="UID" value="<?php echo $Uid ?>" >
						        				<input type="hidden" name="tenCASE" value="<?php echo $r['id'] ?>">
						        				<button class="btn btn-primary" style="background-color: #00008B "><span class="glyphicon glyphicon-plus"></span></button>
						        			</form>
						        			<?php
						        		}
						        		else
						        		{
						        		?>
						        			<button type="button" class="btn btn-primary" style="background-color: red "><span class="glyphicon glyphicon-minus"></span></button>
						        		<?php
						        		}
						        		
						        	?>						        	
						        </td>
						      </tr>
						    </tbody>
						  </table>
			    		<?php
			    		}
			          ?>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>			      
			    </div>
			</div>
        </td>
        	<?php
        }
        else
        {
        ?>
        	<td >
        		<?php
        			$sql="select * from products where id='$CASE'";
        			$res=mysqli_query($connection,$sql);
			    		while($r=mysqli_fetch_array($res))
			    			
			    		{
			    			$strNum1=$r['price']*23000;
			    			$price_CASE=$r['price'];
        		?>
        		<div class="row">
        			<div class="col-sm-2" >
        				<img src="resources/img/<?php echo $r['image'] ?>" class="img-responsive" style="width:100%; ">
        			</div>
        			<div class="col-sm-4">
        				<STRONG><?php echo $r['title'] ?></STRONG>
        				<DIV>
        					<strong>bảo hành: </strong> <?php echo $r['insurance'] ?>
        				</DIV>
        				<DIV>
        					<strong>Kho hàng: </strong> <?php if ($r['AMOUNT']>1) {
        						echo "còn hàng";
        					} ?>
        				</DIV>
        			</div>
        			<div class="col-sm-5">       				
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="tenCASE" value="<?php echo $CASE ?>">
        					<input type="hidden" name="UID" value="<?php echo $uid ?>">
        					<strong><?php echo VndDot($strNum1); ?> X 
        					<input  max="100" min="1" name="quanlity_CASE" type="number" value="<?php echo $SL_CASE ?>" style="min-width:13px;">
        					<input type="submit"class="btn btn-primary" style="background-color: #00008B " value="ADD"></input> = 
        					<strong><?PHP $price_CASE_END=$price_CASE*$SL_CASE; echo VndDot($price_CASE*$SL_CASE*23000) ; ?> Đ</strong>
        				</strong>
        				</form>        				
        			</div>
        			<div class="col-sm-1" style="">
        				<form action="xulybuildpc.php" method="post">
        					<input type="hidden" name="UID_xoa_CASE" value="<?php echo $uid ?>">
        				 <button type="submit" class="btn btn-primary" style="background-color:red;" ><img src="img/bin.png" style="width:100%;" ></button>
        				</form>
        			</div>
        		<?php
        			}
        		?>
        	</td>
        <?php
      }
      ?>
      </tr>
    </tbody>
  </table>

  <div class="row" >
  	<div class="col-sm-6" style="float:right;color: white;font-size: 20px;background-color: red;margin-right: 15px;">
  		<div class="row">
  			<div class="col-sm-7">chi phí dự tính</div>
  		<div class="col-sm-5" >
  			<strong style="float:right;">
  					<?PHP

  					 $TONG= $price_CPU_END+$price_MAIN_END+$price_RAM_END+$price_HDD_END+$price_SSD_END+$price_VGA_END+$price_PSU_END+$price_CASE_END;
  					 echo VndDot($TONG*23000);
  				?> Đ
  			</strong>
  		</div>
  		</div>  		
  	</div>
  	<br><br>
  </div>

  <div class="row"></div>
  	<div class="col-sm-1" style="float:right; margin-right: 62px;">
  		<form action="add_build.php" method="get">
  			<input type="hidden" name="idbuild" value="<?php echo $id ?>">
  			<input type="hidden" name="CPU" value="<?php echo$CPU ?>">
  			<input type="hidden" name="quanlity_CPU" value="<?php echo$SL_CPU ?>">
  			<input type="hidden" name="MAIN" value="<?PHP echo$MAIN ?>">
  			<input type="hidden" name="quanlity_MAIN" value="<?PHP echo$SL_MAIN ?>">
  			<input type="hidden" name="RAM" value="<?PHP echo$RAM ?>">
  			<input type="hidden" name="quanlity_RAM" value="<?PHP echo$SL_RAM ?>">
  			<input type="hidden" name="HDD" value="<?PHP echo$HDD ?>">
  			<input type="hidden" name="quanlity_HDD" value="<?PHP echo$SL_HDD ?>">
  			<input type="hidden" name="SSD" value="<?PHP echo$SSD ?>">
  			<input type="hidden" name="quanlity_SSD" value="<?PHP echo$SL_SSD ?>">
  			<input type="hidden" name="VGA" value="<?PHP echo$VGA ?>">
  			<input type="hidden" name="quanlity_VGA" value="<?PHP echo$SL_VGA ?>">
  			<input type="hidden" name="PSU" value="<?PHP echo$PSU ?>">
  			<input type="hidden" name="quanlity_PSU" value="<?PHP echo$SL_PSU ?>">
  			<input type="hidden" name="CASE" value="<?PHP echo$CASE ?>">
  			<input type="hidden" name="quanlity_CASE" value="<?PHP echo$SL_CASE ?>">
  			<button type="submit" class="btn btn-primary" style="background-color: #00008B ">thêm vào giỏ hàng</button>
  		</form>
  	</div>
	</div>
</body>
</html>
<?php
	include('footer.php');
?>
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
