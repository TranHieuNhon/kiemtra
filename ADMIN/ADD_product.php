<?php
	include('../connect/connect.php');
	include('header.php');
	include('nav_admin.php');
  //include('xulydangnhap.php');
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
	<form method="POST" action="handle_add_product.php">
		<div class="container">
		<div class="container-fluid bg-3 text-center">    
  <h3>ADD VALUE PRODUCT</h3><br>
  <div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">TITLE PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="text" class="form-control" name="Name">
    </div>
</div><br>

<div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">PRICE PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="text" class="form-control" name="price">
    </div>
</div><br>

<div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">INSUARE PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="text" class="form-control" name="INSUARE">
    </div>
</div><br>

<div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">image PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="file" id="myfile" name="img"><br><br>
    </div>
</div>
<div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">AMOUNT PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <input type="text" class="form-control" name="amount">
    </div>
</div><br>

<div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      <label for="usr">CATEGORY PRODUCT</label>
    </div>
    <div class="col-sm-5"> 
      <div class="form-group">
    <select class="form-control" name="category">

  <?php 
    $sql="select*from category";
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

<input type="submit" class="btn btn-success" value="Success">
&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-danger">Danger</button>
<br><br><br>
		</div>
	</div>
	</form>	
</body>
</html>
<?php
	include('FOOTER_admin.php')
?>
