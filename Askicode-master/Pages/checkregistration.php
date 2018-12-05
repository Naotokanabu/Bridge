<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php if ($_SESSION["ID"]) {header('Location: Admin/adminhome.php');}?>
<?php if ($_SESSION["ID"]) {header('Location: User/userhome.php');}?>
<?php
include 'dbconnect.php';
if ($_POST["password"] !== $_POST["passwordagain"]) {

	$_SESSION["checkpassword"] = 1;
	header("Location:register.php");
	$ID 		= $_POST["ID"];
	$password 	= $_POST["password"];
	$email 		= $_POST["email"];

}

if ($ID == NULL || $password == NULL || $email == NULL) {

	$_SESSION["checknull"] = 1;
	header('Location: register.php');
	exit();

}

// PersonalからIDのデータをすべて抽出
$sql_ID = "SELECT ID FROM Personal";
$result = $conn->query($sql_ID);
// １番最初に引っかかった値を入れる 関数を起動するたびに調べる場所が１つずつずれる
// $sql_ID = $result->fetch_assoc()["ID"];
while ($row = $result ->fetch_assoc()) {

// echo $row["ID"] . "<br>";

	if ($row["ID"] == $_POST["ID"]) {

		header("Location:register.php");
		$_SESSION["checkID"]=1;

	}
}

$sql_ID = "SELECT email FROM Personal";
$result = $conn->query($sql_ID);
while ($row = $result ->fetch_assoc()) {

	if ($row["email"] == $_POST["email"]) {

		header("Location:register.php");
		$_SESSION["checkemail"]=1;

	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/askicodetitle.css">
	<link rel="stylesheet" href="../css/askicodeform.css">
	<link rel="stylesheet" href="../css/checkregistration.css">
	<link rel="icon" type="image/x-icon" href="../css/CSSimg/Askicodeicon.png">
	<title>Check Registraiton | Askicode</title>
</head>
<body>
<h2 class="cuts title">Ask<span class="ifont titlesize">i</span>code</h2>
<h2 class="cuts">Check Registration</h2>

	<form action="registing.php" method="POST" class="formdiv">
		
		<table class="input">
			<tr>
				<td class="input textright"><span class="forminput cuts message">ID</span></td>
				<td class="input textleft"><span class="forminput cuts message"><?php echo $_POST['ID']?></span></td>
				<td><input type="hidden" name="ID" value="<?php echo $_POST['ID']?>"></td>
			</tr>
			<tr>
				<td class="input textright"><span class="forminput cuts message">Password</span></td>
				<td class="input textleft"><span class="forminput cuts message"><?php echo $_POST['password']?></span></td>
				<td><input type="hidden" name="password" value="<?php echo $_POST['password']?>"></td>
			</tr>	
			<tr>
				<td class="input textright"><span class="forminput cuts message">Email Address</span></td>
				<td class="input textleft"><span class="forminput cuts message"><?php echo $_POST['email']?></span></td>
				<td><input type="hidden" name="email" value="<?php echo $_POST['email']?>"></td>
			</tr>
		</table>

<table class="buttontable">
	<tr>
		<td class="buttontd"><input class="buttons" type="submit" value="Register"></td>
		<td class="buttontd"><input class="buttons" type="button" value="Rewrite" onclick="history.back()"></td>
	</tr>
</table>

	</form>







</body>
</html>