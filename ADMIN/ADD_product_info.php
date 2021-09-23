<?php
	include('../connect/connect.php');
	include('header.php');
	include('nav_admin.php');
  $catidadd=$_GET['catid'];
  $id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="POST" action="Xu_Ly_ADD_product_info.php">
			<input type="hidden" name="catid" value="<?php echo $catidadd ?>">
			<?php
				if ($catidadd==1) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">TÊN CPU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="TEN_CPU">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">XUNG CPU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="XUNG_CPU">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">SOCKET CPU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="SOCKET_CPU">
				      <option value="">CHỌN SOCKET</option>  
				      <option value="LGA 1151">LGA 1151</option>
				      <option value="LGA 1151V2">LGA 1151V2</option>
				      <option value="LGA 2066">LGA 2066</option>
				      <option value="LGA 1200">LGA 1200</option>
				      <option value="TRX40">TRX40</option>
				      <option value="AM4">AM4</option>				      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">HÃNG SẢN XUẤT</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="HANG_CPU">
				      <option value="">CHỌN HÃNG</option>    
				      <option value="INTEL">INTEL</option>
				      <option value="AND">AMD</option>			      
				    </select>
				  </div >
				    </div>
				</div>
			
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CARD TÍCH HỢP</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="CARD_CPU">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CACHE CPU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="CACHE_CPU">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">TIẾN TRÌNH</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="TIENTRINH_CPU">
				      <option value="">CHỌN TIẾN TRÌNH</option>  
				      <option value="LGA 1151">7NM</option>
				      <option value="LGA 1151V2">14NM</option>
				      <option value="LGA 2066">14NM+</option>
				      <option value="LGA 1200">10NM</option>				      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">DÒNG CPU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="DONG_CPU">
				      <option value="">CHỌN DÒNG</option>    
				      <option value="11th">11th</option>
				      <option value="10th">10th</option>
				      <option value="9th">9th</option>
				      <option value="8th">8th</option>
				      <option value="TR4">TR4</option>
				      <option value="AM4">AM4</option>		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">SERIES CPU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="SERIES_CPU">
				      <option value="">CHỌN SERIES</option>    
				      <option value="I3">I3</option>
				      <option value="I5">I5</option>
				      <option value="I7">I7</option>
				      <option value="I9">I9</option>
				      <option value="GEN 5">GEN 5</option>
				      <option value="GEN 3">GEN 3</option>		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 1</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img1"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
			<?php
				}
			?>
			<!-- ==================================main===================================================== -->	
			<?php
				if ($catidadd==2) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">KHE RAM HỖ TRỢ</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="KHE_RAM">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CỔNG PCI-E</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="PCIE">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">SOCKET MAIN</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="SOCKET_MAIN">
				      <option value="">CHỌN SOCKET</option>  
				      <option value="LGA 1151">LGA 1151</option>
				      <option value="LGA 1151">LGA 1200</option>
				      <option value="LGA 1151V2">LGA 1151V2</option>
				      <option value="LGA 2066">LGA 2066</option>
				      <option value="LGA 1200">LGA TRX40</option>
				      <option value="LGA 1200">LGA AM4</option>				      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CHIPSET MAIN</label>
				    </div>
				    <?php $chon=" " ?>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="CHIPSET">
				      <option value="">CHỌN CHIPSET</option>    
				      <option value="B360"  >B360</option>
				      <option value="B365" <?php echo$chon ?> >AMD</option>
				      <option value="H310">H310</option>
				      <option value="H110">H110</option>
				      <option value="Z390">Z390</option>
				      <option value="Z370">Z370</option>
				      <option value="B460">B460</option>
				      <option value="H410">H410</option>
				      <option value="Z490">Z490</option>
				      <option value="B560">B560</option>
				      <option value="H510">H510</option>
				      <option value="Z590">Z590</option>
				      <option value="X299">X299</option>
				      <option value="B350">B350</option>
				      <option value="B450">B450</option>
				      <option value="B550">B550</option>
				      <option value="X399">X399</option>
				      <option value="X570">X570</option>			      
				    </select>
				  </div >
				    </div>
				</div>
			
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CỔNG SATA</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="SATA">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">KHE SSD</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="SSD">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 1</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img1"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
			<?php
				}
			?>
			<!-- =======================================gpu================================================ -->
			<?php
				if ($catidadd==3) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">Memory Amount</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="Memory_Amount">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">Graphics Clock</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="Graphics_Clock">
				    </div>
				</div>
				<br>					
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">Recommended PSU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="Recommended_PSU">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CORE CUDA</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="CORE_CUDA">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">Memory_Type</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="Memory_Type">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">Graphics Processing</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="Graphics_Processing">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 1</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img1"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
			<?php
				}
			?>
			<!-- =======================================psu================================================ -->
			<?php
				if ($catidadd==4) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo$id ?>">
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">Loại nguồn</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="LOAI">
				      <option value="">CHỌN LOẠI</option>  
				      <option value="ATX">ATX</option>
				      <option value="ITX">ITX</option>
				      <option value="OVER SIZE">OVER SIZE</option>			      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CÔNG XUẤT NGUỒN</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="CONGXUAT">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">TIÊU CHUẨN nguồn</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="CHUAN">
				      <option value="">CHỌN TIÊU CHUẨN</option>  
				      <option value="80 PLUS WHITE">80 PLUS WHITE</option>
				      <option value="80 PLUS BRONZE">80 PLUS BRONZE</option>
				      <option value="80 PLUS SILVER">80 PLUS SILVER</option>
				      <option value="80 PLUS GOLD">80 PLUS GOLD</option>
				      <option value="80 PLUS PLATINUM">80 PLUS PLATINUM</option>		
				      <option value="80 PLUS TITANUM">80 PLUS TITANUM</option>		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">RGB</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="RGB">
				      <option value="">CHỌN RGB</option>  
				      <option value="có RGB">có RGB</option>
				      <option value="không RGB">không RGB</option>
				      <option value="có RGB(đồng bộ main 12v(RGB))">có RGB(đồng bộ main 12v(RGB))</option>
				      <option value="có RGB(đồng bộ main 5v(ARGB))">có RGB(đồng bộ main 5v(ARGB))</option>		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 1</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img1"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
				<br>
				
			<?php
				}
			?>
			<!-- =======================================ram================================================ -->
			<?php
				if ($catidadd==5) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo$id ?>">
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">Chuẩn Ram</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="CHUẨN">
				      <option value="">CHỌN chuẩn</option>  
				      <option value="DDR3">DDR3</option>
				      <option value="DDR4">DDR4</option>
				      <option value="ECC">ECC</option>			      
				    </select>
				  </div >
				    </div>
				</div>
				
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">BUSS RAM HỔ TRỢ</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="BUSS">
				      <option value="">CHỌN BUSS RAM</option>  
				      <option value="1333">1333</option>
				      <option value="1600">1600</option>
				      <option value="2133">2133</option>
				      <option value="2666">2666</option>
				      <option value="3000">3000</option>
				      <option value="3200">3200</option>						      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">MODEL RAM</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="MODEL">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">HÃNG SẢN XUẤT</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="HANG">
				      <option value="">CHỌN HÃNG</option>  
				      <option value="GIGABITE">GIGABITE</option>
				      <option value="KINGSTON">KINGSTON</option>
				      <option value="HYPERX">HYPERX</option>
				      <option value="SAMSUNG">SAMSUNG</option>
				      <option value="CORSAIR">CORSAIR</option>
				      <option value="GSKILL">GSKILL</option>						      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">DUNG LƯỢNG</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="SIZE">
				      <option value="">CHỌN DUNG LƯỢNG</option>  
				      <option value="16GB (2x8GB)">16GB(2x8GB)</option>
				      <option value="8GB">8GB</option>
				      <option value="8GB (2x4GB)">8GB (2x4GB)</option>
				      <option value="32GB">32GB</option>
				      <option value="32GB (2x16GB)">32GB (2x16GB)</option>
				      <option value="64GB (4x8GB)">64GB (4x8GB)</option>						      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 1</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img1"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>				
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
				<br>
				
			<?php
				}
			?>
			<!-- =======================================HDD================================================ -->
			<?php
				if ($catidadd==6) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo$id ?>">
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">Dung Lượng</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="DUNGLUONG">
				      <option value="">CHỌN dung lượng</option>  
				      <option value="250 GB">250 GB</option>
				      <option value="500GB">500GB</option>
				      <option value="1 TB">1 TB</option>
				      <option value="2 TB">2 TB</option>
				      <option value="3 TB">3 TB</option>
				      <option value="4 TB">4 TB</option>
				      <option value="5 TB">5 TB</option>
				      <option value="6 TB">6 TB</option>
				      <option value="7 TB">7 TB</option>
				      <option value="8 TB">8 TB</option>
				      <option value="9 TB">9 TB</option>	
				      <option value="10 TB">10 TB</option>		      
				    </select>
				  </div >
				    </div>
				</div>
				
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CHUẨN KẾT NỐI</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="CHUAN">
				      <option value="">CHỌN CHUẨN KẾT NỐI</option>  
				      <option value="SATA 2">SATA 2</option>
				      <option value="SATA 3(3GB)">SATA 3(3GB)</option>
				      <option value="SATA 3(6GB)">SATA 3(6GB)</option>
				      <option value="USB 2.0">USB 2.0</option>
				      <option value="USB 3.0">USB 3.0</option>
				      <option value="NAT">NAT</option>						      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">TỐC ĐỘ</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="SPEED">
				      <option value="">CHỌN TỐC ĐỘ</option>  
				      <option value="6400 RPM">6400 RPM</option>
				      <option value="7200 RPM">7200 RPM</option>						      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">TUỔI THỌ HDD</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="TUOI">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">HÃNG SẢN XUẤT</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="HANG">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 1</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img1"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>				
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
				<br>
				
			<?php
				}
			?>
			<!-- =======================================SSD================================================ -->
			<?php
				if ($catidadd==7) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo$id ?>">
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">Dung Lượng</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="DUNGLUONG">
				      <option value="">CHỌN DUNG LƯỢNG</option>  
				      <option value="250 GB">250 GB</option>
				      <option value="500GB">500GB</option>
				      <option value="1 TB">1 TB</option>
				      <option value="2 TB">2 TB</option>
				      <option value="3 TB">3 TB</option>
				      <option value="4 TB">4 TB</option>
				      <option value="5 TB">5 TB</option>
				      <option value="6 TB">6 TB</option>
				      <option value="7 TB">7 TB</option>
				      <option value="8 TB">8 TB</option>
				      <option value="9 TB">9 TB</option>	
				      <option value="10 TB">10 TB</option>		      
				    </select>
				  </div >
				    </div>
				</div>
				
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CHUẨN KẾT NỐI</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="CHUAN">
				      <option value="">CHỌN CHUẨN KẾT NỐI</option>  
				      <option value="M2 SATA">M2 SATA</option>
				      <option value="M2 NVME">M2 NVME</option>
				      <option value="M2 PCIE">M2 PCIE</option>
				      <option value="USB 3.0">USB 3.0</option>						      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">TỐC ĐỘ</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="SPEED">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">TUỔI THỌ SDD</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="TUOI">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">HÃNG SẢN XUẤT</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="HANG">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 1</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img1"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>				
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
				<br>
				
			<?php
				}
			?>
			<!-- =======================================PC================================================ -->
			<?php
				if ($catidadd==9) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo$id ?>">
				<br>				
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CPU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="CPU">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">GPU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="GPU">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">MAIN</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="MAIN">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">PSU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="PSU">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">SSD</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="SSD">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CASE</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="CASE">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">HDD</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="HDD">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">RAM</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="RAM">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 1</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img1"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>				
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
				<br>
				
			<?php
				}
			?>
			<!-- =======================================LAPTOP================================================ -->
			<?php
				if ($catidadd==10) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo$id ?>">
				<br>				
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">CPU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="CPU">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">GPU</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="GPU">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">LƯU TRỮ</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="HDD">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">RAM</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="RAM">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">AUDIO</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="AUDIO">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">WIFI</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="WIFI">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">PIN</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="PIN">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">TRỌNG LƯỢNG</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="TRONGLUONG">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">LOẠI LAPTOP</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="LOAI">
				      <option value="">CHỌN LOẠI</option>  
				      <option value="GAMING">GAMING</option>
				      <option value="OFFICE">OFFICE</option>				      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 1</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img1"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>				
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
				<br>
				
			<?php
				}
			?>
			<!-- =======================================keyboard================================================ -->
			<?php
				if ($catidadd==11) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo$id ?>">
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">KÍCH THƯỚC</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="SIZE">
				      <option value="">CHỌN KÍCH THƯỚC</option>  
				      <option value="Full-size (100%)">Full-size (100%)</option>
				      <option value="1800-Compact">1800-Compact</option>
				      <option value="96%">96%</option>
				      <option value="Tenkeyless (TKL, 87%, 80%)">Tenkeyless (TKL, 87%, 80%)</option>
				      <option value="75% (84 Key)">75% (84 Key)</option>
				      <option value="60%">60%</option>
				      <option value="65%">65%</option>
				      <option value="40%">40%</option>
				      <option value="Tenkey (number pad)">Tenkey (number pad)</option>
				    </select>
				  </div >
				    </div>
				</div>
			
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">SWITCH CỦA BÀN PHÍM</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="SWITCH">
				      <option value="">CHỌN SWITCH</option>  
				      <option value="Red switch">Red switch</option>
				      <option value="Brown Switch/ Clear Switch">Brown Switch/ Clear Switch</option>
				      <option value="Blue switch">Blue switch</option>
				      <option value="Black Switch">Black Switch</option>
				      <option value="MX-Speed / MX Silver">MX-Speed / MX Silver</option>
				      <option value="Silent Switch">Silent Switch</option>	
				      <option value="Topre switch">Topre switch</option>
				      <option value="Logitech Romer-G">Logitech Romer-G</option>
				      <option value="Razer green switch">Razer green switch</option>
				      <option value="Razer Orange switch">Razer Orange switch</option>
				      <option value="Alpha-Zulu Linear Switch">Alpha-Zulu Linear Switch</option>
				      <option value="Alpha-Zulu Tactile Switch">Alpha-Zulu Tactile Switch</option>							      		      
				    </select>
				  </div >
				    </div>
				</div>
			
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">RGB CỦA BÀN PHÍM</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="RGB">
				      <option value="">CHỌN RGB</option>  
				      <option value="KHÔNG">KHÔNG</option>
				      <option value="CÓ">CÓ(FIRMWAVE)</option>
				      <option value="CÓ">CÓ(KEY ON KEYBORAD)</option>						      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">HÃNG</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="HANG">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">KẾT NỐI</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="KETNOI">
				      <option value="">CHỌN KẾT NỐI</option>  
				      <option value="KHÔNG DÂY (DÙNG PIN AAA)">KHÔNG DÂY (DÙNG PIN AAA)</option>
				      <option value="CÓ DÂY">CÓ DÂY</option>
				      <option value="KHÔNG DÂY (SẠC QUA CỔNG USB)">KHÔNG DÂY (SẠC QUA CỔNG USB)</option>						      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>				
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
				<br>
				
			<?php
				}
			?>
			<!-- =======================================mouse================================================ -->
			<?php
				if ($catidadd==12) 
				{
			?>
				<input type="hidden" name="id" value="<?php echo$id ?>">
				<br>
				
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">RGB CỦA BÀN PHÍM</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="RGB">
				      <option value="">CHỌN RGB</option>  
				      <option value="KHÔNG">KHÔNG</option>
				      <option value="CÓ">CÓ(FIRMWAVE)</option>
				      <option value="CÓ">CÓ(KEY ON mouse)</option>						      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">HÃNG</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="HANG">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">KẾT NỐI</label>
				    </div>
				    <div class="col-sm-5"> 
				      <div class="form-group">
				    <select class="form-control" name="KETNOI">
				      <option value="">CHỌN KẾT NỐI</option>  
				      <option value="KHÔNG DÂY (DÙNG PIN AAA)">KHÔNG DÂY (DÙNG PIN AAA)</option>
				      <option value="CÓ DÂY">CÓ DÂY</option>
				      <option value="KHÔNG DÂY (SẠC QUA CỔNG USB)">KHÔNG DÂY (SẠC QUA CỔNG USB)</option>						      		      
				    </select>
				  </div >
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">TRỌNG LƯỢNG</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="TRONGLUONG">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">LOẠI</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="text" class="form-control" name="LOAI">
				    </div>
				</div>
				<br>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 2</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img2"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 3</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img3"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 4</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img4"><br><br>
				    </div>
				</div>
				<div class="row">
				  	<div class="col-sm-2"></div>
				    <div class="col-sm-2">
				      <label for="usr">image 5</label>
				    </div>
				    <div class="col-sm-5"> 
				      <input type="file" id="myfile" name="img5"><br><br>
				    </div>
				</div>				
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<input type="submit" class="btn btn-success" value="Success">
						&nbsp&nbsp&nbsp
						<button type="submit" class="btn btn-danger">Danger</button>
					</div>
					<div class="col-sm-4"></div>
				</div>
				<br>
				
			<?php
				}
			?>
		</form>
	</div>
















</body>
</html>
<?php
	include('FOOTER_admin.php');
?>