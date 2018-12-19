<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
 <!--   <link rel="stylesheet" href=""> -->
 <style>
table,td,tr{
	border: solid 0.1px black;
}
</style>
<link rel="stylesheet" href="../CSS/Table.css">
<title>Delete</title>
</head>
<body>
	<div id ="whole">
	<p>Whick one do you want to delete?</p>

	<table>
		<tr>
			<td>Name</td>
			<td>question</td>
			<td></td>
		<tr>
		<?php
		include 'dbconect.php';

		if($_SESSION){
		$id = $_SESSION['id'];
		// var_dump($id);
		// echo $_SESSION['id'];
		// I can get infomation

			$sql = "SELECT name,personID,question,questionID FROM question WHERE personID = '$id'";
			$overcome = $conn->query($sql);
			// var_dump($overcome);
			// I can get infomation

			if(count($overcome) > 0){
				while ($row = $overcome->fetch_assoc()) {
				echo"<tr>";
					echo"<td>".$row["name"]."</td>";
					echo"<td>".$row["question"]."</td>";

					$rownum = $row["questionID"];
				
					echo
						"<td>".
							"<form action='Delete_back.php' method='POST'>
          					 	<button name='delete' type='submit' value='$rownum'>Delete</button>
          					</form>" .
          				"</td>";
          	 	 	echo"<tr>";

					}
				}
			}
		?>
	</table><br>
	<a href="Form.php"><button type="button">Back</button></a>
	</div>
</body>
</html>