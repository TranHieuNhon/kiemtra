<?php
	include('../connect/connect.php');
	include('header.php');
	include('nav_admin.php');
  include('xulydangnhap.php');
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
  <?php 
    $sql="select * from products where id='$id'";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      $catid=$r['catid'];
      $title=$r['title'];
      $price=$r['price'];
      $image=$r['image'];
      $insurance=$r['insurance'];
      $hang=$r['hãng'];
      $AMOUNT=$r['AMOUNT'];
    }
      ?>
	<form method="POST" action="handle_updata_product.php">
		<div class="container">
		<div class="container-fluid bg-3 text-center">    
  <h3>ADD VALUE PRODUCT</h3><br>
  <input type="hidden" name="ID" value="<?php echo$id?>">

  <div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">Name PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="text" class="form-control" name="Name" value="<?php echo $title; ?>" >
    </div>
</div><br>

<div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">price PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="text" class="form-control" name="price" value="<?php echo $price; ?>" >
    </div>
</div><br>

<div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">insurance PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="text" class="form-control" name="insurance"value="<?php echo $insurance; ?>" >
    </div>
</div><br>

<div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">image PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="file" name="img" value="<?php echo $image ?>"><br><br>
    </div>
</div><br>

<div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">category PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <div class="form-group">
    <select class="form-control" name="category">

  <?php 
    $sql="SELECT * FROM category WHERE id=(SELECT catid FROM products WHERE id='$id');";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>     
      <option value="<?php echo $r['id'] ?>"><?php echo $r['name'] ?></option>
  <?php
       }  
        ?>
        </select>
  </div >
    </div>
</div>

<div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">AMOUNT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="text" class="form-control" name="amount" value="<?php echo $AMOUNT; ?>">
    </div>
</div><br>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">HÃNG SẢN XUẤT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="text" class="form-control" name="hang" value="<?php echo $hang; ?>">
    </div>
</div><br>


<input type="submit" class="btn btn-success" value="Success">
&nbsp&nbsp&nbsp
<button type="reset" class="btn btn-danger">Reset</button>
<br><br><br>
		</div>
	</div>
	</form>	
</body>
</html>
<?php
	include('../footer.php');
?>