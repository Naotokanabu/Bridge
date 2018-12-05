<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php'; ?>
<?php $page = "friends"?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/menubar.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>Add friends | Askicode</title>
</head>
<body>
<!-- 面倒だからmenubarをincludeを使用して統一 -->
<?php include 'menubar.php'; ?>
<?php include 'friendbar.php'; ?>

<table>
	<tr>
		<td>Result</td><td>Apply</td>
	</tr>
<?php
// empty関数を使用して$_POST["search"]の中身が空のときはresultを表示しないようにする
if (!empty($_POST["search"])) {
	$search = $_POST["search"];
	$sql = "SELECT ID FROM Personal WHERE ID LIKE '%$search%'";
	$result = $conn->query($sql);
		if ($result->num_rows >= 0) {
			while ($row = $result ->fetch_assoc()) {

				$apply = $row["ID"];

				echo 	"<tr>";
				echo 		"<td>" . $row["ID"] . "</td>";
				echo    	"<td><form action='applyfriends.php' method='POST'>
								<button type='submit' name='apply' value='$apply'>x</button>
							</form></td>";
				echo 	"</tr>";	
			}
		}
}
				echo "</table>";
?>


	
		
	
<?php
	$ID = $_SESSION["ID"];
	$sql = "SELECT applyfrom FROM Apply WHERE ID = '$ID'";
	$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result ->fetch_assoc()) {
				$friends = $row["applyfrom"];
				echo "<table>";
				echo 	"<tr>";
				echo 		"<td>Applicant</td><td>Allow</td><td>Deny</td>";
				echo 	"</tr>";
				echo 	"<tr>";
				echo 		"<td>" . $row["applyfrom"] . "</td>";
				echo 		"<td><form action='allowfriend.php' method='POST'>
							<button type='submit' name='friends' value='$friends'>v</button>
							</form></td>";
				echo 		"<td><form action='denyfriend.php' method='POST'>
							<button type='submit' name='friends' value='$friends'>x</button>
							</form></td>";
				echo 	"</tr>";
			}
		}else{
				echo 	"<tr><td>0 invitaton</td></tr>";

	}

				echo "</table>";
?>




</body>
</html>