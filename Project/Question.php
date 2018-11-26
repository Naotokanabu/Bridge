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
			<input type="file" name="photo" accept="image/jpeg">
			<textarea name ="question" rows="16" cols="100" ></textarea>
			<input type="submit" name="send" value="send">
	 	</div>
	</form>



<!-- 		<div class = answer>
			<p>Answer</p>
			<input type="file" name="photo" accept="image/jpeg">
			<textarea name =answer rows="9" cols="100">
				<?php
				include 'dbconect.php';

				$id = 

				$sql = "SELECT * FROM answer WHERE personID = ";
				$overcome = $conn->query($sql);
				var_dump($overcome);


 					if ($overcome->num_rows > 0) {
    						while($row = $overcome->fetch_assoc()) {
    							echo $row["answer"];
    						}
    					}
				?>		
				</textarea>
			<input type="submit" name="send" value="send">
		</div>
 -->
</body>
</html>


