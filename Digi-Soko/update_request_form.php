<?php
	include "update_request.php";

	 $conn = mysqli_connect('localhost', 'root','','vegetables_website' );

	 if(!$conn){
	     echo "Connection failed";
	 }

	 $req=$_GET["request"];
	 $sql="SELECT * FROM `request_profile` WHERE Request_number='$req'";
	 $result=mysqli_query($conn,$sql);
	 while($row=mysqli_fetch_assoc($result)){

	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Request Form</title>
	<link rel="stylesheet" type="text/css" href="forms.css">
</head>
<body>
	
	<form class="container" method="post"  enctype="multipart/form-data" onsubmit="<?php echo update($req)?>">
		<input type="hidden" name="size" value="1000000">
		<p><label>Product name</label>
			<input type="text" name="pname" value="<?php echo $row['Product_name']?>"></p>
			<p><label>Description</label>
			<input type="text" name="description" value="<?php echo $row['Description']?>"></p>
           <p><label>Quantity</label>
			<input type="text" name="quantity" value="<?php echo $row['Quantity']?>"></p>
            <p><label>Location</label>
			<input type="text" name="location" value="<?php echo $row['Location']?>"></p>
			
<input type="submit" name="post" value="post">
	</form>


</body>
</html>
<?php
}
?>