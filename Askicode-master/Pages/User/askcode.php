<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php'; ?>
<?php $page = "askcode";?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/userpage.css">
	<link rel="stylesheet" href="../../css/askcode.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>Ask code | Askicode</title>
</head>
<body>
<?php include 'menubar.php'; ?>

<div class="header" style="background-image: url(../../CSS/CSSimg/roman-mager-59976-unsplash.jpg); background-position: center;">

<?php include 'searchbar.php';?>

</div>

<div class="askcodepage">

<?php

if ($_POST["sort"] == "title") {
	$sort = "filename";
}
elseif ($_POST["sort"] == "detail") {
	$sort = "detail";
}
else{
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
}
else{
	$search = NULL;
}

$ID = $_SESSION["ID"];
$sql = "SELECT * FROM Code WHERE ID = '$ID' AND $sort LIKE '%$search%' ORDER BY $sort $order LIMIT 15";
$result = $conn->query($sql);
echo "<div class='askcodediv'>";
if ($result->num_rows >= 0) {
		echo "<table class='tableline'>";
		echo "<tr>";
		echo "<td class='tablecolumn tabletitle'>" . "Title" . "</td>";
		echo "<td class='tablecolumn'>" . "Time" . "</td>";
		echo "<td class='tablecolumn'>" . "" . "</td>";
		echo "</tr>";
	while ($row = $result->fetch_assoc()) {
		$filename = $row["filename"];
		$fileno = $row["fileno"];
		echo "<tr>";
		echo "<td class='tableline tabledata'>" . $row["filename"] ."</td>";
		echo "<td class='tableline tabledata'>" . $row["time"] ."</td>";
		echo "<td class='tableline tabledata'>" . "<form action='askcode.php' method='POST'>
						<input type='hidden' name='fileno' value='$fileno'>
						<button name='selectcode' value='$filename'>select</button></form>" ."</td>";
		echo "</tr>";
	}
		echo "</table>";
}
echo "</div>";
?>


<div class="askformdiv">

	<div class="askforminside">

		<form action="makingform.php" method="POST">
			<table>
				<tr>
					<td><input class="askform" type="text" name="title" size="70" maxlength="50" placeholder="Form title within 50 letters"></td>
				</tr>
				<tr>
					<td><input class="askform" type="text" name="detail" size="70" maxlength="100" placeholder="Form detail within 100 letters"></td>
				</tr>
				<tr>
					<td><span class="askform">File title: <?php echo $_POST["selectcode"] ;?></span></td>
				</tr>
				<tr>
					<td><textarea class="askform" style="resize: none" name="comment" cols="80" rows="10" placeholder="Comment"></textarea></td>
				</tr>
		
			<?php $fileselect = $_POST["selectcode"]; ?>
			<input type="hidden" name="filename" value=<?php echo "$fileselect";?>>
				<tr>
					<td class="askformbutton"><button type="submit">Ask code</button></td>
				</tr>
			</table>
		</form>

	</div>

</div>

	<div class="askcodereviewdiv">

		<textarea class="askcodereview" readonly="readonly"><?php readfile("../../userdata/codes/" . $_SESSION["ID"] . "-" . $_POST["selectcode"] . ".txt");?></textarea>

	</div>

</div>
</body>
</html>