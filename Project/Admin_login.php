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
  
  <form action="Admin_login_back.php" method="POST">	
   <div id = main>
	 <div id = title>Welcome Bridge</div>
	 <p>Name</p>
	    	<input type="text" name="name" size="40">
	  <p>Password</p>
		    <input type="int" name="password" size="40"><br>
   
     <input type="submit" name="send" value="send">
   </div>
  </form>

</body>
</html>