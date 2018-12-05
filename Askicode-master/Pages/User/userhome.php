<?php session_start();?>
<?php 
ini_set('display_errors',"Off");
?>
<?php include 'dbconnect.php';?>
<?php $page = "userhome";?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/userpage.css">
	<link rel="stylesheet" href="../../css/userhome.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>Home | Askicode</title>
</head>
<body>

<?php include 'menubar.php';?>

<div class="header" style="background-image: url(../../CSS/CSSimg/joel-filipe-195321-unsplash.jpg); background-position: bottom;">

	<?php include 'searchbar.php';?>

</div>

<?php
	$ID = $_SESSION["ID"];
	$sql = "SELECT * FROM Favorite WHERE ID = '$ID'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

		echo "<div class='favdiv'>";

		while ($row = $result ->fetch_assoc()) {

			$pageno = $row["pageno"];

			$sql_fav = "SELECT * FROM Form WHERE pageno = '$pageno'";
			$results = $conn->query($sql_fav);
			$rows = $results ->fetch_assoc();

			$managerID = $rows["managerID"];

			$sql_icon = "SELECT iconurl FROM Personal WHERE ID = '$managerID'";
			$results = $conn->query($sql_icon);
			$row_icon = $results ->fetch_assoc();

			$icontitle = $row_icon["iconurl"];

			echo "<div class='favlist'>";
				echo "<div class='favicondiv'>" . "<img class='favicon' src='../../userdata/images/" . $managerID . "-" . $icontitle . "'>" . "</div>";
					echo "<div class='favID'>" . $rows["managerID"] . "</div>";
					echo "<div class='favline'>" . "</div>";
					echo "<div class='favtitle'>" . $rows["title"] . "</div>";
					echo "<div class='favdetaildiv'>" . "<span class='favdetail'>" . $rows["detail"] . "</span>" . "</div>";
					echo "<form action='userform.php?pageno=" .  $pageno . " method='GET'>";
					echo "<div class='favbutton'>";
					echo "<button type='submit' name='pageno' value=" . $pageno . ">go</button></form>";
					echo "</div>" . "</div>";
					

		}
			echo "</div>";
	}

?>

</table>

</body>
</html>