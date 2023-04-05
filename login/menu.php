<?php

	require("connect.php");
		
?>
<html>
	<thead>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<title>table</title>
	</thead>
    <body>
		<div class="container mt-2">
		<a href="index2.php" class="btn btn-outline-primary text-center">Add User</a>
		</div>
		<div class="container mt-5">
<table class="table table-bordered ">
			<tr class="container bg-light">
				<th><b>ID<b></th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Password</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</div>
			<?php
			
				//READ Operation
				$query = "select * from users";
				$users=mysqli_query($con,$query);
				// print_r(mysqli_fetch_array($users)); die;
				while($user=mysqli_fetch_array($users)){
					echo "<tr>
							<td>".$user['id']."</td>
							<td>".$user['firstname']."</td>
							<td>".$user['lastname']."</td>
							<td>".$user['email']."</a></td>
							<td>".$user['password']."</td>
							<td><a href='edit.php?id=".$user['id']."'>Edit</a></td>
							<td><a href='delete.php?id=$user[0]'>Delete</a></td>
						</tr>";
				}
			?>
		</table>
		<?php
		// print_r($_GET['success']);
		// die('sd');	
		$success = '';

		if (isset($_GET["success"]) && $_GET["success"]=='0')
		{
			//do stuff
			//die('sdsd');
			echo "Record already exists .Try another one....!!";
		}
		elseif (isset($_GET["success"]) && $_GET["success"]=='1')
		{

			echo "Record successfully updated";
		}

	

		?>
        </body>
        </html>