<?php session_start();?>
<?php include 'dbconnect.php';?>
<?php

ini_set('display_errors',"Off");
ini_set('memory_limit', '128M');
ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '32M');

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/settings.css">
	<link rel="stylesheet" href="../../css/userpage.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>Settings | Askicode</title>
</head>
<body>

<?php include 'menubar.php'; ?>
<div class="header" style="background-image: url(../../CSS/CSSimg/malcolm-lightbody-1081282-unsplash.jpg); background-position: top;">

	<?php include 'searchbar.php';?>

</div>

<?php

	$ID = $_SESSION["ID"];
	$sql = "SELECT * FROM Personal WHERE ID = '$ID'";
	$result = $conn->query($sql);
	$row = $result ->fetch_assoc();

	$point		= $row["moneypoint"];
	$firstname	= $row["firstname"];
	$invitation = $row["invitation"];
	$familyname = $row["familyname"];
	$privatemode= $row["privatemode"];
	$email 		= $row["email"];
	$password 	= $row["password"];
	$iconurl 	= $row["iconurl"];

	if ($invitation == "on") {

		$checkinvon = "checked";
		$checkinvoff = ""; 

	}

	else{

		$checkinvon = ""; 
		$checkinvoff = "checked";

	}

	if ($privatemode == "on") {

		$checkprion = "checked";
		$checkprioff = ""; 

	}
	else{

		$checkprion = ""; 
		$checkprioff = "checked";

	}

?>

<div class="settingsdiv">

	<div class="settingsform">

		<div class="settingsforminside">

<form action="changesettings.php" method="POST">
<table class="formtable">
	<tr> 
		<td class="tabletd tdleft">ID</td>
		<td class="tabletd"><?php echo "$ID"; ?></td>
	</tr>
	<tr>
		<td class="tabletd tdleft">First name</td>
		<td class="tabletd"><input maxlength="50" type="text" name="firstname" value=<?php echo "$firstname"; ?>></td>
	</tr>
	<tr>
		<td class="tabletd tdleft">Family name</td>
		<td class="tabletd"><input maxlength="50" type="text" name="familyname" value=<?php echo "$familyname"; ?>></td>
	</tr>
	<tr>
		<td class="tabletd tdleft">Email address</td>
		<td class="tabletd"><input maxlength="100" type="text" name="email" value=<?php echo "$email"; ?>></td>
	</tr>
	<tr>
		<td class="tabletd tdleft">Password</td>
		<td class="tabletd"><input minlength="8" maxlength="20" type="text" name="password" value=<?php echo "$password"; ?>></td>
	</tr>
<?php

	// <tr>
	// 	<td class="tabletd tdleft">money point</td>
	// 	<td class="tabletd">

?>

			<?php 
			// echo "$point";
			?>

<?php

	// </td>
	// </tr>
	// <tr>
	// 	<td class="tabletd tdleft">Invitation</td>
	// 	<td class="tabletd">on<input type="radio"

?>
		 <?php 
		 // echo "$checkinvon"; 
		 ?> 

<?php 

	// name="invitation" value="on">
	// off<input type="radio"

?>
			 <?php 
			 // echo "$checkinvoff"; 
			 ?>

<?php

	// name="invitation" value="off"></td>
	// 	</tr>
	// 	<tr>
	// 		<td class="tabletd tdleft">Private mode</td>
	// 		<td class="tabletd">on<input type="radio"

?>

		 <?php 
		 // echo "$checkprion";
		 ?> 

<?php 

	// name="private" value="on">
	// off<input type="radio"

?>
		 <?php 
		 // echo "$checkprioff";
		  ?> 
 <?php

 // name="private" value="off"></td>
	// </tr>

?>
</table>
<div class="applybutton">
<button type="submit">Apply</button>
</div>
</form>

</div>

</div>
<div class="icondiv">
	<div class="icondivinside">
<form action="changeicon.php" method="POST" enctype="multipart/form-data">
	<table class="icontable">
	<tr>
		<td class="icondivtd"><img class="icon" src=<?php echo "../../userdata/images/$ID-$iconurl";?>></td>
	</tr>
	<tr>
		<td class="icondivtd"><input type="file" name="newicon" accept="image/png,image/jpeg"></td>
	</tr>
	<tr>
		<td class="icondivtd"><button type="submit" name="iconurl" value=<?php echo "$iconurl";?>>change icon</button></td>
	</tr>
	</table>
</form>
</div>
</div>

<div class="logoutbutton">
<p><a class="link" href="../logout.php" style="font-weight: bold;">Logout</a> </p>
</div>

</div>

</body>
</html>