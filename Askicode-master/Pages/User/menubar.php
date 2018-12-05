<?php if (!$_SESSION["ID"]) {header('Location: ../login.php');}?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/menubar.css">
</head>
<body>
<table class="bar">
	<tr>
		<td id="askicode"><a class="link" href="Userhome.php" title="Home">Askicode</a></td>
		<td id="space"></td>
		<td class="menubarlinktd"><a class="menubarlink" href="makecode.php" title="Make code">Make</a></td>
		<td class="menubarlinktd"><a class="menubarlink" href="askcode.php" title="Ask code">Ask</a></td>
		<td class="menubarlinktd"><a class="menubarlink" href="mycode.php" title="My code">Code</a></td>
		<td class="menubarlinktd"><a class="menubarlink" href="myform.php" title="My form">Form</a></td>
		<td class="menubarlinktd"><a class="menubarlink" href="myfriends.php" title="My friends">Friends</a></td>
		<td id="account"><a class="link" href="settings.php" title="My account"><?php echo $_SESSION['ID']; ?></a></td>
	</tr>
</table>
</body>
</html>