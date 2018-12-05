<?php session_start();?>
<?php include 'dbconnect.php';?>
<?php
	$ID				= $_SESSION["ID"];
	$iconurl 		= $_POST["iconurl"];
	$newiconname 	= $_FILES['newicon']['name'];
	$oldicon 	= "../../userdata/images/$ID-$iconurl";

	if (file_exists($oldicon)) {

		if (unlink($oldicon)) {

			echo "Delete oid icon successfully.<br>";

		}

		else{

			echo "Error: Failed to delete old file.<br>";

		}

	}

	if(is_uploaded_file($_FILES['newicon']['tmp_name'])){

		if(move_uploaded_file($_FILES['newicon']['tmp_name'],"../../userdata/images/$ID-" . $_FILES['newicon']['name'])){

			echo "uploaded.<br>";

		}else{

			echo "error while saving.<br>";

		}

	}else{

		echo "file not uploaded.<br>";
	}

	$sql = "UPDATE Personal SET iconurl = '$newiconname' WHERE ID = '$ID'";

	if ($conn->query($sql) === TRUE) {

		echo "Updated Personal information successfully<br>";

	}else{

		echo "Error" . $sql . "<br>" . $conn->error;

	}

	header('Location: settings.php');

?>