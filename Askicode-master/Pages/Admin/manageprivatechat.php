<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php';?>
<?php $page = "privatechat";?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage private chat | Askicode</title>
</head>
<body>
<?php include 'adminmenubar.php';?>
<div style="width: 100%; height: 50px;"></div>
<?php

	if ($_POST["sort"] == "ID"){

		$sort = "ID";

	}
	elseif ($_POST["sort"] == "chatfriend") {

		$sort = "chatfriend";

	}
	elseif ($_POST["sort"] == "whosaid") {

		$sort = "whosaid";

	}
	elseif ($_POST["sort"] == "chattext") {

		$sort = "chattext";

	}

	elseif ($_POST["sort"] == "time") {

		$sort = "time";

	}


	if ($_POST["order"] == "ASC") {

		$order = "ASC";

	}
	else{

		$order = "DESC";

	}
	if ($_POST["search"]) {

		$search = $_POST["search"];

	}else{

		$search = NULL;

	}

	$sql = "SELECT * FROM Privatechat WHERE $sort LIKE '%$search%' ORDER BY $sort $order";
	$result = $conn->query($sql);
		if ($result->num_rows > 0) {

				echo "<table>";
				echo "<tr>";
				echo "<td>ID</td>";
				echo "<td>Friend</td>";
				echo "<td>Whosaid</td>";
				echo "<td>Text</td>";
				echo "<td>time</td>";
				echo "</tr>";

			while ($row = $result ->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["ID"] . "</td>";
				echo "<td>" . $row["chatfriend"] . "</td>"; 
				echo "<td>" . $row["chatwhosaid"] . "</td>"; 
				echo "<td>" . $row["chattext"] . "</td>";
				echo "<td>" . $row["time"] . "</td>";

				$infoID = $row["ID"];
				$time = $row["time"];

				echo "<td><form action='admindeletechat.php' method='POST'>
							<input type='hidden' name='time' value='$time'>
							<button type='submit' name='infoID' value='$infoID'>delete</button>
					</form></td>";
				echo "</tr>";
		}
	}
				echo "</table>";

?>

</body>
</html>