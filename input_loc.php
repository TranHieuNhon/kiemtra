<?php 
include('nav.php');
	require('Header.php');
	require('NAV_MIDLE.php');
include('connect/connect.php');
if (isset($_GET['catid'])) {
  $ten=$_GET['catid'];
}
if (isset($_GET['bang'])) {
  $bang=$_GET['bang'];
}
if (isset($_POST['search'])) {
  $value=$_POST['search'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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
  <div class="row">
    <?php 
    if (isset($bang)) {
      $sql="select * from products,$bang where $ten";
    }
    else{
      if (isset($ten)) {
      $sql="select * from products where $ten";
      } 
      else{
        $sql="select * from products where title LIKE '%$value%'";
      }
    }
    
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
       <a href="info_product.php?idpro=<?php echo$r['id'] ?>"><div class="panel-footer"><p style="color: black ; text-align: center;height: 70px;"><STRONG><?php echo $r['title'] ?></STRONG></p></div></a>
        <p  style="color: black ; text-align: center;"><STRONG ><?php echo VndDot($r['price']*23000) ?> VNĐ</STRONG></p>
      </div>
    </div>
    <?php
       }  
        ?>
  </div>
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




 
