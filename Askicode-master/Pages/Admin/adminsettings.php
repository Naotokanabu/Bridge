<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminSettings | Askicode</title>
</head>
<body>
<?php include 'adminmenubar.php';?>
<div style="width: 100%; height: 50px;"></div>
<?php

	$ID = $_SESSION["ID"];
	$sql = "SELECT * FROM Personal WHERE ID = '$ID'";
	$result = $conn->query($sql);
	$row = $result ->fetch_assoc();
	$firstname = $row["firstname"];
	$familyname = $row["familyname"];
	$email = $row["email"];
	$password = $row["password"];
	
?>
<form action="adminchangesettings.php" method="POST">
	<table>
		<tr>
			<td>ID</td>
			<td><?php echo "$ID"; ?></td>
		</tr>
		<tr>
			<td>First name</td>
			<td><input type="text" name="firstname" value=<?php echo "$firstname"; ?>></td>
		</tr>
		<tr>
			<td>Family name</td>
			<td><input type="text" name="familyname" value=<?php echo "$familyname"; ?>></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value=<?php echo "$email"; ?>></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value=<?php echo "$password"; ?>></td>
		</tr>
	</table>
	<button type="submit">Apply</button>
	<button type="reset">Cancel</button>
</form>
<p>Click 
	<a class="link" href="../logout.php" style="font-weight: bold;">here</a> to Logout!<br></p>
</body>
</html>