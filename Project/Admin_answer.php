<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
<link rel="stylesheet" href="../CSS/Admin_answer.css">
   <title>Admin_search_answer.php</title>
</head>
<body>
  <div id = whole>
	<p>YOU can find an answer</p>

	<table>
		<tr>
      		<td>Answer</td>
			<td>Name of questioner</td>
			<td>ID</td>
			<td>country</td>
			<td>email</td>
		</tr>

				<?php
 				include 'dbconect.php';
    
				$sql = "SELECT * FROM answer";
				$overcome = $conn->query($sql);
					// var_dump($result);


 					if ($overcome->num_rows > 0) {
    						while($row = $overcome->fetch_assoc()) {
     							echo"<tr>";
                				echo"<td>".$row["answer"]."</td>";
    							echo"<td>".$row["name"]."</td>";
    							echo"<td>".$row["questionID"]."</td>";
    							echo"<td>".$row["country"]."</td>";
    							echo"<td>".$row["email"]."</td>";
    							echo"<td>".$row["answerID"]."</td>";

    							$rownum = $row['answerID'];

    						     echo"<td>" .
           							"<form action='admin_delete_back.php' method='POST'>
           								<button name='delete' type='submit' value='$rownum'>delete</button>
          							</form>" .  "</td>";
   								echo"</tr>";
   								echo"</tr>";
     							}
   						 }
    			 ?>
     </table>
     <a href="Form.php"><button type="button">Back</button></a>
   </div>
</body>
</html>
