<?php session_start();?>
<?php include 'dbconnect.php';?>
<?php ini_set('display_errors',"Off");?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete form | Askicode</title>
</head>
<body>
<?php include 'adminmenubar.php';?>
<div style="width: 100%; height: 50px;"></div>

<?php
$pageno = $_POST["pageno"];
$sql = "SELECT * FROM Form WHERE pageno = '$pageno'";
$result = $conn->query($sql);
$row = $result ->fetch_assoc();
$managerID = $row["managerID"];
$title = $row["title"];
$time = $row["time"];
$pageno = $row["pageno"];
$detail = $row["detail"];
?>

<form action="admindeletingform.php" method="POST">
<table>
	<tr> 
		<td>Manager ID</td>
		<td><?php echo "$managerID"; ?></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><?php echo "$title"; ?></td>
	</tr>
	<tr>
		<td>Time</td>
		<td><?php echo "$time"; ?></td>
	</tr>
	<tr>
		<td>Page number</td>
		<td><?php echo "$pageno"; ?></td>
		<!-- pagenoの値をひっそりと送りたい -->
		<td><input type="hidden" name="pageno" value=<?php echo "$pageno"; ?>></td>
	</tr>
	<tr>
		<td>Detail</td>
		<td><?php echo "$detail"; ?></td>
	</tr>
</table>

ARE YOU SERIOUS?

<button type="submit">Delete</button>
<input type="button" onclick="history.back()" value="Cancel"></button>

</form>
</body>
</html>