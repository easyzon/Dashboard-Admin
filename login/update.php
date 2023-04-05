<?php
	require("connect.php");
	//print_r($_POST); die;
	
	$password=$_POST['password'];
	$id=$_POST['id'];
	$update_query = "UPDATE user1 SET password = '$password' WHERE id = $id;";

	
	mysqli_query($con,$update_query);
	
	header("location:index.php");
?>