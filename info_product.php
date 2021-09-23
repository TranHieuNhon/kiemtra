<?php
include('nav.php');
	include('header.php');
	require('NAV_MIDLE.php');
	require'connect/connect.php';
	$idpro=$_GET['idpro'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>info SP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
* {
  box-sizing: border-box;
}
img {
  vertical-align: middle;
}
.container1 {
  position: relative;
}
.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}
.column {
  float: left;
  width: 16.66%;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
</head>
<body>
	<div class="container" >
		<div class="row">
			<?php
			$sql="select * from products,category where products.id='$idpro'and products.catid=category.id";
    		$res=mysqli_query($connection,$sql);
    		while($r=mysqli_fetch_array($res))
    		{
          $soluong=$r['AMOUNT'];
    			$gia=$r['price'];
    			$ten=$r['title'];
    			$baohanh=$r['insurance'];
    			$name=$r['name'];
          $catid=$r['catid'];
          $hang=$r['hãng'];
    		} 
    			?>
    			<?php
			$sql1="select * from $name where id='$idpro'";
    		$res=mysqli_query($connection,$sql1);
    		while($row=mysqli_fetch_array($res))
    		{
    			$anh1=$row['anh1'];
    			$anh2=$row['anh2'];
    			$anh3=$row['anh3'];
    			$anh4=$row['anh4'];
    			$anh5=$row['anh5'];

		?>
    			<div class="col-md-6">
    				<div class="container1">

  <div class="mySlides">
    <img src="resources/img/<?php echo$anh1 ?>" style="width:84%;height:400px">
  </div>

  <div class="mySlides">
    <img src="resources/img/<?php echo$anh2 ?>" style="width:84%;height:400px">
  </div>
  <div class="mySlides">
    <img src="resources/img/<?php echo$anh3 ?>" style="width:84%;height:400px">
  </div>    
  <div class="mySlides">
    <img src="resources/img/<?php echo$anh4 ?>" style="width:84%;height:400px">
  </div>
  <div class="mySlides">
    <img src="resources/img/<?php echo$anh5 ?>" style="width:84%;height:400px">
  </div>
    

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="resources/img/<?php echo$anh1 ?>" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="resources/img/<?php echo$anh2 ?>" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="resources/img/<?php echo$anh3 ?>" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="resources/img/<?php echo$anh4 ?>" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="column"> 
      <img class="demo cursor" src="resources/img/<?php echo$anh5 ?>" style="width:100%" onclick="currentSlide(5)" >
    </div>    
  </div>
</div>
    			</div>
    			<div class="col-sm-6" style="font-size: 25px; text-align:center; "><strong><?php echo $ten ?></strong></div>
    			<br><br><br><br>
    			<div class="col-sm-6" style="font-size: 22px;"><strong>Thông tin chung:</strong></div>
    			<br><br>
    			<div class="col-md-6" style="font-size: 22px;  "><img src="img/Untitled.png" width="8px" height="8px">&nbsp&nbsp&nbsp&nbsp Hãng sản xuất:	<?php echo $hang ?></div>
    			<br>
    			<div class="col-sm-6" style="font-size: 22px;  "><img src="img/Untitled.png" width="8px" height="8px">&nbsp&nbsp&nbsp&nbsp Bảo hành:	<?php echo $baohanh ?></div>
    			<br><br>
    			<div class="col-md-6">
    				<div class="col-md-2" style="font-size:22px ; font-weight: bold;">Giá :</div>
    				<div class="col-md-6" style="font-size:30px ; ">&nbsp&nbsp<?PHP echo VndDot($gia*23000); ?>&nbsp&nbspVND</div>
    			 
    			</div>
    			<div class="col-md-6">
            <?php
              if($soluong>1)
              {
            ?>
            <form action="addtocart.php" method="get">
            <input type="hidden" name="id" value="<?php echo$idpro; ?>">
    				<input type="submit" class="btn btn-danger" value="ĐẶT HÀNG">
    			</form>
          <?php
            }
            else{
              ?>
              <input type="submit" class="btn btn-danger" value="HẾT HÀNG" disabled="true">
              <?php
            }
          ?>
        </div>
    	<?php
    		}
		?>
		</div>
    <div class="row">
      <hr>
      <h4>Sản phẩm liên quan</h4>
      <?php
        $sql = "sELECT * FROM products WHERE catid=$catid AND id != $idpro limit 4";
        $result = mysqli_query($connection,$sql);
        if($result){
          while ($row = mysqli_fetch_assoc($result)) {

      ?>
      <div class="col-sm-3">
        <div class="panel panel-primary">
          <div class="panel-body"><img class="img-responsive" width="400"; height="200" src="resources/img/<?php echo $row['image'] ?>" /></div>
           <a href="info_product.php?idpro=<?php echo $row['id'] ?>"><div class="panel-footer" style="height: 100px; text-align: center;"><p  style="color: black "><?php echo $row['title'] ?></p></div></a> 
            <p  style="color: black; text-align: center;"><?php echo VndDot($row['price']*23000) ?> VNĐ</p>
           </div>
          </div>
        <?php }} ?>
  </div>
		<div class="row">
      <br>
      <hr>

      <h4>Cấu hình chi tiết sản phẩm</h4>
			<table class="table table-bordered">
    <tbody>

    	<?php
	$sql = "SHOW COLUMNS FROM $name WHERE Field!='id' AND Field!='anh1' AND Field!='anh2' AND Field!='anh3' AND Field!='anh4' AND Field!='anh5' ";
$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_array($result)){
    ?>  
      <tr>
        <td style="width: 30%;">
          <?php 
            $ten=$row['Field'];            
            $strng = str_replace('_',' ',$ten);
            echo $strng; 
          ?>          
        </td>
        <td>
        	    <?php
				$sql1 = "select $ten from $name WHERE id='$idpro'";
				$result1 = mysqli_query($connection,$sql1);
				while($r = mysqli_fetch_array($result1)){
					echo $r[$ten];
     			}
        	?>   	
        </td>
      </tr>
            <?php
	}
		?>
    </tbody>
  </table>
    
		</div>		
	</div>

</body>
</html>
<?php
	include ('footer.php');
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
<script>
var slideIndex = 1;
showSlides(slideIndex);



function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
