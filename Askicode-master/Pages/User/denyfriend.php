<?php session_start();?>
<?php include 'dbconnect.php';?>

<?php
echo $_POST["friends"];
$friends	= $_POST["friends"];
$ID 		= $_SESSION["ID"];

$sql = "DELETE FROM Friends WHERE invitationfrom = '$friends'";
    if ($conn->query($sql) === TRUE) {
       echo "Record is deleted successfully";
    } else {
       echo "Error during deleting record: " . $conn->error;
	}

header("Location:addfriends.php");
?>