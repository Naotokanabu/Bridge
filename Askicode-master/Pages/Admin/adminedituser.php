<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php';?>

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
$privatemode = $row["privatemode"];
$point = $row["moneypoint"];

if ($invitation == "on") {

	$checkinvon = "checked"; 
	$checkinvoff = "";

}
else{

	$checkinvon = ""; 
	$checkinvoff = "checked";

}

if ($privatemode == "on") {

	$checkprion = "checked"; 
	$checkprioff = "";

}

else{

	$checkprion = ""; 
	$checkprioff = "checked";

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit page | Askicode</title>
</head>
<body>
<?php include 'adminmenubar.php';?>
<div style="width: 100%; height: 50px;"></div>
<form action="editinguser.php" method="POST">

<table>
	<tr> 
		<td>ID</td>
		<td><input type="text" name="ID" value=<?php echo "$ID"; ?>></td>
		<td>money point</td>
		<td><input type="text" name="point" value=<?php echo "$point"; ?>></td>
	</tr>
	<tr>
		<td>First name</td>
		<td><input type="text" name="firstname" value=<?php echo "$firstname"; ?>></td>
		<td>Invitation</td>
		<td>on<input type="radio" <?php echo "$checkinvon"; ?> name="invitation" value="on">
			off<input type="radio" <?php echo "$checkinvoff"; ?> name="invitation" value="off"></td>
	</tr>
	<tr>
		<td>Family name</td>
		<td><input type="text" name="familyname" value=<?php echo "$familyname"; ?>></td>
		<td>Private mode</td>
		<td>on<input type="radio" <?php echo "$checkprion"; ?> name="private" value="on">
			off<input type="radio" <?php echo "$checkprioff"; ?> name="private" value="off"></td>
	</tr>
	<tr>
		<td>Email address</td>
		<td><input type="text" name="email" value=<?php echo "$email"; ?>></td>
		<td>Password</td>
		<td><input type="text" name="password" value=<?php echo "$password"; ?>></td>
	</tr>
</table>

<button type="submit">Apply</button>
<button type="reset">Cancel</button>

</form>

</body>
</html>

