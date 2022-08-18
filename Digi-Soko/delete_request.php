<?php
	
	$conn = mysqli_connect('localhost', 'root','','vegetables_website' );
	if(!$conn){
	     echo "Connection failed";
	 }

	 $req=$_GET["request"];
	 $sql="DELETE FROM `request_profile` WHERE Request_number='$req'";
	 if(mysqli_query($conn,$sql))
	 {
	 	header("location:requests_edits.php");
	 	echo "Request deleted";
	 }
	 else
	 {
	 	die("Error:".mysqli_error($conn));
	 }