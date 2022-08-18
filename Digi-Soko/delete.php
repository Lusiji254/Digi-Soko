<?php
	
	$conn = mysqli_connect('localhost', 'root','','vegetables_website' );
	if(!$conn){
	     echo "Connection failed";
	 }

	 $prod=$_GET["product"];
	 $sql="DELETE FROM `product_profile` WHERE Product_id='$prod'";
	 if(mysqli_query($conn,$sql))
	 {
	 	header("location:product_change.php");
	 	echo "Product deleted";
	 }
	 else
	 {
	 	die("Error:".mysqli_error($conn));
	 }