<?php session_start();?>
<?php include 'dbconnect.php';?>
<?php ini_set('display_errors',"Off");?>
<?php
$ID = $_POST["infoID"];
$sql = "SELECT * FROM Personal WHERE ID = '$ID'";
$result = $conn->query($sql);
$row = $result ->fetch_assoc();
$ID = $row["ID"];
$password = $row["password"];
$email = $row["email"];
$firstname = $row["firstname"];
$familyname = $row["familyname"];
$invitation = $row["invitation"];
$private = $row["privatemode"];
$point = $row["moneypoint"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin delete page | Askicode</title>
</head>
<body>
<?php include 'adminmenubar.php';?>
<div style="width: 100%; height: 50px;"></div>
<form action="admindeletinguser.php" method="POST">
<input type="hidden" name="ID" value=<?php echo "$ID" ;?>>
<table>
	<tr> 
		<td>ID</td>
		<td><?php echo "$ID"; ?></td>
		<td>money point</td>
		<td><?php echo "$point"; ?></td>
	</tr>
	<tr>
		<td>First name</td>
		<td><?php echo "$firstname"; ?></td>
		<td>Invitation</td>
		<td><?php echo "$invitation"; ?></td>
	</tr>
	<tr>
		<td>Family name</td>
		<td><?php echo "$familyname"; ?></td>
		<td>Private mode</td>
		<td><?php echo "$private"; ?></td>
	</tr>
	<tr>
		<td>Email address</td>
		<td><?php echo "$email"; ?></td>
		<td>Password</td>
		<td><?php echo "$password"; ?></td>
	</tr>
</table>

ARE YOU SERIOUS?

<button type="submit">Delete</button>
<input type="button" onclick="history.back()" value="Cancel"></button>

</form>

</body>
</html>