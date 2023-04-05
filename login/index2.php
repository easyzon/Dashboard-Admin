<?php
/*
	mysql_connect
	mysql_select_db
	mysql_query
	mysql_fetch_array
*/
	require("connect.php");
		
?>
<html>
	<head>
		<title>CRUD in PHP</title>
    <link rel="stylesheet" href="style2.css">
	</head>
	<body style="text-align:center;"> 
    <div class="center">
      <h1>Signup</h1> 

    <?php 
      if(isset($_GET['success']))
      {
        if($_GET['success'] == '0')
        {
  
        echo "Recod already exists";
        }
        else
        {
            echo "Record Successfull";
        }
      }
    

    ?>

      <form action="create.php" method="post">
      <div class="txt_field">
          <input type="text" name="name" required>
          <span></span>
          <label>First Name</label>
        </div>

      <!-- <div class="txt_field">
          <input type="text" name="lname" required>
          <span></span>
          <label>Last Name</label>
        </div> -->

        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>

        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>

        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Signup">
        <div class="signup_link">
       <a href="index.php">Login Here</a>
        </div>

      </form>
    </div>
		
	


    
	</body>
</html>