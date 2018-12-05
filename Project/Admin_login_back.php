<?php
session_start();
?>
<?php
include 'dbconect.php';

if($_POST){
	$login_password 	=$_POST['password'];
	$login_name     	=$_POST['name'];
	var_dump($login_password);
	var_dump($login_name);
	// I can get infomation
	 if($login_password =='admin' && $login_name == 'naoto'){
	 	echo"success";
	 	header("Location: Admin_form.php");
	 }else{
	 	echo"Your pass is not corect";
	 	header("Location: Admin_login.php");
	 }
	}
?>
