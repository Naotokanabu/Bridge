<?php session_start();?>
<?php include 'dbconnect.php';?>

<?php

	$ID = $_SESSION["ID"];
	$title = $_POST["title"];
	$code = $_POST["code"];
	$time = date('Y/m/d H:i:s');
	$fileurl = "../../userdata/codes/" . $ID . "-" . $title . ".txt";
	$editcode = $_POST["editcode"];


	if ($editcode = "edit") {
			
			$ID = $_SESSION["ID"];
			$title = $_POST["title"];
			$sql = "DELETE FROM Code WHERE ID='$ID' AND filename = '$title'";

				if ($conn->query($sql) === TRUE) {

					echo "Deleted old data.<br>";

				}

				else{

					echo "Error: Failed to delete old data.<br>" . $conn->error;
					exit();

				}

			if (unlink($fileurl)) {

				echo "The file was deleted.<br>";

			}

			else{

				echo "Error: The file was not deleted.<br>";

			}

	}

	if (file_exists($fileurl)) {

		echo "The file name has already existed.<br>";
		echo "<button onclick='history.back()'>Go back</button>";
		exit();

	}



	if (file_put_contents($fileurl, $code, FILE_APPEND | LOCK_EX)) {

	 	echo "Create new file.<br>";
	 	
	 }

	 else{

	 	echo "Error: Failed to create new file.<br>";
	 	exit();

	 }

	$sql = "INSERT Code(ID,filename,time) VALUES('$ID','$title','$time')";

	if ($conn->query($sql) === TRUE) {

		echo "New Page was created successfully<br>";

	}else{

		echo "Error" . $sql . "<br>" . $conn->error;

	}
	
	header('Location: mycode.php');

?>