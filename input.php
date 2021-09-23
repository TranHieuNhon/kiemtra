<?php 
include('nav.php');
	require('Header.php');
	require('NAV_MIDLE.php');
include('connect/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
* {box-sizing: border-box;}

.container1 {
  position: relative;
  width: 100%;
  max-width: 3000px;
}

.image {
  display: block;
  width: 243px;
  height: 250px;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  text-align: left;
  border-radius: 3px;
  height: 60px;
  padding: 5px;

}

.container1:hover .overlay {
  opacity: 1;
}
</style>
</head>
<body>
	<div class="container">
  <!-- =======================================PC======================================= --> 

  <div class="row" style="background-color:red;margin: 3PX;">
    <p style="color:white; float: left; font-size: 20PX;margin-left:12px;margin-top:10px ;">PC-MIỄN PHÍ GIAO HÀNG CẢ NƯỚC</p>
    <a href="input_loc.php?catid=<?php echo"products.catid=9"; ?>" style="color:white; float: right; font-size: 14PX;margin-right:12px;margin-top:15px ;">xem tất cả <span class="glyphicon glyphicon-arrow-right"></span></a>
  </div>
  <div class="row">
    <?php 
    $sql="select*from products  where catid=9 LIMIT 4";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>
    <div class="col-sm-3" >
      <div class="panel panel-primary">
        
        <div class="panel-body">
          <div class="container1">
  <img src="resources/img/<?php echo $r['image'] ?>" alt="Avatar" class="image">
  <div class="overlay">
    <div class="col-8">
      <p style="font-size: 15px;float: left;color: white;margin-top: 10px;">click để mua hàng </p>
    </div>
    <div class="col-4">
      <?php
        if ($r['AMOUNT']>0) {
         ?>
         <a href="addtocart.php?id=<?php echo $r['id'] ?>"class="btn btn-primary"role="button" style="float: right;padding: 10px;">Đặt hàng</a>
         <?php
        }
        else{
          ?>
          <a href="#"class="btn btn-danger"role="button" style="float: right;padding: 10px;" disabled>hết hàng</a>
          <?php
        }
      ?>
        
    </div>   
    </div>
  </div>
        </div>
       <div class="panel-footer"><p style="color: black ; text-align: center;height: 70px;"><a href="info_product.php?idpro=<?php echo $r['id'] ?>"><STRONG><?php echo $r['title'] ?></STRONG></a></p></div>
        <p  style="color: black ; text-align: center;"><STRONG ><?php echo VndDot(23000*$r['price']); ?> VNĐ</STRONG></p>
      </div>
    </div>
    <?php
       }  
        ?>
  </div>
  <br>
  <!-- =======================================LAPTOP GAMING======================================= --> 

  <div class="row" style="background-color:red;margin: 3PX;">
    <p style="color:white; float: left; font-size: 20PX;margin-left:12px;margin-top:10px ;">LAPTOP GAMING - MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</p>
    <a href="input_loc.php?catid=<?php echo"products.catid=10 AND products.id=laptop.id AND laptop.loại='gaming'"; ?>&bang=laptop" style="color:white; float: right; font-size: 14PX;margin-right:12px;margin-top:15px ;">xem tất cả <span class="glyphicon glyphicon-arrow-right"></span></a>
  </div>
  <div class="row">
    <?php 
    $sql="select * FROM products,laptop WHERE laptop.id=products.id AND laptop.loại='gaming' LIMIT 4";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>
    <div class="col-sm-3" >
      <div class="panel panel-primary">
        
        <div class="panel-body">
          <div class="container1">
  <img src="resources/img/<?php echo $r['image'] ?>" alt="Avatar" class="image">
  <div class="overlay">
    <div class="col-8">
      <p style="font-size: 15px;float: left;color: white;margin-top: 10px;">click để mua hàng </p>
    </div>
    <div class="col-4">
        <?php
        if ($r['AMOUNT']>0) {
         ?>
         <a href="addtocart.php?id=<?php echo $r['id'] ?>"class="btn btn-primary"role="button" style="float: right;padding: 10px;">Đặt hàng</a>
         <?php
        }
        else{
          ?>
          <a href="#"class="btn btn-danger"role="button" style="float: right;padding: 10px;" disabled>hết hàng</a>
          <?php
        }
      ?>
    </div>   
    </div>
  </div>
        </div>
       <div class="panel-footer"><p style="color: black ; text-align: center;height: 70px;"><a href="info_product.php?idpro=<?php echo $r['id'] ?>"><STRONG><?php echo $r['title'] ?></STRONG></a></p></div>
        <p  style="color: black ; text-align: center;"><STRONG ><?php echo VndDot(23000*$r['price']); ?> VNĐ</STRONG></p>
      </div>
    </div>
    <?php
       }  
        ?>
  </div>
  <br>
  <!-- =======================================MÀN HÌNH GAMING======================================= --> 

  <div class="row" style="background-color:red;margin: 3PX;">
    <p style="color:white; float: left; font-size: 20PX;margin-left:12px;margin-top:10px ;">MÀN HÌNH KHUYẾN MÃI HOT - GIAO NHANH 2H</p>
    <a href="input_loc.php?catid=<?php echo"catid=13"; ?>" style="color:white; float: right; font-size: 14PX;margin-right:12px;margin-top:15px ;">xem tất cả <span class="glyphicon glyphicon-arrow-right"></span></a>
  </div>
  <div class="row">
    <?php 
    $sql="select*from products  where catid=13 LIMIT 4";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>
    <div class="col-sm-3" >
      <div class="panel panel-primary">
        
        <div class="panel-body">
          <div class="container1">
  <img src="resources/img/<?php echo $r['image'] ?>" alt="Avatar" class="image">
  <div class="overlay">
    <div class="col-8">
      <p style="font-size: 15px;float: left;color: white;margin-top: 10px;">click để mua hàng </p>
    </div>
    <div class="col-4">
        <?php
        if ($r['AMOUNT']>0) {
         ?>
         <a href="addtocart.php?id=<?php echo $r['id'] ?>"class="btn btn-primary"role="button" style="float: right;padding: 10px;" disabled>hết hàng</a>
         <?php
        }
        else{
          ?>
          <a href="#"class="btn btn-danger"role="button" style="float: right;padding: 10px;">Đặt hàng</a>
          <?php
        }
      ?>
    </div>   
    </div>
  </div>
        </div>
       <div class="panel-footer"><p style="color: black ; text-align: center;height: 70px;"><a href="info_product.php?idpro=<?php echo $r['id'] ?>"><STRONG><?php echo $r['title'] ?></STRONG></a></p></div>
        <p  style="color: black ; text-align: center;"><STRONG ><?php echo VndDot(23000*$r['price']); ?> VNĐ</STRONG></p>
      </div>
    </div>
    <?php
       }  
        ?>
  </div>
  <br>
  <!-- =======================================LAPTOP VAN PHONG======================================= --> 

  <div class="row" style="background-color:red;margin: 3PX;">
    <p style="color:white; float: left; font-size: 20PX;margin-left:12px;margin-top:10px ;">LAPTOP VĂN PHÒNG - MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</p>
    <a href="input_loc.php?catid=<?php echo"products.catid=10 AND products.id=laptop.id AND laptop.loại='vanphong'"; ?>&bang=laptop" style="color:white; float: right; font-size: 14PX;margin-right:12px;margin-top:15px ;">xem tất cả <span class="glyphicon glyphicon-arrow-right"></span></a>
  </div>
  <div class="row">
    <?php 
    $sql="select * FROM products,laptop WHERE laptop.id=products.id AND laptop.loại='vanphong' LIMIT 4";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>
    <div class="col-sm-3" >
      <div class="panel panel-primary">
        
        <div class="panel-body">
          <div class="container1">
  <img src="resources/img/<?php echo $r['image'] ?>" alt="Avatar" class="image">
  <div class="overlay">
    <div class="col-8">
      <p style="font-size: 15px;float: left;color: white;margin-top: 10px;">click để mua hàng </p>
    </div>
    <div class="col-4">
        <?php
        if ($r['AMOUNT']>0) {
         ?>
         <a href="addtocart.php?id=<?php echo $r['id'] ?>"class="btn btn-primary"role="button" style="float: right;padding: 10px;">Đặt hàng</a>
         <?php
        }
        else{
          ?>
          <a href="#" class="btn btn-danger"role="button" style="float: right;padding: 10px;" disabled>hết hàng</a>
          <?php
        }
      ?>
    </div>   
    </div>
  </div>
        </div>
       <div class="panel-footer"><p style="color: black ; text-align: center;height: 70px;"><STRONG><?php echo $r['title'] ?></STRONG></p></div>
        <p  style="color: black ; text-align: center;"><STRONG ><?php echo VndDot(23000*$r['price']); ?> VNĐ</STRONG></p>
      </div>
    </div>
    <?php
       }  
        ?>
  </div>
  <br>
  <!-- =======================================BÀN PHÍM======================================= --> 

  <div class="row" style="background-color:red;margin: 3PX;">
    <p style="color:white; float: left; font-size: 20PX;margin-left:12px;margin-top:10px ;">LAPTOP GAMING - MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</p>
    <a href="input_loc.php?catid=<?php echo"catid=11"; ?>" style="color:white; float: right; font-size: 14PX;margin-right:12px;margin-top:15px ;">xem tất cả <span class="glyphicon glyphicon-arrow-right"></span></a>
  </div>
  <div class="row">
    <?php 
    $sql="select*from products where catid=11 LIMIT 4";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>
    <div class="col-sm-3" >
      <div class="panel panel-primary">
        
        <div class="panel-body">
          <div class="container1">
  <img src="resources/img/<?php echo $r['image'] ?>" alt="Avatar" class="image">
  <div class="overlay">
    <div class="col-8">
      <p style="font-size: 15px;float: left;color: white;margin-top: 10px;">click để mua hàng </p>
    </div>
    <div class="col-4">
        <?php
        if ($r['AMOUNT']>0) {
         ?>
         <a href="addtocart.php?id=<?php echo $r['id'] ?>"class="btn btn-primary"role="button" style="float: right;padding: 10px;">Đặt hàng</a>
         <?php
        }
        else{
          ?>
          <a href="#"class="btn btn-danger"role="button" style="float: right;padding: 10px; disabled">hết hàng</a>
          <?php
        }
      ?>
    </div>   
    </div>
  </div>
        </div>
       <div class="panel-footer"><p style="color: black ; text-align: center;height: 70px;"><a href="info_product.php?idpro=<?php echo $r['id'] ?>"><STRONG><?php echo $r['title'] ?></STRONG></a></p></div>
        <p  style="color: black ; text-align: center;"><STRONG ><?php echo VndDot(23000*$r['price']); ?> VNĐ</STRONG></p>
      </div>
    </div>
    <?php
       }  
        ?>
  </div>
  <br>
  <!-- =======================================CHUỘT======================================= --> 

  <div class="row" style="background-color:red;margin: 3PX;">
    <p style="color:white; float: left; font-size: 20PX;margin-left:12px;margin-top:10px ;">LAPTOP GAMING - MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</p>
    <a href="input_loc.php?catid=<?php echo"catid=12"; ?>" style="color:white; float: right; font-size: 14PX;margin-right:12px;margin-top:15px ;">xem tất cả <span class="glyphicon glyphicon-arrow-right"></span></a>
  </div>
  <div class="row">
    <?php 
    $sql="select*from products where catid=12 LIMIT 4";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>
    <div class="col-sm-3" >
      <div class="panel panel-primary">
        
        <div class="panel-body">
          <div class="container1">
  <img src="resources/img/<?php echo $r['image'] ?>" alt="Avatar" class="image">
  <div class="overlay">
    <div class="col-8">
      <p style="font-size: 15px;float: left;color: white;margin-top: 10px;">click để mua hàng </p>
    </div>
    <div class="col-4">
        <?php
        if ($r['AMOUNT']>0) {
         ?>
         <a href="addtocart.php?id=<?php echo $r['id'] ?>"class="btn btn-primary"role="button" style="float: right;padding: 10px;">Đặt hàng</a>
         <?php
        }
        else{
          ?>
          <a href="#"class="btn btn-danger"role="button" style="float: right;padding: 10px;" disabled>hết hàng</a>
          <?php
        }
      ?>
    </div>   
    </div>
  </div>
        </div>
       <div class="panel-footer"><p style="color: black ; text-align: center;height: 70px;"><a href="info_product.php?idpro=<?php echo $r['id'] ?>"><STRONG><?php echo $r['title'] ?></STRONG></a></p></div>
        <p  style="color: black ; text-align: center;"><STRONG ><?php echo VndDot(23000*$r['price']); ?> VNĐ</STRONG></p>
      </div>
    </div>
    <?php
       }  
        ?>
  </div>
  <br>
</div><br><br>
</body>
</html>
<?php
	require('footer.php');
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