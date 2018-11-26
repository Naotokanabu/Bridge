<?php
session_start();

include 'dbconect.php';

$password        = $_POST["password"];
$name            = $_POST["name"];
var_dump($password);
var_dump($name);

// $_session["name"]         = $_POST["name"];
// var_dump($_session["country"]);
// var_dump($_session["exsperience"]);
// var_dump($_session["email"]);


$sql = "INSERT INTO admin (password,name) VALUES ('$password','$name')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>


<?php
header('Location: Admin_login.php');
?>  