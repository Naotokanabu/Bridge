<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php $page = "searchform";?>
<?php include 'dbconnect.php';?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>Search form | Askicode</title>
</head>
<body>
<?php include 'menubar.php'; ?>
<?php include 'friendbar.php'; ?>
<?php 

	if ($_GET["sort"] == "time") {

		$sort = "time";

	}

	elseif ($_GET["sort"] == "detail") {

		$sort = "detail";

	}

	elseif ($_GET["sort"] == "manager") {

		$sort = "managerID";

	}else{

		$sort = "title";

	}

	if ($_GET["order"] == "ASC") {

		$order = "ASC";

	}

	else{

		$order = "DESC";

	}

	if ($_GET["search"]) {

		$search = $_GET["search"];

	}else{

		$search = NULL;

	}

	$sql = "SELECT * FROM Form WHERE $sort LIKE '%$search%' ORDER BY $sort $order";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {

			echo "<table><tr>";
			echo "<td>Manager</td>";
			echo "<td>Title</td>";
			echo "<td>Detail</td>";
			echo "<td>Time</td>";
			echo "</tr>";

			while ($row = $result ->fetch_assoc()) {

			echo "<tr>";
			echo "<td>" . $row["managerID"] . "</td>";
			echo "<td>" .  $row["title"] . "</td>";
			echo "<td>" . $row["detail"] . "</td>"; 
			echo "<td>" . $row["time"] . "</td>";
			$pageno = $row["pageno"];
			echo "<td><form action='userform.php' method='get'><button type='submit' name='pageno' value='$pageno'>Go</button></form></td>";
			echo "</tr>";

			}

	}else{

			echo "0 results";

		}

		echo "</table>";

?>
</body>
</html>