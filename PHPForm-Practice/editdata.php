<?php
include 'dbconnect.php';

$sql = "UPDATE myinfo SET name='$name','$email','$myself','$gender' ' WHERE infoID=InfoID";

if ($conn->query($sql) === TRUE) {
  echo "Record is updated successfully";
} else {
  echo "Error during updating record: " . $conn->error;
}
?>
