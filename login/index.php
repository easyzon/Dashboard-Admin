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
    <link rel="stylesheet" href="style.css">
	</head>
	<body style="text-align:center;"> 
    <div class="center">
      <h1>Login</h1> 
    

      <form action="login.php" method="post">
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
        <input type="submit" value="Login" name="login">
        <div class="signup_link">
          Not a member? <a href="index2.php">Signup Here</a>
        </div>

      </form>
    </div>
		
	


    
	</body>
</html>