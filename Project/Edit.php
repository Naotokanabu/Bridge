<?php
session_start();
$name  			=$_SESSION["name"];
$country		=$_SESSION["country"];
$exsperience	=$_SESSION["exsperience"];
$email			=$_SESSION["email"];
	//I made sure to get data
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
<link rel="stylesheet" href="../CSS/Edit.css">
</head>
<body>

	<form action="Edit_back.php" method="POST">
	  <div id =main>
	 	 <div id =profile>Profile</div>
	  		 <p>Name</p>
		     	 <input type="text" name="name"   		size="40" 	value=<?php echo"$name"?>>
	  		 <p>Country</p>
				  <input type="text" name="country"		size="40"  	value=<?php echo"$country"?>>
	 		 <p>Exsperience</p>
				 <input type="text"	name="exsperience" 	size="40"	value=<?php echo"$exsperience"?>>
	  		 <p>Email</p>
			     <input type="text" name="email" size="40"		value=<?php echo"$email"?>><br>

     		 <input type="submit" name="send" value="edit">
	   </div>
	</form>
</body>
</html>
