<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
<link rel="stylesheet" href="../CSS/Admin_question.css">
   <title>Admin_search_answer.php</title>
</head>
<body>
  <div id =whole>
	<!-- <p>YOU can find an answer</p> -->

	<table>
		<tr>
      <td>QuestionID</td>
			<td>Question</td>
			<td>personID</td>
      <td>name</td>
			<td>country</td>
			<td>email</td>
		</tr>

				<?php
 				include 'dbconect.php';
    
				$sql = "SELECT * FROM question";
				$project = $conn->query($sql);
				// var_dump('$project');


 					if (count($project) > 0) {
    						while($row = $project->fetch_assoc()) {
     							echo"<tr>";
                  echo"<td>".$row["questionID"]."</td>";
                  echo"<td>".$row["question"]."</td>";
                  echo"<td>".$row["personID"]."</td>";                  
    							echo"<td>".$row["name"]."</td>";
    					 		echo"<td>".$row["country"]."</td>";
    							echo"<td>".$row["email"]."</td>";

    							$rownum = $row['questionID'];

    						     echo"<td>" .
           							"<form action='Admin_delete_back_question.php' method='POST'>
           								<button name='delete' type='submit' value='$rownum'>delete</button>
          							</form>" .  "</td>";
   								echo"</tr>";
   								echo"</tr>";
     							}
   						 }
    			 ?>
     </table>
     <a href="Admin_Form.php"><button type="button">Back</button></a>
  </div>
</body>
</html>
