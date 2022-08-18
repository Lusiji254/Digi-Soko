<?php
session_start();
    if(!isset($_SESSION["email"]))
    {
        header("location:Veg.LogIn.html");
    }

if (isset($_POST['post'])) {
	# code...
	$pname=$_POST['pname'];
	$image = $_FILES['image']['name'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	$location=$_POST['location'];
	$description=$_POST['description'];

	//image file directory
	$target ="images/".basename($image);

	$conn=mysqli_connect("localhost","root","","vegetables_website");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 if(empty($pname)){ echo "Product name Required";}
 	if(empty($image)){ echo "Image Required";}
    if(empty($price)){ echo "Price Required";}
    if(empty($quantity)){ echo "Quantity Required";}
    if(empty($location)){ echo "Location Required";}
    if(empty($description)){ echo "Description Required";}

    $sql="INSERT INTO product_profile (Product_name,Price,Quantity,Location,Description,Image) values ('$pname','$price','$quantity', '$location', '$description','$image')";

    $result=mysqli_query($conn,$sql);

    if($result){
    	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    		echo "insert successful";
    	}
    } else {
    	echo "insert failed";
    } 

}




?>