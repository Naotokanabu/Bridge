<?php
session_start();
include 'dbconect.php';

$id 		=$_SESSION["id"];
$name		=$_SESSION["name"];
$question 	=$_POST["question"];
$country		=$_SESSION["country"];
$exsperience	=$_SESSION["exsperience"];
$email			=$_SESSION["email"];
var_dump($name);
var_dump($id);
var_dump($question);
// I can get infomation

$sql = "INSERT INTO question (question,personID,name,country,email) VALUES ('$question','$id','$name','$country','email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<?php
header('Location: Form.php');
?> 
