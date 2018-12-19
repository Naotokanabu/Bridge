<?php
session_start();
        $name     =$_SESSION["name"];
        $country  =$_SESSION["country"];
        $email    =$_SESSION["email"];
        $id       =$_SESSION["id"];
        $exsperience  =$_SESSION["exsperience"];
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
   <link rel="stylesheet" href="../CSS/Table.css">
   <title>Question_search</title>
</head>
<body>
	<p>You can find a question</p>

<div id = whole>
	<table>
		<tr>
      <td>Questioner ID</td>
			<td>Name</td>
			<td>Country</td>
			<!-- <td>Email</td> -->
			<td>Question</td>
			<td></td>
		</tr>
				<?php
 				include 'dbconect.php';
    
				$sql = "SELECT * FROM question";
				$overcome = $conn->query($sql);
					// var_dump($result);


 					if ($overcome->num_rows > 0) {
    						while($row = $overcome->fetch_assoc()) {
     							echo"<tr>";
                      echo"<td>".$row["questionID"]."</td>";//primary key
    						      echo"<td>".$row["name"]."</td>";
                      echo"<td>".$row["country"]."</td>";
                      // echo"<td>".$row["email"]."</td>";
   								   echo"<td>".$row["question"]."</td>";

   								  $rownum = $row["personID"];
                    // $_SESSION["id"] = $row["questionID"];

   								echo"<td>".
     								"<a href='Answer.php?question_id = $rownum'>
     										<input type ='submit' name ='answer' value='Answer'>
     								</a>"."</td>";
   								echo"</tr>";
     							}
   						 }
    			 ?>
     </table>
   </div><br>

     <a href="Form.php"><button type="button">Back</button></a>
</body>
</html>
