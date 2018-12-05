<?php session_start();?>
<?php include 'dbconnect.php'; ?>

<?php
$ID = $_SESSION["ID"];
$firstname = $_POST["firstname"];
$familyname = $_POST["familyname"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "UPDATE Personal SET password = '$password', email = '$email', firstname = '$firstname',
							familyname = '$familyname' WHERE ID = '$ID'";

$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully<br>";
}else{
	echo "Error" . $sql . "<br>" . $conn->error;
}
?>

<?php 
header('Location: adminsettings.php');
?>