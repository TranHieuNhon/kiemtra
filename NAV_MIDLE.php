
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

<!DOCTYPE html>
<html>
<head>

<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}




.navbar1 {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;

}

.navbar1 a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown1 {
  float: left;
  overflow: hidden;
}

.dropdown1 .dropbtn1 {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}

.navbar1 a:hover, .dropdown1:hover .dropbtn1 {
  background-color: red;
}

.dropdown1-content1 {
  display: none;
  position: absolute;
  background-color: white;
  width: 100%;
  left: 0;
  box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown1-content1 .header1 {
  background: red;
  padding: 16px;
  color: white;
}

.dropdown1:hover .dropdown1-content1 {
  display: block;
}

/* Create three equal columns that floats next to each other */
.column1 {
  float: left;
  width: 20%;
  padding: 8px;
  background-color: white;
  height: 250px;
}

.column1 a {
  float: none;
  color: black;
  padding: 5px;
  text-decoration: none;
  display: block;
  text-align: left;

}

.column1 a:hover {
  background-color: #ddd;
}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}
.tieude{
  font-size: 16px;
  color: DodgerBlue;
}
</style>
</head>
<body>
  <div class="navbar1">
    <a href="input.php">HOME</a>
  <div class="dropdown1">
    <button class="dropbtn1">LINH KIỆN MÁY TÍNH</button>
    <div class="dropdown1-content1">   
      <div class="row1">
        <div class="column1">
          <Strong class="tieude">CPU-Bộ vi xử lý</strong>
            <br><br>
          <a href="#">CPU INTEL</a>
          <a href="#">CPU AMD</a>

        </div>
        <div class="column1">
          <Strong class="tieude">VGA-Card màn hình</strong>
            <br><br>
          <a href="#">VGA NVIDIA</a>
          <a href="#">VGA AMD</a>
          <a href="#">VGA theo hãng</a>
          <a href="#">VGA theo Dung Lượng</a>
        </div>
        <div class="column1">
          <Strong class="tieude">PSU-nguồn máy tính</strong>
            <br><br>
          <a href="#">Nguồn theo hãng</a>
          <a href="#">Công Xuất Nguồn</a>
          <a href="#">chuẩn nguồn</a>
          <a href="#">kiểu dây nguồn</a>
          <a href="#">Kích cỡ</a>
        </div>
        <div class="column1">
          <Strong class="tieude">MAINBOARD-Bo mạch Chủ</strong>
            <br><br>
          <a href="#">mainboard cho CPU INTEL</a>
          <a href="#">mainboard cho CPU AMD</a>
          <a href="#">Mainboard theo hãng</a>
        </div>
        <div class="column1">
          <Strong class="tieude">RAM-bộ nhớ trong</strong>
            <br><br>
          <a href="#">RAM theo tốc độ(BUSS)</a>
          <a href="#">RAM theo hãng</a>
          <a href="#">RAM theo tính năng</a>
          <a href="#">RAM theo dung lượng</a>
        </div>
      </div>
      <div class="row1">
        <div class="column1">
          <Strong class="tieude">Ổ cứng HDD-SSD</strong>
          <a href="#">HDD-Ổ Cứng</a>
          <a href="#">Ổ NAS(Ổ cứng lưu trữ mạng)</a>
          <a href="#">SSD-Ổ cứng thể rắn</a>
          <a href="#">Ổ cứng chuyên camera</a>
        </div>
        <div class="column1">
          <Strong class="tieude">case-Vỏ máy Tính</strong>
          <a href="#">Vỏ Case Theo Hãng</a>
          <a href="#">Kích Thước</a>
          <a href="#">Chất Liệu</a>
          <a href="#">Kích Thước Mainboard</a>
          <a href="#">Số Quạt Đi Kèm</a>
          <a href="#">Màu Sắc</a>
        </div>
        <div class="column1">
          <Strong class="tieude">Đồ chơi máy tính</strong>
          <a href="#">Thiết bị livestream</a>
          <a href="#">Kính thực tế ảo VR</a>
        </div>
        <div class="column1">
          <Strong class="tieude">Bàn Phím - Chuột</strong>
          <a href="#">Chuột Máy Tính</a>
          <a href="#">Bàn phím Máy Tính</a>
          <a href="#">Bộ bàn phím - chuột</a>
        </div>
      </div>
    </div>
  </div>
  <a href="#">MÀN HÌNH</a>
    <a href="#">ÂM THANH</a>
    <a href="#">PHỤ KIỆN</a>
    <a href="#">GEAR</a>
    <a href="#">LAPTOP</a>
    <a href="#">PC ĐỒNG BỘ</a>
    <a href="buildPC.php">BUILD PC</a>
</div>
<br><br>
</body>
</html>
