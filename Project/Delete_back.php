<?php
	include 'dbconect.php';

    $infoID = $_POST["delete"];
    var_dump($infoID);
    // I can get information

    $sql = "DELETE FROM question WHERE questionID = $infoID";


    if ($conn->query($sql) === TRUE) {
       echo "Record is deleted successfully";
    } else {
       echo "Error during deleting record: " . $conn->error;
}
?>

<?php
// header('Location:Delete.php');
?>