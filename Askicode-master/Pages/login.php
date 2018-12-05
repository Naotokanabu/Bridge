<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php if ($_SESSION["ID"]) {header('Location: Admin/adminhome.php');}?>
<?php if ($_SESSION["ID"]) {header('Location: User/userhome.php');}?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/askicodetitle.css">
	<link rel="stylesheet" href="../css/askicodeform.css">
	<link rel="stylesheet" href="../css/login.css">
	<link rel="icon" type="image/x-icon" href="../css/CSSimg/Askicodeicon.png">
	<title>login | Askicode</title>
</head>
<body>

<h2 class="cuts title">Ask<span class="ifont titlesize">i</span>code</h2>
<h2 class="cuts">Login</h2>

<div class="formdiv">
<form action="checklogin.php" method="POST">

<table class="input">
		<tr>
			<td class="input"><input class="forminput" placeholder="ID" type="text" name="ID"></td>
		</tr>
		<tr>
			<td class="input"><input class="forminput" placeholder="Password" type="text" name="password"></td>
		</tr>
		<tr>
			<td><button class="button" type="submit">login</button></td>
		</tr>
		<tr class="checkinfo">
			<td><span class="cuts"><?php if($_SESSION["check"] == 1){echo "Check your information.";}$_SESSION["check"] = 0;?></span></td>
		</tr>
</table>

<div class="divinfo">
<table class="center">
	<tr>
		<td><input placeholder="Admin" type="checkbox" name="admin" value="checked"><span class="cuts subform">Admin</span></td>
		<td class="forgot"><a class="help" href="resendpassword.php"><span class="cuts subform">Forgot password</span></a></td>
		<td class="register"><a class="help" href="register.php"><span class="cuts subform">Register</span></a></td>
	</tr>
</table>
</div>

</form>
</div>
</body>
</html>