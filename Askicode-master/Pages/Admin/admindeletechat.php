<?php session_start();?>
<?php include 'dbconnect.php';?>
<?php
$ID = $_POST["infoID"];
$time = $_POST["time"];

$sql = "DELETE FROM Privatechat WHERE ID = '$ID' AND time = '$time'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
       echo "The message is deleted successfully";
    } else {
       echo "Error during deleting record: " . $conn->error;
	}

header('Location: manageprivatechat.php');

?>