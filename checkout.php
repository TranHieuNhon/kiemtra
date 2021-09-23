<?php
session_start();
include('nav.php');
include('Header.php');
require('connect/connect.php');

if (isset($_GET['totalsale'])) {
    $totalsale=$_GET['totalsale'];
}
if(!isset($_SESSION['customer']) || empty($_SESSION['customer'])){
header('location:login.php');
}
$uid=$_SESSION['customerid'];
$total=0;
$countproduct=0;
if(isset($_SESSION['cart'])){
$cart=$_SESSION['cart'];
foreach($cart as $id => $quantity){
$sql_product="select * from products where id=$id";
$res_product=mysqli_query($connection,$sql_product);
$r_product=mysqli_fetch_assoc($res_product);
$total = $total + ($r_product['price'] * $quantity);
if ($total>$totalsale) {
    $total=$totalsale;
}
$countproduct=$countproduct+$quantity;
}
//nếu trang được gọi lại lần 2(submit bởi form)
if(isset($_POST) & !empty($_POST) & isset($_POST['agree']))
{
if($_POST['agree'] == true){
//lấy dữ liệu từ form
$country=$_POST['country'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$company=$_POST['company'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zipcode'];
$mobile=$_POST['phone'];
$payment=$_POST['payment'];
//kiem tra khach hang đã có trong usermeta hay chưa
$sql_sel="select * from usersmeta where uid=$uid";
$res=mysqli_query($connection,$sql_sel);
$r=mysqli_fetch_assoc($res); //mảng kết hợp
$count=mysqli_num_rows($res);
//đã có dl khach hang --> cập nhật dl lại
if($count==1){
$sql_usersmeta="update usersmeta set country='$country',
firstname='$firstname', lastname='$lastname', company='$company',
address1='$address1', address2='$address2', city='$city',
state='$state', zip='$zip', mobile='$mobile' where uid=$uid";
}
else{
$sql_usersmeta="insert into usersmeta(country, firstname,
lastname, company, address1, address2, city, state, zip, mobile, uid)
values('$country', '$firstname','$lastname', '$company',
'$address1','$address2', '$city', '$state','$zip','$mobile',
'$uid')";
}
$res_usersmeta=mysqli_query($connection,$sql_usersmeta);
//Nếu update hoặc insert KH vao usermeta thanh công
//--tính tổng tiền đặt hàng, insert vào bảng order (đơn đặt hàng)
if($res_usersmeta){
//insert vào order
$sql_order="insert into orders(uid, totalprice, paymentmode,
orderstatus) values('$uid', $total, '$payment', 'Order placed')";
$res_order=mysqli_query($connection,$sql_order);
//nếu dl vao bảng order thành công,insert vào bảng orderitems
if($res_order){
    //lấy giá trị khóa chính của field vừa insert
    $orderid= mysqli_insert_id($connection);
    foreach ($cart as $id => $quantity) {
        $sql_product="select * from products where id=$id";
        $res_product=mysqli_query($connection,$sql_product);
        $r_product=mysqli_fetch_assoc($res_product);
        $productprice=$r_product['price'];
        $sql_orderitems="insert into orderitems(pid,pquantity, orderid, productprice) values($id,$quantity, $orderid, $productprice)";
        $res_orderitems=mysqli_query($connection,$sql_orderitems);
    }
}
//xóa session
unset($_SESSION['cart']);
header('location:demthanhtoan.php');
}
}
}
}
?>
<!--SHOP CONTENT -->
<div class="content">
<div class="container">
<form method="post">
<div class="row">
 <div class="col-md-offset-3 col-md-6">
 <h3 style="text-align: center;">Billing Details</h3><br>
<label>Country</label>
<select name="country" class="form-control">
<option value="">Select Country</option>
<option value="VN">Việt Nam</option>
<option value="CH">China</option>
</select>
<div class="clearfix space20"></div><br>
<div class="row">
<div class="col-md-6">
<label>First Name</label>
<input class="form-control" type="text" name="fname"
value="">
 </div>
 <div class="col-md-6">
 <label>Last Name</label>
 <input class="form-control" type="text" name="lname" value="">
 </div>
</div>
<div class="clearfix space20"></div><br>
 <label>Company</label>
 <input type="text" class="form-control" name="company">
<div class="clearfix space20"></div><br>
<label>Address</label>
 <input type="text" class="form-control" name="address1">
 <div class="clearfix space20"></div><br>
<label>Delivery address</label>
 <input type="text" class="form-control" name="address2">
 <div class="clearfix space20"></div><br>
 <div class="row">
 <div class="col-md-4">
<label>City</label>
<input class="form-control" type="text" name="city">
 </div>
 <div class="col-md-4">
<label>State</label>
<input class="form-control" type="text" name="state" value="">
 </div>
 <div class="col-md-4">
 <label>Postcode</label>
 <input class="form-control" type="text" name="zipcode"
placeholder="Postcode/Zipcode" value="">
 </div>
</div>
<div class="clearfix space20"></div><br>
<label>Phone</label>
 <input type="text" class="form-control" name="phone">
</div>
</div>
 </br>
<div class="row">
<div class="col-md-offset-1 col-md-10">
<h4>Your order</h4><br>
<table class="table">
<tr> <!--tổng giỏ hàng-->
<th width="30%">Cart Subtotal</th>
<td width="30%"><?php echo $countproduct; ?></td>
</tr>
<tr>
<th>Shipping and Handling</th>
<td>Free</td>
</tr>
<tr>
<th>Order Total</th>
<td><?php echo VndDot($total*23000) ?></td>
</tr>
</table>
</div>
</div>
<!--Phương thức thanh toán-->
<div class="row">
<div class="col-md-offset-1 col-md-5">
<h4>Payment method</h4><br>
</div>
</div>
<div class="row">
<div class="col-md-offset-1 col-md-5">
<input type="radio" name="payment" value="cod" checked="checked">
<!--Thanh toán khi giao hàng -->
<label>Cash On Delivery</label>
<p>Make your payment directly into our bank account. Please use your
Order ID as the payment reference. Your order won't be shipped until the funds have cleared
in our account.</p>
</div>
<div class="col-md-5">
<input type="radio" name="payment" value="pal">
<!--Thanh toán bằng tài khoản Paypal -->
<label>Paypal</label>
<p>Pay via PayPal; you can pay with your credit card if you don't have a
PayPal account</p>
</div>
</div>
<br>
<div class="row">
<div class="col-md-offset-1 col-md-10">
<input type="checkbox" name="agree" value="true" class="csscheckbox">
I've read and accept the terms conditions
<div class="clearfix"></div><br><br>
<input type="submit" value="Pay Now" class="btn btn-primary">
<div class="clearfix space20"></div><br>
</div>
</div>
</form>
</div>
</div>
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