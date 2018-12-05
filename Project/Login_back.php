<?php
session_start();
?>
<?php
include 'dbconect.php';
// $sql  = "SELECT * FROM project";

//変数$projectとして空の配列を定義する
//ログイン画面で入力したメールアドレスとパスワードをPOSTで受け取る
//$project = array();
if($_POST){
	$login_password 	=$_POST['password'];
	$login_name     	=$_POST['name'];


   
//table内にパスワードと名前が一致するユーザーがいる場合、登録しているユーザーの名前とidを取ってくる　17行まで
$sql = "SELECT password,name,personID,country,exsperience,email FROM project WHERE password = $login_password AND name = $login_name";

$project = $conn->query($sql);

// if(count($project) > 0){
// 	$row = $project->fetch_assoc();
// 	if($login_password === $row['password'] && $login_name === $row['name']	){
// 		echo"false";
// 		header('Location:Register.php');
// 	}else{
// 		echo"sccess";
// 	}
// }
// }
// var_dump(count($project));
// var_dump($project);

//$projectが中身を持っている場合、セッション情報としてユーザーの名前とidを保存する。
if(count($project) > 0){
	$row = $project->fetch_assoc();
	$_SESSION['name'] 		=$row['name'];
	$_SESSION['id']   		=$row['personID'];
	$_SESSION['country']	=$row['country'];
	$_SESSION['exsperience']=$row['exsperience'];
	$_SESSION['email']		=$row['email'];
	echo"sccess";
	// var_dump($_SESSION['exsperience']);
 		}
	}
?>
<?php
header('Location: Form.php');
?> 