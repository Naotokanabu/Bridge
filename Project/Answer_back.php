<?php
session_start();

include 'dbconect.php';


$name			=$_SESSION["name"];
$country		=$_SESSION["country"];
$email			=$_SESSION["email"];
$answer 		=$_GET["answer"];
$id 			=$_GET["id"];
// echo"$answer";
// var_dump($id);
// var_dump($email);
// var_dump($answer);
// var_dump($name);
// var_dump($country);
// I cna get infomation

$sql = "INSERT INTO answer (answer,questionID,name,country,email) VALUES ('$answer','$id','$name','$country','$email')";


// $answer = $conn->query($sql);
// var_dump($answer);
// I made sure bool true 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// if (count($answer) > 0) {
//     echo "New record created successfully";
// } else {
// 	echo"Your fail";
// }
?>
<?php
header('Location: Form.php');
?> 
