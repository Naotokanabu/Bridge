<?php session_start();?>
<?php include 'dbconnect.php';?>
<?php

	$ID 	= $_SESSION["ID"];
	$pageno = $_SESSION["pageno"];

	$sql = "SELECT COUNT(pageno) FROM Favorite WHERE ID = '$ID' AND pageno = '$pageno'";
	$result = $conn->query($sql);
	$sql = $result->fetch_assoc()["COUNT(pageno)"];

	echo $sql;

	if ($sql > 0) {

		header("Location: userform.php?pageno=$pageno");
		exit();
		
	}

	$sql = "INSERT INTO Favorite(ID,pageno) VALUES('$ID','$pageno')";

	if ($conn->query($sql) === TRUE) {

		echo "New Page was created successfully<br>";

	}else{

		echo "Error" . $sql . "<br>" . $conn->error;
	}

	header("Location: userform.php?pageno=$pageno");

?>