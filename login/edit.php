<?php
	require("connect.php");
	$id=$_GET['id'];
	$edit_query = "SELECT * FROM USER1 WHERE ID=$id";
	$users=mysqli_query($con,$edit_query);
	$user=mysqli_fetch_array($users);
?>
<html>
	<head>
		<title>Edit <?php echo $user['email'];?></title>
	</head>
	<body style="text-align:center;">
		<form action="update.php" method="post">
			<p>Use following field to update the password of <?php echo $user['email']; ?></p>
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<input type="password" name="password" />
			<input type="submit" value="Update Password" />
		</form>
	</body>
</html>