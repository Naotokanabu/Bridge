<?php session_start();?>
<?php include 'dbconnect.php'; ?>

<?php

	if ($_POST["message"]) {

		$message 	= $_POST["message"];
		$time 		= date('Y/m/d H:i:s');
		$ID 		= $_SESSION["ID"];
		$chatfriend = $_SESSION["chatfriend"];
		$sql 		= "INSERT INTO Privatechat(time,chattext,chatwhosaid,chatfriend,ID) 
							VALUES ('$time','$message','$ID','$chatfriend','$ID')";

		if ($conn->query($sql) === TRUE) {

			// echo "New record created successfully<br>";

		}else{

			// echo "Error" . $sql . "<br>" . $conn->error;

		}
	}
	

	header('Location: privatechat.php');

?>