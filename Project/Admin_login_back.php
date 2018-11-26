<?php
session_start();
?>
<?php
include 'dbconect.php';

if($_POST){
	$login_password 	=$_POST['password'];
	$login_name     	=$_POST['name'];
	// var_dump($login_password);
	// var_dump($login_name);
	// I can get infomation


//table内にパスワードと名前が一致するユーザーがいる場合、登録しているユーザーの名前とidを取ってくる　17行まで
$sql = "SELECT password,name,ID FROM admin WHERE password = $login_password AND name = $login_name";

$admin = $conn->query($sql);
// var_dump(count($project));
// var_dump($admin);

//$projectが中身を持っている場合、セッション情報としてユーザーの名前とidを保存する。
if(count($admin) > 0){
	$row = $admin->fetch_assoc();
	$_SESSION['name'] 		=$row['name'];
	$_SESSION['id']   		=$row['ID'];
	echo"sccess";
	// var_dump($_SESSION['exsperience']);
 		}
	}
?>
<?php
// header('Location: .php');
?> 