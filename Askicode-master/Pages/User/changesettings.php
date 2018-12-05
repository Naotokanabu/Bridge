<?php session_start();?>
<?php include 'dbconnect.php'; ?>

<?php
$ID = $_SESSION["ID"];
$firstname = $_POST["firstname"];
$invitation = $_POST["invitation"];
$familyname = $_POST["familyname"];
$private = $_POST["private"];
$email = $_POST["email"];
$password = $_POST["password"];


$sql = "UPDATE Personal SET password = '$password', email = '$email', firstname = '$firstname',
							familyname = '$familyname',invitation = '$invitation',privatemode = '$private' 
						WHERE ID = '$ID'";

$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully<br>";
}else{
	echo "Error" . $sql . "<br>" . $conn->error;
}
?>

<?php 
header('Location: settings.php');
?>