<?php
include('connect/connect.php');
//include('template/index.php');
//include('template/nav.php');
?>
<!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" type="text/css" href="/thuongmaidientu/resources/css/login.css">
 </head>
 <body>
  <div class="sign-up">
  <div class="circle circle--red"></div>
  <div class="circle circle--yellow"></div>
  <div class="circle circle--green"></div>
  <div class="circle circle--purple"></div>
  <form class="sign-up__form" method="POST">
    <div class="sign-up__content">
      <h2 class="sign-up__title">Login</h2>
      <input class="sign-up__inp" type="email" placeholder="Email" name="email" required="required"/>
      <input class="sign-up__inp" type="password" placeholder="Password" name="password" required="required"/>
      <a class="forgot__password">Forgot your password</a>
    </div>
    <div class="sign-up__buttons">
      <a class="btn btn--register" href="DANGKY.PHP">Register</a>
      <button class="btn btn--signin" type="submit">Sign in</button>
    </div>
  </form>
</div>
</body>
</html>
<?php   //include("template/footer.php"); ?>

<?php
	session_start();
	require_once'connect/connect.php'; 
	$email=$password=""; 
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email=htmlspecialchars(addslashes(trim($_POST["email"])));
		$password=htmlspecialchars(addslashes(trim($_POST["password"])));
		//$password=shal($password);
		$sql_select="select * from users where email='$email' and pass=$password";
		$result=mysqli_query($connection,$sql_select);

		if($row=mysqli_fetch_array($result)){
		$_SESSION['customer']=$email;
		$_SESSION['customerid']=$row['id'];
		 //echo $row['type'];
		 if ($row['type']=="member") {
		 	 header("location:input.php");
		 }
		 else{
		 	header("location:ADMIN/admin_product.php");
		 }
		
			
		}
		else 
			header("location:login.php");    
	 }		
	?>