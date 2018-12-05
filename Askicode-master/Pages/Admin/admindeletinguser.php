<?php session_start();?>
<?php include 'dbconnect.php';?>
<?php
$ID = $_POST["ID"];
echo "$ID";
$sql = "DELETE FROM Personal WHERE ID = '$ID'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
	echo "You deleted the account successfully";
}else{
	echo "Error" . $sql . "<br>" . $conn->error;
}

header('Location: adminuserlist.php');

?>