<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php $page = "mycode";?>
<?php include 'dbconnect.php';?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/userpage.css">
	<link rel="stylesheet" href="../../css/mycode.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>My code | Askicode</title>
</head>
<body>
<?php include 'menubar.php';?>
<div class="header" style="background-image: url(../../CSS/CSSimg/alfons-morales-410757-unsplash.jpg); background-position: bottom;">

	<?php include 'searchbar.php';?>

</div>
<?php

	$ID = $_SESSION["ID"];

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

?>

<script type="text/javascript">
	
	function disp(){

	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
	if(window.confirm('Are you sure?')){

		location.href = "makecode.php"; // example_confirm.html へジャンプ

	}
	// 「OK」時の処理終了

	// 「キャンセル」時の処理開始
	else{

		window.alert('Canceled.'); // 警告ダイアログを表示

	}
	// 「キャンセル」時の処理終了

}

</script>

<div class="mycodediv">
<div class="mycodelist">
<?php

$sql = "SELECT * FROM Code WHERE ID = '$ID' AND $sort LIKE '%$search%' ORDER BY $sort $order";
$result = $conn->query($sql);
if ($result->num_rows >= 0) {
	echo "<table class='tableline'>";
	echo "<tr>";
	echo "<td class='tablecolumn'>File name</td>";
	echo "<td class='tablebutton tablecolumn'></td>";
	echo "<td class='tablebutton tablecolumn'></td>";
	echo "<td class='tablebutton tablecolumn'></td>";
	echo "</tr>";
	while ($row = $result ->fetch_assoc()) {
		$filename = $row["filename"];
			echo "<tr>";
			echo "<td class='tabledata'>" . $row["filename"]  . "  </td>";
			echo "<td class='tabledata'><form action='editcode.php' method='POST'><input type='hidden' name='editcode' value='edit'>
						<button type='submit' name='filename' value='$filename'>Edit</button></form></td>";
			echo "<td class='tabledata'><form action='deletingcode.php' method='POST'>
						<input type='hidden' name='filename' value='$filename'>
							<input type='submit' onclick='disp()' value='Delete'></form></td>";
			echo "<td class='tabledata'><form action='mycode.php' method='POST'>
						<button type='submit' name='viewfile' value='$filename'>View</button>
				  </form></td>";
			echo "</tr>";
			echo "</tr>";
	}
}
	echo "</table>";


?>

</div>

<div class="mycodeview">

<?php

	if ($_POST["viewfile"]) {
		$writer = $_SESSION["ID"];
		$fileurl = $_POST["viewfile"];
		$file = readfile("../../userdata/codes/" . $writer . "-" . $fileurl . ".txt") . "<br>";
	}

?>

</div>
</div>
</body>
</html>