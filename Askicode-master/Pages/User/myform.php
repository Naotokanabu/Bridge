<?php session_start();?>
<?php 
ini_set('display_errors',"Off");
?>
<?php $page = "myform";?>
<?php include 'dbconnect.php';?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/myform.css">
	<link rel="stylesheet" href="../../css/userpage.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>My form | Askicode</title>
</head>
<body>
<?php include 'menubar.php';?>
<div class="header" style="background-image: url(../../CSS/CSSimg/g-crescoli-468248-unsplash.jpg); background-position: center;">

	<?php include 'searchbar.php';?>

</div>

<?php
$managerID = $_SESSION["ID"];
if ($_POST["sort"] == "time") {
	$sort = "time";
}
elseif ($_POST["sort"] == "detail") {
	$sort = "detail";
}
else{
	$sort = "title";
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

echo "<div class='favdiv'>";

$sql = "SELECT * FROM Form WHERE managerID = '$managerID' AND $sort LIKE '%$search%' ORDER BY $sort $order";
$result = $conn->query($sql);
if ($result->num_rows >= 0) {
	while ($row = $result->fetch_assoc()) {
		$pageno = $row["pageno"];
		echo "<div class='favlist'>";
		echo "<div class='favtitle'>" . $row["title"] . "</div>";
		echo "<div class='favline'>" . "</div>";
		echo "<div class='favdetaildiv'>" . "<span class='favdetail'>" . $row["detail"] . "</span>" . "</div>";
		echo "<div class='favbutton'><a class='favlink' href='userform.php?pageno=$pageno'>Link</a></div>";
		echo "</div>";
	}
}

echo "</div>";

?>

</body>
</html>