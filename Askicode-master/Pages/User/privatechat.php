<?php session_start();?>
<?php

ini_set('display_errors',"Off");
ini_set('memory_limit', '128M');
ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '32M');

?>
<?php $page = "privatechat" ;?>
<?php include 'dbconnect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/privatechat.css">
	<link rel="stylesheet" href="../../css/userpage.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>Private chat | Askicode</title>
</head>
<body>


<?php

	$ID = $_SESSION["ID"];

	if ($_POST["chatfriend"]) {

		$_SESSION["chatfriend"] = $_POST["chatfriend"];

	}
	
	$chatfriend = $_SESSION["chatfriend"];

?>

<?php include 'menubar.php'; ?>

<div class="header" style="background-image: url(../../CSS/CSSimg/alexander-andrews-633927-unsplash.jpg); background-position: center;">

	<?php include 'searchbar.php';?>

</div>

<div class="privatechatdiv">

<?php

	$sql = "SELECT * FROM Privatechat WHERE (ID = '$ID' AND chatfriend = '$chatfriend') 
			OR (ID = '$chatfriend' AND chatfriend = '$ID') ORDER BY time DESC LIMIT 100";

	$result = $conn->query($sql);

		if ($result->num_rows >= 0) {

			echo "<table class='chattable'>";

			while ($row = $result ->fetch_assoc()) {

				$chattext		= $row["chattext"];
				$time 			= $row["time"];
				$chatwhosaid 	= $row["chatwhosaid"];

					if ($row["chattext"]) {

						echo 	"<tr>";

						if ($chatwhosaid == $ID) {

							echo "<td class='chattextbox'><div class='mychatbox'><div class='mychattextboxinside'>" . $row["chattext"]  . "</div></div></td>";

						}

						else{
				
							echo "<td class='chattextbox'><div class='friendschatbox'><div class='friendschattextboxinside'>" . $row["chattext"]  . "</div></div></td>";
						}	





						
						echo 	"<td class='chattimebox'>" .  $row["time"] . "</span>" . "</td>";
						echo 	"</tr>";

						}
					}
			}
		echo "</table>";
?>

	<form action="sendingprivatechat.php" method="POST">

</div>

</body>
</html>