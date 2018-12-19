<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
<link rel="stylesheet" href="../CSS/Form.css">
<title>Form</title>
</head>
<body>
	<p>Bridge</p>

	<div id ="main">
		<div id= "where">which page do you like to go?</div>

		<form action = "Edit.php" method="POST">
			<div id ="profile">

			<?php
				include 'dbconect.php';

				$name			=$_SESSION["name"];
				$country		=$_SESSION["country"];
				$exsperience	=$_SESSION["exsperience"];
				$email			=$_SESSION["email"];
				$id				=$_SESSION["id"];
				// I can get information

				$sql = "SELECT * FROM project WHERE personID = $id";
				$project = $conn->query($sql);
				// var_dump($project);

				if(count($project) > 0){
				while($row = $project->fetch_assoc()){
					$_SESSION['id'] =$row['personID'];
					// I can get information
				 }
				}
			  	echo"<input type='submit' name= 'profile' class='profile' value='pofile'>"
            ?> 				
			</div>
		</form>
		<div id= "answer">
			<a href="Question_search.php">
				<input type="button" name="anwer" class="answer" value="answer">
			</a>
		</div>
		<div id= "question">
			<a href="Question.php">
				<input type="button" name="question" class ="question" value="question">
			</a>
		</div>
		<div id= delete>
			<a href="Delete.php">
				<input type="button" name="delete" class="delete" value="delete">
			</a>
		</div>

		<div id = view>
			<a href="view_answer.php">
				<input type="button" name="view" class="view" value="view_answer">
			</a>	
		</div>
<!-- 		<div id = mail>
			<a href="Mail.php">
				<input type="button" name="mail" class="mail" value="mail">
			</a>	
		</div> -->
	</div>

   <a href ="Logout.php">
    <button type="submit" name="logout">Logout</button>
   </a>
   
</body>
</html>