<?php

if (isset($_POST['post'])) {
	# code...
	$pname=$_POST['pname'];
	$quantity=$_POST['quantity'];
	$location=$_POST['location'];
	$description=$_POST['description'];

	$conn=mysqli_connect("localhost","root","","vegetables_website");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 if(empty($pname)){ echo "Product name Required";}
    if(empty($quantity)){ echo "Quantity Required";}
    if(empty($location)){ echo "Location Required";}
    if(empty($description)){ echo "Description Required";}

    $sql="INSERT INTO request_profile (Product_name,Description,Quantity,Location) values ('$pname','$description','$quantity', '$location')";

    $result=mysqli_query($conn,$sql);

    if($result){
    	
    		echo "insert successful";
    	
    } else {
    	echo "insert failed";
    } 

}




?>