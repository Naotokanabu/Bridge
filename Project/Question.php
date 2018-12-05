<?php
session_start();
$id	 =$_SESSION["id"];
$name=$_SESSION["name"];
$country		=$_SESSION["country"];
$exsperience	=$_SESSION["exsperience"];
$email			=$_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
   <link rel="stylesheet" href="../CSS/Question.css">
   <title>Question</title>
</head>
<body>
	
   <form action="Question_back.php"  method="POST">
	 	<div class = questioner>
			<p>Question</p>
			<p>Please ask the question below</p>
			<!-- <input type="file" name="photo" accept="image/jpeg"> -->
			<textarea name ="question" rows="16" cols="100" required maxlength="20" ></textarea><br>
			<input type="submit" name="send" value="send">
	 	</div>
	</form>
</body>
</html>


