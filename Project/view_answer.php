<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
   <link rel="stylesheet" href="../CSS/Table.css">
   <title>Viesw_search</title>
</head>
<body>
	<p>YOU can find an answer</p>

<div id = whole>
	<table>
		<tr>
      <td>Answer</td>
			<td>Name of questioner</td>
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
     							}
   						 }
    			 ?>
     </table>
  </div><br>
     <a href="Form.php"><button type="button">Back</button></a>

</body>
</html>
