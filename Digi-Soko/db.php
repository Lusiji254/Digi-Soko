<?php

$db = mysqli_connect('localhost','root','','vegetables_website');

if(!$db){
	echo "Connection Error!";
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}