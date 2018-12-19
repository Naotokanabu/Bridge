<?php
session_start();

// $question_id = $_GET["question_id"];
$name			=$_SESSION["name"];
$country		=$_SESSION["country"];
$exsperience	=$_SESSION["exsperience"];
$email			=$_SESSION["email"];
// $id				=$_SESSION["id"];
// echo "$question_id";
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
   <link rel="stylesheet" href="../CSS/Question.css">
   <title>Question</title>
</head>
<body>
	  <form action="Answer_back.php" method="GET">
			<div class = respondent>
				<p>Answer</p>
			
				<input type="hidden" name="id" value="<?php echo $question_id ;?>">
				<textarea name ="answer" rows="9" cols="100"></textarea><br>
				<input type="submit" name="send" value="send">
			</div>
		</form>

</body>
</html>