<?php session_start();?>
<?php include 'dbconnect.php';?>

<?php

  $friends	= $_POST["friends"];
  $ID 		= $_SESSION["ID"];

  $sql = "INSERT INTO Friends(ID,friend) VALUES ('$ID','$friends')";

      if ($conn->query($sql) === TRUE) {

         echo "Record is registerd successfully" . "<br>";

      } else {

         echo "Error during deleting record: " . $conn->error . "<br>";

  	}

  $sql = "INSERT INTO Friends(friend,ID) VALUES ('$ID','$friends')";

      if ($conn->query($sql) === TRUE) {

         echo "Record is registerd successfully" . "<br>";

      } else {

         echo "Error during deleting record: " . $conn->error . "<br>";

    }

  $sql = "DELETE FROM Apply WHERE applyfrom = '$friends' AND ID = '$ID'";

      if ($conn->query($sql) === TRUE) {

         echo "Record is deleted successfully" . "<br>";

      } else {

         echo "Error during deleting record: " . $conn->error . "<br>";

  	}

  header("Location:addfriends.php");

?>