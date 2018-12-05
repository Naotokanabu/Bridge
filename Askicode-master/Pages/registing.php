<?php session_start();?>

<?php
	include 'dbconnect.php';
	$ID 		= $_POST["ID"];
	$password 	= $_POST["password"];
	$email 		= $_POST["email"];
	$icon		= "default.jpg";


	$sql = "INSERT INTO Personal(ID, password, email,iconurl) VALUES('$ID','$password','$email','$icon')";

	if ($conn->query($sql) === TRUE) {
			echo "New record created successfully.<br>";
	}else{
			echo "Error" . $sql . "<br>" . $conn->error;
	}

	// デフォルトのアイコンを設定　本当はレジスタ時に変更できるようにしたいけど面倒
	copy("../userdata/images/default.jpg", "../userdata/images/$ID-default.jpg");
	
	header("Location:registerisdone.php");			
?>