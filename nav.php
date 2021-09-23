<?php
  include('connect/connect.php');
 if(!isset($_SESSION)) 
    { 
        session_start(); 
      }
 if((isset($_SESSION['cart']) & !empty($_SESSION['cart']))){
  $quantity = count($_SESSION['cart']);
  }
  else{
    $quantity=0; 
  }   
?>
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="resources/img/LOGO.PNG" style="width:100PX;height: 50PX;">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <form class="navbar-form navbar-left" action="input_loc.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">TÌM</button>
    </form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php 
          if(!isset($_SESSION['customer']) || empty($_SESSION['customer']))
        {?>
        <li>
          <a href="login.php"><span class="glyphicon glyphicon-user"></span> Your Account</a>
        </li>
        <?php }
        else
          { 
            $name=$_SESSION['customer'];
            $sql="select * from users where email='$name'";
            $res=mysqli_query($connection,$sql);
            while($r=mysqli_fetch_array($res))
          {
        ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><?php echo $r['username'] ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">đăng xuất</a></li>
            <li><a href="#">thông tin tài khoảng</a></li>
            <li><a href="#">lịch sử giao dịch</a></li>
          </ul>
        </li>
        <?php
          }
        }
        ?>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span class="badge"><?php echo $quantity; ?></a></li>
      </ul>
    </div>
  </div>