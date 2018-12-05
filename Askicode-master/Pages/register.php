<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php if ($_SESSION["ID"]) {header('Location: Admin/adminhome.php');}?>
<?php if ($_SESSION["ID"]) {header('Location: User/userhome.php');}?>

<?php
	if($_SESSION["checkID"]==1) {$IDused =  "This ID is already used." . "<br>";}
		$_SESSION["checkID"] = 0;
	if($_SESSION["checkpassword"]==1) {$consistent = "Please input consistent passwords." . "<br>";}
		$_SESSION["checkpassword"] = 0;
	if($_SESSION["checkemail"]==1) {$mailused =  "This Email is already used." . "<br>";}
		$_SESSION["checkemail"] = 0;
	if($_SESSION["checknull"]==1) {$checknull =  "Check your information." . "<br>";}
		$_SESSION["checknull"] = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/askicodetitle.css">
	<link rel="stylesheet" href="../css/askicodeform.css">
	<link rel="stylesheet" href="../css/register.css">
	<link rel="icon" type="image/x-icon" href="../css/CSSimg/Askicodeicon.png">
	<title>Registar | Askicode</title>
</head>
<body>

<h2 class="cuts title">Ask<span class="ifont">i</span>code</h2>
<h2 class="cuts">Register</h2>

<div class="formdiv">

	<form action="checkRegistration.php" method="POST">
		
		<table class="input">
			<tr>
				<td class="input2"><input class="forminput" placeholder="ID" type="text" name="ID" class="form" maxlength="15" minlength="2"><span class="cuts"></span></td>
			</tr>
			<tr class="notice">
				<td><span class="cuts"><?php echo $IDused ;?></span></td>
			</tr>
			<tr>
				<td class="input"><input class="forminput" placeholder="Password within 8 to 20" type="number" name="password" class="form" maxlength="20" minlength="8"><span class="cuts"></span></td>
			</tr>
			<tr>
				<td class="input2"><input class="forminput" placeholder="password again" type="number" name="passwordagain" class="form" maxlength="8" minlength="8"></td>
			</tr>
			<tr class="notice">
				<td><span class="cuts"><?php echo $consistent ;?></span></td>
			</tr>
			<tr>
				<td class="input2"><input class="forminput" placeholder="Email address" type="email" name="email" class="form"></td>
			</tr>
			<tr class="notice">
				<td><span class="cuts"><?php echo $mailused ;?></span></td>
			</tr>
			<tr>
				<td><button type="submit" class="button">Register</button></td>
			</tr>
			<tr>
				<td class="input2"><?php echo $checknull ;?></td>
			</tr>
		</table>

	</form>

</div>

</body>
</html>