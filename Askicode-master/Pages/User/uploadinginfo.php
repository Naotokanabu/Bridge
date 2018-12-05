<?php session_start();?>
<?php include 'dbconnect.php';?>
<?php

	ini_set('display_errors',"Off");
	ini_set('memory_limit', '128M');
	ini_set('post_max_size', '64M');
	ini_set('upload_max_filesize', '32M');

	$pageno 	= $_SESSION["pageno"];
	$text 		= $_POST["text"];
	$ID 		= $_SESSION["ID"];
	$time 		= date('Y/m/d H:i:s');
	$fileurl 	= $_FILES["up_file"]["name"];

	if(is_uploaded_file($_FILES['up_file']['tmp_name'])){

		if(move_uploaded_file($_FILES['up_file']['tmp_name'],"../../userdata/codes/$ID-" . $_FILES['up_file']['name'])){
			
			echo "uploaded";

		}else{

			echo "error while saving.";

		}

	}else{

		echo "file not uploaded.";

	}

	$sql = "INSERT INTO Formchat(ID,text,time,fileurl,pageno) VALUES('$ID','$text','$time','$fileurl','$pageno')";

	if ($conn->query($sql) === TRUE) {

		echo "success";

	}

	else{

		echo "Error:" . $conn->error;

	}

	$sql = "INSERT INTO Code(ID,time,filename) VALUES('$ID','$time','$fileurl')";

	if ($conn->query($sql) === TRUE) {

		echo "success";

	}

	else{

		echo "Error:" . $conn->error;

	}

	header("Location: userform.php?pageno=$pageno");

?>