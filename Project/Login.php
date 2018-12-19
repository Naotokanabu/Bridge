<?php
session_start();
include 'dbconect.php';
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
   <link rel="stylesheet" href="../CSS/Login.css">
   <title>Login</title>
</head>
<body>
  
  <form action="Login_back.php" method="POST">	
   <div id = main>
	 <div id = title>Welcome Bridge</div>
	 <p>Name</p>
	    	<input type="text" name="name" size="40" minlength="4"maxlength='20' pattern="^[1-9A-Za-z]+$" placeholder='please put your name' required>
	  <p>Password</p>
		    <input type="int" name="password" size="40" minlength="4"maxlength='10' pattern="^[0-9]+$" placeholder='please put your password' required><br><br>
   
     <input type="submit" name="send" value="send">
   </div>
  </form>

<p>If you forget your password please click the button below</p>
<a href="Mail.php"><button type="button">Get password</button></a>

</body>
</html>