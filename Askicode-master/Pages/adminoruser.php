<?php session_start();?>
<?php if (!$_SESSION["ID"]) {header('Location: ../login.php');}?>
<?php if (!$_SESSION["admin"]) {header('Location: ../login.php');}?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/register.css">
	<link rel="icon" type="image/x-icon" href="../css/CSSimg/Askicodeicon.png">
	<title>Select | Askicode</title>
</head>
<body>

	<p>You will login as a</p>

	<table>
		<tr>
			<td><a class="link" href="Admin/adminhome.php" style="font-weight: bold;">Admin</a></td>
			<td><a class="link" href="User/userhome.php" style="font-weight: bold;">User</a></td>
		</tr>
	</table>

</body>
</html>