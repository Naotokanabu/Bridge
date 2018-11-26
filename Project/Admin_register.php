<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<!-- <maa charset="UTF=8"> -->
<link rel="stylesheet" href="../CSS/Register.css">
</head>
<body>

<form action ="Admin_register_back.php" method ="POST">
	<div id =main>
	  <div id =profile>Profile</div>
	   <p>Password</p>
			  <input type="int" name="password" size="40">  
	   <p>Name</p>
		      <input type="text" name="name" size="40"><br>
     	<input type="submit" name="send" value="send">
   </div>
  </form>
</body>
</html>