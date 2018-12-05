<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/friendbar.css">
</head>
<body>

<div id="frienddiv">
	<form><input id="addfriends" type="button" value="Add friends" onclick="location.href='addfriends.php'"></form>
	
	<?php
	$ID = $_SESSION["ID"];
	$sql = "SELECT friend FROM Friends WHERE ID = '$ID'";
	$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "<table>";
			while ($row = $result ->fetch_assoc()) {
					$friend = $row["friend"];
					$sql_icon = "SELECT iconurl FROM Personal WHERE ID = '$friend'";
					$whereicon = $conn->query($sql_icon);
					$icon = $whereicon ->fetch_assoc();
					$icon = $icon["iconurl"];
					echo 	"<tr>";
					echo 		"<td><img src='../../userdata/images/$friend-$icon'width='100' height='60'></td>";
					echo 	"</tr>";
					echo 	"<tr>";
					echo    	"<td><form action='privatechat' method='POST'>
									<button type='submit' name='chatfriend' value='$friend'>". $row["friend"] . "</button>
								</form></td>";
					echo 	"</tr>";
			}
		}
			echo "</table>";
	?>
</div>

</body>
</html>