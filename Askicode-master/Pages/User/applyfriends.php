<?php session_start();?>
<?php include 'dbconnect.php'; ?>

<?php

	$apply	= $_POST["apply"];
	$ID 	= $_SESSION["ID"];

	$sql 	= "SELECT COUNT(applyfrom) FROM Apply WHERE applyfrom = '$ID' AND ID = '$apply'";
	$result = $conn->query($sql);
	$sql	= $result->fetch_assoc()["COUNT(applyfrom)"];

	if ($sql > 0) {
		
		die("You have already sent it.");

	}

	$sql = "INSERT INTO Apply(ID,applyfrom) VALUES ('$apply','$ID')";

	    if ($conn->query($sql) === TRUE) {

	       echo "success";

	    } else {

	       echo "Error: " . $conn->error;

		}

	header("Location:addfriends.php");

?>