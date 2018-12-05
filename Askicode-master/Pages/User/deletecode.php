<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php'; ?>
<?php
$ID = $_SESSION["ID"];
$filename = $_POST["filename"];
$sql = "SELECT * FROM Code WHERE ID='$ID' AND filename = '$filename'";
$result = $conn->query($sql);
$row = $result ->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>Delete code | Askicode</title>
</head>
<body>
<?php include 'menubar.php'; ?>
<?php include 'friendbar.php'; ?>

ARE YOU SERIOUS?

	<table>
		<tr>
			<td>Title</td>
			<td><?php echo $row["filename"];?></td>
			<td>Detail</td>
			<td><?php echo $row["detail"];?></td>
		</tr>
	</table>

<form id="deleteform" action="deletingcode.php" method="POST">
	<input type="hidden" name="filename" value=<?php echo "$filename"; ?>>
</form>

<?php readfile("../../userdata/codes/" . $_SESSION["ID"] . "/" . $_POST["filename"] . ".txt"); ?>

<form action="mycode.php">
	<button form="deleteform" type="submit" name="deletecode" value="delete">delete</button>
	<button>cancel</button>
</form>

</body>
</html>