<?php

	$dbhost="localhost";
	$dbemail="root";
	$dbpassword="";
	$dbname="easyzon";
	$con=mysqli_connect($dbhost,$dbemail,$dbpassword,$dbname);
	if (!$con) {
		//die('test');
		die("Connection failed: " . mysqli_connect_error());
	  }
	 // echo "Connected successfully";
	  // die('sdsd');


?>