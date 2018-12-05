<?php session_start();?>
<?php include 'dbconnect.php';?>
<?php
$pageno = $_POST["pageno"];

$sql = "DELETE FROM Form WHERE pageno = '$pageno'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
	echo "You deleted the Form successfully" . "<br>";
}else{
	echo "Error" . $sql . "<br>" . $conn->error;
}

$sql = "DELETE FROM Formchat WHERE pageno = '$pageno'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
	echo "You deleted the chat successfully" . "<br>";
}else{
	echo "Error" . $sql . "<br>" . $conn->error;
}

$sql = "DELETE FROM Favorite WHERE pageno = '$pageno'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
	echo "You deleted Favorite successfully" . "<br>";
}else{
	echo "Error" . $sql . "<br>" . $conn->error;
}

header('Location: adminmanageform.php');

?>