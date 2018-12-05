<?php session_start();?>
<?php 
ini_set('display_errors',"Off");
ini_set('memory_limit', '128M');
ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '32M');
?>
<?php include 'dbconnect.php';?>
<?php $page = "userform";?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/userform.css">
	<link rel="stylesheet" href="../../css/userpage.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>Form | Askicode</title>
</head>
<body>

<?php

	if ($_GET["pageno"]) {

		$_SESSION["pageno"] = $_GET["pageno"];

	}

	$ID 	= $_SESSION["ID"];
	$pageno = $_SESSION["pageno"];
	$sql 	= "SELECT * FROM Form WHERE pageno = '$pageno'";
	$result = $conn->query($sql);
	$row 	= $result->fetch_assoc();
	$sql_icon 	= "SELECT iconurl FROM Personal WHERE ID = '$ID'";
	$result_icon = $conn->query($sql_icon);
	$row_icon 	= $result_icon ->fetch_assoc();
	$icon		= $ID . "-" . $row_icon["iconurl"];
	$title 	= $row["title"];
	$detail = $row["detail"];
	$pageno = $row["pageno"];
?>

<?php include 'menubar.php'; ?>

<div class="header" style="background-image: url(../../CSS/CSSimg/kristina-tripkovic-602495-unsplash.jpg); background-position: center;">

	<?php include 'searchbar.php';?>

</div>

<div  class='chatcolumn'>
	<div class="titleanddetail">

<?php
// $sqlから$rowまでは同じphpフォーム内に書かないと正常に機能しないのかもしれない
	echo "<table>";
	echo 	"<tr>";
	echo 		"<td class='formtitle'>" . $title ."</td>";
	echo 	"</tr><tr>";
	echo 		"<td>" . $detail ."</td>";
	echo 	"</tr>";
	echo "</table>";

?>
	</div>
</div>

<form class='chatcolumn' action="uploadinginfo.php" method="POST" enctype="multipart/form-data">

	<div class='columnIDandname'>
		<table class='IDandnametable'>
			<tr>
				<td><div class='columnID'><img class='iconimage' src='../../userdata/images/<?php echo $icon;?>'></div></td>
			</tr>
			<tr>
				<td><div class='columnname'><?php echo $ID;?></div></td>
			</tr>
		</table>
	</div>


	<div class='columntext'>
		<div class='columntextinside'>
			<textarea class="commentarea" name="text" maxlength="1500" placeholder="Write comment within 1500 letters"></textarea>
		</div>
	</div>
	<div class='columnfileandtime'>
		<table class="columntable">
			<tr>
				<td class='columnlink'>
					<label for="file_photo">Upload file<input type="file" id="file_photo" style="display:none;"></label>
				</td>
			</tr>
			<tr>
				<td><input type="hidden" name="pageno" value=<?php echo "$pageno";?>></td>
			</tr>
			<tr>
				<td class='columntime columnbutton'><button type="submit">send</button></td>
			</tr>
		</table>
	</div>

</form>



<?php

	$sql = "SELECT * FROM Formchat WHERE pageno = '$pageno' ORDER BY time DESC";
	$result = $conn->query($sql);

	if ($result->num_rows >= 0) {

		while ($row = $result ->fetch_assoc()) {

			$writer 	= $row["ID"];

			$sql_icon 	= "SELECT iconurl FROM Personal WHERE ID = '$writer'";
			$result_icon = $conn->query($sql_icon);
			$row_icon 	= $result_icon ->fetch_assoc();

			$title 		= $row["fileurl"];
			$icon		= $row["ID"] . "-" . $row_icon["iconurl"];
			$filename 	= "../../userdata/codes/" . $writer . "-" . $title . ".txt";
			$file 		= readfile($filename) . "<br>";

			echo "<div class='chatcolumn'>";
			echo 	"<div class='columnIDandname'>";
			echo 		"<table class='IDandnametable'>";
			echo 			"<tr>";
			echo 				"<td>" . "<div class='columnID'>" . "<img class='iconimage' src='../../userdata/images/$icon'>" . "</div>" . "</td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo 				"<td>" . "<div class='columnname'>" . $row["ID"] . "</div>" . "  </td>";
			echo 			"</tr>";
			echo 		"</table>";

			echo 	"</div>";

			echo "<div class='columntext'>";
			echo "<div class='columntextinside'>";
			echo $row["text"];
			echo "</div>";
			echo "</div>";

			echo "<div class='columnfileandtime'>";

			echo 	"<table  class='columntable'>";
			echo 		"<tr>";
			echo 			"<td class='columnlink'>";

			if (is_file($filename)) {

			echo "<a class='columnlinktext' href='../../userdata/codes/$writer-$title.txt' download>" . "Download" . "</a>";

			}

			echo 			"</td>";
			echo 		"</tr>";
			echo 		"<tr>";
			echo 			"<td class='columntime'>" . $row["time"] . "</td>";
			echo 		"</tr>";
			echo 	"</table>";

			echo "</div>";

			echo "</div>";

		}

	}

?>

</body>
</html>