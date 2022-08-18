<?php
function update($value){
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

    $sql="UPDATE `request_profile` SET `Product_name`='$pname',`Description`='$description',`Quantity`='$quantity',`Location`='$location' WHERE Request_number='$value'";

    $result=mysqli_query($conn,$sql);

    if($result){
    	header("location:requests_edits.php");
    	
    } else {
    	echo "update failed";
    } 

}

}


?>