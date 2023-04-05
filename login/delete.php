<?php
	require("connect.php");
	
	$id=$_GET['id'];
	$del_query = "delete from user1 where id=$id";

	mysqli_query($con,$del_query);
	
	header("location:index.php");
?>