<?php
include('nav.php');
include('Header.php');
require('NAV_MIDLE.php');
require('connect/connect.php');
?>

<div class="content">
	  <form action="http://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
		<?php 
    $sql="select * from orders WHERE id = (SELECT MAX(id) FROM orders);";
    $res=mysqli_query($connection,$sql);
    while($r=mysqli_fetch_array($res))
    {
      ?>
      	<div class="container" >
      <div class="col-md-offset-0 col-md-12">
      	<div class="row">
      	<div class="col-md-4" >
      		<h2 style="text-align: center;">THÔNG TIN HÓA ĐƠN</h3>
      	 <h4><STRONG style="color: red ">ID đơn hàng :</STRONG><STRONG><?php echo $r['id'] ?></STRONG></h4>
      	 <h4><STRONG style="color: red ">ID Khách hàng : </STRONG><STRONG><?php echo $r['uid'] ?></STRONG></h4>
      	 <h4><STRONG style="color: red ">Tổng giá trị đơn hàng :</STRONG><STRONG><?php echo $r['totalprice'] ?>$</STRONG></h4>
      	 <h4><STRONG style="color: red ">tình trạng đơn hàng :</STRONG><STRONG><?php echo $r['orderstatus'] ?></STRONG></h4>
      	 <h4><STRONG style="color: red ">hình thức thanh toán : </STRONG><STRONG><?php echo $r['paymentmode'] ?></STRONG></h4>
      	 <h4><STRONG style="color: red ">thời gian đặt hàng : </STRONG><STRONG><?php echo $r['timestamp'] ?></STRONG></h4>

         <input type="hidden" name="business" value="sb-y7c4t6054860@business.example.com">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="item_name" value="HoaDonMuaHang">
        <input type="hidden" name="amount" placeholder="nhập số tiền" value="<?php echo $r['totalprice'] ?>">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="return" value="http://localhost/ShopPC/xulypaypal.php?id=<?php echo $r['id'] ?>">
        <input type="hidden" name="cancel_return" value="http://localhost/thuongmaidientu/loi.html">
        
      	</div>
      	 

	      	 <?php
	      	 	
	    		$sql1="select * from usersmeta;";
	    		$res1=mysqli_query($connection,$sql1);
	    		while($w=mysqli_fetch_array($res1))
	    		{
	    		?>
	    		 <div class="col-md-8" >
	    		 	<h2 style="text-align: center;">THÔNG TIN KHÁCH HÀNG</h2>
		      	 <h4  ><STRONG style="color: red " >ID Khách hàng : </STRONG><STRONG><?php echo $w['uid'] ?></STRONG></h4>
		      	 <h4><STRONG style="color: red " >Họ khách hàng : </STRONG><STRONG><?php echo $w['firstname'] ?></STRONG></h4>
		      	 <h4><STRONG style="color: red " >Tên khách hàng : </STRONG><STRONG><?php echo $w['lastname'] ?></STRONG></h4>
		      	 <h4><STRONG style="color: red " >tên đơn vị đặt hàng : </STRONG><STRONG><?php echo $w['company'] ?></STRONG></h4>
		      	 <h4><STRONG style="color: red " >địa chỉ giao hàng 1 : </STRONG><STRONG><?php echo $w['address1'] ?></STRONG></h4>
		      	 <h4><STRONG style="color: red " >địa chỉ giao hàng 2 : </STRONG><STRONG><?php echo $w['address2'] ?></STRONG></h4>
		      	 <h4><STRONG style="color: red " >Tỉnh/TP : </STRONG><STRONG><?php echo $w['city'] ?></STRONG></h4>
		      	 <h4><STRONG style="color: red " >SDT : </STRONG><STRONG><?php echo $w['mobile'] ?></STRONG></h4>
             <input type="submit" name="submit" class="btn btn-info" value="thanh toan" >
      	</div>	
      	<?php
	    		}
	    ?>	
        	<?php
   		 }	
    		?>
    		</div>
    	</div>
        
   




      </div>

	</div>
  <div class="container">
    <?php 
  include('footer.php');
  ?>
	<div class="container">
    <fieldset>
    
  </fieldset>
  </div>
   </form>