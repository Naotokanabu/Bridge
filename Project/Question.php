<?php
session_start();
$id	 =$_SESSION["id"];
$name=$_SESSION["name"];
$country		=$_SESSION["country"];
$exsperience	=$_SESSION["exsperience"];
$email			=$_SESSION["email"];
// echo "$id";
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
			<textarea name ="question" rows="16" cols="100" required maxlength="1000" ></textarea><br><br>
			<input type="submit" name="send" value="send">
	 	</div>
	</form>
	<br><br><br><br><br><br><br><br><br>
	<a href="Form.php"><button type="button">Back</button></a>
</body>
</html>


