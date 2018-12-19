<?php
session_start();

include "dbconect.php";

if($_POST){
	$login_password 	=$_POST['password'];
	$login_name     	=$_POST['name'];
var_dump("$login_name");
//i can get infomation
   
//table内にパスワードと名前が一致するユーザーがいる場合、登録しているユーザーの名前とidを取ってくる　17行まで
if($sql = "SELECT * FROM project WHERE password = '$login_password' AND name = '$login_name'"){
		$project = $conn->query($sql);
// var_dump("count($project)");

//$projectが中身を持っている場合、セッション情報としてユーザーの名前とidを保存する。
if(count($project) > 0){
	$row = $project->fetch_assoc();
	if($login_name != $row['name'] && $login_password != $row['password']){
		echo"your fail";
		header('location: Login.php');
	}else{
	$_SESSION['name'] 		=$row['name'];
	$_SESSION['id']   		=$row['personID'];
	$_SESSION['country']	=$row['country'];
	$_SESSION['exsperience']=$row['exsperience'];
	$_SESSION['email']		=$row['email'];
	echo"sccess";
	header('location: Form.php');
	// var_dump($_SESSION['exsperience']);
 			}
		}
	}
}
?>
