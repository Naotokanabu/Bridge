<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php'; ?>
<?php

	$ID = $_SESSION["ID"];
	$filename = $_POST["filename"];
	$sql = "DELETE FROM Code WHERE ID='$ID' AND filename = '$filename'";

		if ($conn->query($sql) === TRUE) {

			echo "success";

		}

		else{

			echo "Error:" . $conn->error;

		}

	$fileurl = "../../username/codes/$ID-$filename";


	if (unlink($filename)) {

		echo "The file was deleted.";
	}

	else{

		echo "Error: The file was not deleted.";

	}

	header('Location: mycode.php');

?>