<?php include 'dbconnect.php'; ?>

<?php
$ID = $_POST["ID"];
$email = $_POST["email"];
$IDcheck = 0;
$passwordcheck = 0;

// IDがデータベースにあるかチェック　あればIDcheck=1を返す
$sql = "SELECT ID FROM Personal";
$result = $conn->query($sql);
while ($row = $result ->fetch_assoc()) {
	if ($row["ID"] == $_POST["ID"]) {
		// echo "ID is correct";
		$IDcheck = 1;
		break;
	}
}

// IDに紐付いたパスワードと入力されたメアドをチェック　一致していれば$emailcheck=1を返す
$sql = "SELECT email FROM Personal WHERE ID ='$ID'";
$result = $conn->query($sql);
$sql = $result->fetch_assoc()["email"];
if ($sql == $email) {
	// echo "email is correct";
	$emailcheck = 1;
}

if ($IDcheck == 1 && $emailcheck == 1) {
	$sql = "SELECT password FROM Personal WHERE ID ='$ID'";
	$result = $conn->query($sql);
	$password = $result->fetch_assoc()["password"];

	$title = "Askicode | You got your password";
	$text = "Here is your password. $password";

	mail($email,$title,$text);
}

$emailcheck = 0;
$IDcheck = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/askicodetitle.css">
	<link rel="stylesheet" href="../css/askicodeform.css">
	<link rel="stylesheet" href="../css/sentpassword.css">
	<link rel="icon" type="image/x-icon" href="../css/CSSimg/Askicodeicon.png">
	<title>Sent your password</title>
</head>
<body>
<h2 class="cuts title">Ask<span class="ifont titlesize">i</span>code</h2>
<h2 class="cuts">Sent the password to your Email address successfully!</h2>

<p style="text-align: center"><span class="cuts message">If you do not recieve the email, you inputted incorrect information.</span></p>


<table class="buttontable">
	<tr>
<td class="buttontd"><input type="button" value="Go to login page" onclick="location.href='login.php'"></td>
<td class="buttontd"><input type="button" value="Try again" onclick="history.back()"></td>
	</tr>
</table>


</body>
</html>