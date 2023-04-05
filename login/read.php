<?php
	require("connect.php");
	
	$id=$_GET['id'];
	
	$users=mysql_query("SELECT * FROM users WHERE ID=$id");
	$users=mysql_fetch_array($users);

?>

<html>
	<head>
		<title>Profile of <?php echo $users[0];?></title>
	</head>
	<body>
		<h2>Following is the complete profile of <u><?php echo $users[1];?></u></h2>
		<p>Firstname: <?php  echo $users[1]?></p>
		<p>Email: <?php  echo $users[3]?></p>
		<p>Password: <?php  echo $users[4]?></p>
		
	</body>
</html>
           