<?php
session_start();	
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
<link rel="stylesheet" href="../CSS/Admin_form.css">
<title>Form</title>
</head>
<body>
	<p>Bridge</p>

   <form action = ".php" method="POST">
	<div id =main>
 
			<div id= "where">which page do you like to go?</div>
		<div id= "answer">
			<a href="Admin_answer.php">
				<input type="button" name="anwer" class="answer" value="answer">
			</a>
		</div>

		<div id= "question">
			<a href="Admin_question.php">
				<input type="button" name="anwer" class="question" value="question">
			</a>
		</div>

	</div>
   <a href ="Admin_logout.php">
    <input type="submit" name="logout" value="Logout">
   </a>

</body>
</html>