<?php
	 include("connect.php");
	
       //print_r($_POST); die;
		$email	    = 	$_REQUEST['email'];
		$password	= 	$_REQUEST['password'];
		$select_query = "SELECT * FROM users WHERE email = '$email' and password = '$password'"; 
        //print_r($select_query); die;
		$count = mysqli_query($con,$select_query);
		if(mysqli_num_rows($count)> 0)
		{	
		  //die('test');
            $success = 1;	
			header("location:menu.php?success=$success");
		}
        else
        {   
            die('record does not exists..');
            //record does not exists..


        }


?>