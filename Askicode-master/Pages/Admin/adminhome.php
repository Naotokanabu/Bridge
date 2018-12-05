<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php';?>
<?php $page = "adminhome";?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Home | Askicode</title>
</head>
<body>
<?php include'adminmenubar.php';?>
<div style="width: 100%; height: 50px;"></div>

<?php
// アカウント数をカウントし数字として出力するパート
$sql_account = "SELECT COUNT(*) FROM Personal";
$result = $conn->query($sql_account);
$sql_account = $result->fetch_assoc()["COUNT(*)"];
?>

<?php
// ページ数をカウントし数字として出力するパート
$sql_page = "SELECT COUNT(*) FROM Form";
$result = $conn->query($sql_page);
$sql_page = $result->fetch_assoc()["COUNT(*)"];
?>

<table>
		<tr>
			<td>Account</td>
			<td><?php echo "$sql_account"; ?></td>
		</tr>
		<tr>
			<td>Form</td>
			<td><?php echo "$sql_page"; ?></td>
		</tr>
	</table>
	
</body>
</html>