<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php';?>
<?php $page = "userlist";?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminUserlist | Askicode</title>
</head>
<body>
<?php include'adminmenubar.php';?>
<div style="width: 100%; height: 50px;"></div>

<?php
if ($_POST["sort"] == "email") {
	$sort = "email";
}
elseif ($_POST["sort"] == "admin") {
	$sort = "Admin";
}
else{
	$sort = "ID";
}
if ($_POST["order"] == "ASC") {
	$order = "ASC";
}
else{
	$order = "DESC";
}

if ($_POST["search"]) {
	$search = $_POST["search"];
}
else{
	$search = NULL;
}
// アカウントをすべて持ってきて表示する　そのうち限界が来るから検索や表示制限ができるようにする
$sql = "SELECT * FROM Personal WHERE $sort LIKE '%$search%' ORDER BY $sort $order";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table><tr>";
		echo "<td>ID</td><td>Password</td><td>Email</td><td>First name</td>";
		echo "<td>Family name</td><td>Invitation</td><td>Private mode</td>";
		echo "<td>Money point</td><td>Admin</td>";
		echo "</tr>";

		while ($row = $result ->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["ID"] . "</td>";
			echo "<td>" .  $row["password"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
			echo "<td>" . $row["firstname"] . "</td>";
			echo "<td>" . $row["familyname"] . "</td>";
			echo "<td>" . $row["invitation"] . "</td>";
			echo "<td>" . $row["privatemode"] . "</td>";
			echo "<td>" . $row["moneypoint"] . "</td>";
			echo "<td>" . $row["Admin"] . "</td>";
			$infoID = $row["ID"];
			echo "<td><form action='adminedituser.php' method='POST'>
						<button type='submit' name='infoID' value='$infoID'>edit</button></form></td>";
			echo "<td><form action='admindeleteuser.php' method='POST'>
						<button type='submit' name='infoID' value='$infoID'>delete</button></form></td>";
			echo "</tr>";
		}
	}else{
			echo "0 results";
		}

			echo "</table>";

?>

</body>
</html>