<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php';?>
<?php $page = "manageform";?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage form | Askicode</title>
</head>
<body>
<?php include 'adminmenubar.php';?>
<div style="width: 100%; height: 50px;"></div>
<?php

if ($_POST["sort"] == "detail") {
	$sort = "detail";
}
elseif ($_POST["sort"] == "title") {
	$sort = "title";
}
elseif ($_POST["sort"] == "time") {
	$sort = "time";
}
elseif ($_POST["sort"] == "formno") {
	$sort = "pageno";
}
else{
	$sort = "managerID";
}

if ($_POST["order"] == "ASC") {
	$order = "ASC";
}
else{
	$order = "DESC";
}

if ($_POST["search"]) {
	$search = $_POST["search"];
}
else{
	$search = NULL;
}

$sql = "SELECT * FROM Form WHERE $sort LIKE '%$search%' ORDER BY $sort $order";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<table>";
	echo "<tr>";
	echo "<td>Owner</td>";
	echo "<td>Title</td>";
	echo "<td>Time</td>";
	echo "<td>Form number</td>";
	echo "<td>Detail</td>";
	echo "</tr>";
	while ($row = $result ->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row["managerID"] . "</td>";
		echo "<td>" .  $row["title"] . "</td>";
		echo "<td>" . $row["time"] . "</td>";
		echo "<td>" . $row["pageno"] . "</td>";
		echo "<td>" . $row["detail"] . "</td>";
		$pageno = $row["pageno"];
		echo "<td><form action='admindeleteform.php' method='POST'>
				<button type='submit' name='pageno' value='$pageno'>Delete</button></form></td>";
		echo "</tr>";
	}
}else{
		echo "0 result";
}

		echo "</table>";

?>

</body>
</html>