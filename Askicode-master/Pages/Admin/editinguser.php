<?php include 'dbconnect.php';?>

<?php

$ID = $_POST["ID"];
$password = $_POST["password"];
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$familyname = $_POST["familyname"];
$invitation = $_POST["invitation"];
$private = $_POST["private"];
$point = $_POST["point"];

$sql = "UPDATE Personal SET password = '$password', email = '$email', firstname = '$firstname',
							familyname = '$familyname',invitation = '$invitation',privatemode = '$private',moneypoint = '$point' 
						WHERE ID = '$ID'";

$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully<br>";
}else{
	echo "Error" . $sql . "<br>" . $conn->error;
}
?>

<?php 
header('Location: adminuserlist.php');
?>