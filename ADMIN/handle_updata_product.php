<?php
include('../connect/connect.php');
	  echo $id=$_POST['ID'];
      echo"<br/>";
      echo $title=$_POST['Name'];
      echo"<br/>";
      echo $price=$_POST['price'];
      echo"<br/>";
      echo $insurance=$_POST['insurance'];
      echo"<br/>";
      echo $image=$_POST['img'];
      echo"<br/>";
	  echo $catid=$_POST['category'];
      echo"<br/>";
      echo $AMOUNT=$_POST['amount'];
      echo"<br/>";
      echo $hang=$_POST['hang'];
      echo"<br/>";
	
    $sql=("UPDATE `products` SET `hãng`='$hang',`catid`='$catid',`title`='$title',`price`='$price',`image`='$image',`insurance`='$insurance',`AMOUNT`='$AMOUNT' WHERE `id` ='$id'");
	mysqli_query($connection,$sql);   
    header('Location: admin_product.php');


?>