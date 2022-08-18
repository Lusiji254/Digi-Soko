<?php
session_start();
    if(!isset($_SESSION["email"]))
    {
        header("location:Veg.LogIn.html");
    }

if (isset($_POST['submit'])) {
	# code...
    $ID=$_POST['ID'];
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $location=$_POST['location'];
	$phone = $_POST['phone'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    $type=$_POST['usertype'];

	
	$conn=mysqli_connect("localhost","root","","vegetables_website");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 if(empty($ID)){ echo "ID Required";}
 if(empty($fname)){ echo "First name Required";}
 if(empty($lname)){ echo "Last name Required";}
if(empty($location)){ echo "Location Required";}
    if(empty($phone)){ echo "Phone Number Required";}
    if(empty($email)){ echo "Email Required";}
    if(empty($pass)){ echo "Password Required";}
    if(empty($pass2)){ echo "Password confirmation Required";}
    if(empty($type)){ echo "Usertype Required";}

    $sql="INSERT INTO `users`(`id_number`, `first_name`, `last_name`, `email`, `phone_number`, `location`, `password`, `confirm_password`, `user_type`) VALUES ('$ID','$fname','$lname','$email','$phone','$location','$pass','$pass2','$type')";

    if(mysqli_query($conn,$sql))
    {
        header("location:Veg.Login.html");
    }
    else
    {
        die("Error:".mysqli_error($conn));
    }
}




?>