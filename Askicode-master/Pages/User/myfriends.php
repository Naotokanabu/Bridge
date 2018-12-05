<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/myfriends.css">
	<link rel="stylesheet" href="../../css/userpage.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>My friends | Askicode</title>
</head>
<body>

<?php include 'menubar.php';?>

<div class="header" style="background-image: url(../../CSS/CSSimg/jed-adan-5784-unsplash.jpg); background-position: center;">

	<?php include 'searchbar.php';?>

</div>

<?php
	$ID = $_SESSION["ID"];
	$sql = "SELECT friend FROM Friends WHERE ID = '$ID'";
	$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "<div class='friendsdiv'>";
			while ($row = $result ->fetch_assoc()) {
					$friend = $row["friend"];
					$sql_icon = "SELECT iconurl FROM Personal WHERE ID = '$friend'";
					$whereicon = $conn->query($sql_icon);
					$icon = $whereicon ->fetch_assoc();
					$icon = $icon["iconurl"];
					echo 	"<div class='friendlist'>";
					echo 		"<div class='friendicondiv'><img class='friendicon' src='../../userdata/images/$friend-$icon'width='100' height='60'></div>";
					echo 	"<div class='favoritename'>" . $row["friend"] . "</div>";
					echo    	"<div class='privatechatlink'><form action='privatechat' method='POST'>
									<button type='submit' name='chatfriend' value='$friend'>Private chat</button>
								</form></div>";
					echo 	"</div>";
			}
		}
			echo "</div>";
?>

</body>
</html>