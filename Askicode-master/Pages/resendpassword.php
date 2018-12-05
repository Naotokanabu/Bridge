<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/askicodetitle.css">
	<link rel="stylesheet" href="../css/askicodeform.css">
	<link rel="stylesheet" href="../css/resendpassword.css">
	<link rel="icon" type="image/x-icon" href="../css/CSSimg/Askicodeicon.png">
	<title>Resend password | Askicode</title>
</head>
<body>
<h2 class="cuts title">Ask<span class="ifont titlesize">i</span>code</h2>
<h2 class="cuts">Resend password</h2>

<div class="formdiv">

<form action="Sentpassword.php" method="POST">

<table class="input">
		<tr>
			<td class="input"><input class="forminput" placeholder="ID" type="text" name="ID"></td>
		</tr>
		<tr>
			<td class="input"><input class="forminput" placeholder="Email address" type="email" name="email"></td>
		</tr>
		<tr>
			<td class="input"><button class="button" type="submit">send Email</button></td>
		</tr>
</table>

</div>

</body>
</html>