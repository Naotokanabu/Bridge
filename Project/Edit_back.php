<?php
session_start();
include 'dbconect.php';

$id 	=$_SESSION['id'];
// var_dump($id);
//I make sure to get $id

$name			=$_POST["name"];
$country		=$_POST["country"];
$exsperience	=$_POST["exsperience"];
$email			=$_POST["email"];
// var_dump($name);
// var_dump($country);
// var_dump($exsperience);
// var_dump($email);
//  I make sure to get infomation 


//comfirming Edit page 
$sql = "UPDATE project SET name ='$name', country ='$country', exsperience ='$exsperience', email='$email' WHERE personID =$id";
$project = $conn->query($sql);
// var_dump($project);

if(count($project) > 0){
	// echo"success";
	echo"$name";
	echo"$country";
	echo"$exsperience";
	echo"$email";
}

?>
<?php
header('Location: Form.php');
?> 
