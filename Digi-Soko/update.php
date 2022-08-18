<?php
	include "update_profile.php";

	 $conn = mysqli_connect('localhost', 'root','','vegetables_website' );

	 if(!$conn){
	     echo "Connection failed";
	 }

	 $prod=$_GET["product"];
	 $sql="SELECT * FROM `product_profile` WHERE Product_id='$prod'";
	 $result=mysqli_query($conn,$sql);
	 while($row=mysqli_fetch_assoc($result)){

	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Product profile</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" onsubmit="<?php echo update($prod)?>">
		<input type="hidden" name="size" value="1000000">
		<p><label>Product name</label>
			<input type="text" name="pname" value="<?php echo $row['Product_name']?>"></p>
			<p><label>Price per Unit</label>
			<input type="text" name="price" value="<?php echo $row['Price']?>" ></p>
<p><label>Quantity</label>
			<input type="text" name="quantity" value="<?php echo $row['Quantity']?>"></p>
<p><label>Location</label>
			<input type="text" name="location" value="<?php echo $row['Location']?>"></p>
<p><label>Description</label>
			<input type="text" name="description" value="<?php echo $row['Description']?>"></p>
			<p><label>image</label>
			<input type="file" name="image" ></p>

<input type="submit" name="post" value="post">
	</form>

</body>
</html>
<?php
}
?>