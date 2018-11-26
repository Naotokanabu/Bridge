<?php
include 'dbconnect.php';

    $sql = "DELETE FROM myinfo WHERE infoID=1";

    if ($conn->query($sql) === TRUE) {
       echo "Record is deleted successfully";
    } else {
       echo "Error during deleting record: " . $conn->error;
}
?>