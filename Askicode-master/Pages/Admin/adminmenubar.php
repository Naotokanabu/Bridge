<?php if (!$_SESSION["ID"]) {header('Location: ../login.php');}?>
<?php if (!$_SESSION["admin"]) {header('Location: ../login.php');}?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/menubar.css">
	<title></title>
</head>
<body>

<?php

	if ($page == "userlist") {
		$formaction = "adminuserlist.php";
		$placeholder = "Search user";
	}
	elseif ($page == "manageform") {
		$formaction = "adminmanageform.php";
		$placeholder = "Search form";
	}
	elseif ($page == "privatechat") {
		$formaction = "manageprivatechat.php";
		$placeholder = "Search private chat";
	}
	else{
		$formaction = "adminmanageform.php";
		$placeholder = "Search form";
	}

?>

<table class="bar">
	<tr>
		<td id="askicode"><a class="link" href="adminhome.php" title="Admin Home">Askicode</a></td>
		<form method="POST" action="<?php echo $formaction;?>">
			<td id="searchbar"><input type="text" name="search" style="width: 95%" placeholder="<?php echo $placeholder;?>" value="<?php echo $search;?>"></td>
			<td id="searchbutton"><button type="submit">search</button></td>
			<?php
			if ($page == "userlist") {
				echo "<td><select name='sort'>";
				echo "<option value='ID' $IDselected>ID</option>";
				echo "<option value='email' $emailselecetd>Email</option>";
				echo "<option value='admin' $adminselected>Admin</option>";
				echo "</select></td><td><select name='order'>";
				echo "<option value='ASC' $ASCselected>ASC</option>";
				echo "<option value='DESC' $DESCselected>DESC</option>";
				echo "</select></td>";
			}
			if ($page == "manageform" || $page == "searchform") {
				echo "<td><select name='sort'>";
				echo "<option value='managerID' $managerIDselected>ManagerID</option>";
				echo "<option value='title' $titleselected>Title</option>";
				echo "<option value='admin' $detailselected>Detail</option>";
				echo "<option value='time' $timeselected'>Time</option>";
				echo "<option value='formno' $formnoselected>Form number</option>";
				echo "</select></td><td><select name='order'>";
				echo "<option value='ASC' $ASCselected>ASC</option>";
				echo "<option value='DESC' $DESCselected>DESC</option>";
				echo "</select></td>";
			}
			if ($page == "privatechat") {
				echo "<td><select name='sort'>";
				echo "<option value='ID' $IDselected>ID</option>";
				echo "<option value='chatfriend' $chatfriendselected>Friend</option>";
				echo "<option value='whosaid' $whosaidselected>Who said</option>";
				echo "<option value='chattext' $chattextselected>Text</option>";
				echo "<option value='time' $timeselected>Time</option>";
				echo "</select></td><td><select name='order'>";
				echo "<option value='ASC' $ASCselected>ASC</option>";
				echo "<option value='DESC' $DESCselected>DESC</option>";
				echo "</select></td>";
			}

			?>
		</form>
		<td id="space"></td>
		<td  class="icon"><a href="adminuserlist.php">
				<img class="image" src="../../images/icon/019-management-1.png" title="User list" border="0" align="center">
				</a></td>
		<td  class="icon"><a href="adminmanageform.php">
				<img class="image" src="../../images/icon/020-management-2.png" title="Manage form" border="0" align="center">
				</a></td>
		<td  class="icon"><a href="manageprivatechat.php">
				<img class="image" src="../../images/icon/050-exchanging.png" title="Manage private message" border="0" align="center">
				</a></td>
		<td id="account"><a class="link" href="Adminsettings.php" title="Setting">Admin <?php echo $_SESSION['ID']; ?></a></td>

	</tr>
</table>

</body>
</html>