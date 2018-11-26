<?php
include 'dbconnect.php';

$sql = "INSERT INTO myinfo (name, email, jpaddress, about me, gender)
VALUES ('Naoto kanabu', 'madmad21.n@gmail.com', 'japanese address', 'about me', 'male')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
