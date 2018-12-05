<?php

if ($page == "friends") {

	$formaction = "addfriends.php";
	$placeholder = "Search&nbsp;friends";

}

elseif ($page == "userform") {

	$formaction = "userform";
	$placeholder = "Search&nbsp;form";

}

elseif ($page == "myform") {

	$formaction = "myform.php";
	$placeholder = "Search&nbsp;my&nbsp;form";

}

elseif ($page == "mycode") {

	$formaction = "mycode.php";
	$placeholder = "Search&nbsp;my&nbsp;code";

}

elseif ($page == "userhome") {

	$formaction = "searchform.php";
	$placeholder = "Search&nbsp;form&nbsp;title";

}

elseif ($page == "askcode") {

	$formaction = "askcode.php";
	$placeholder = "Search&nbsp;my&nbsp;code";

}

elseif ($page == "privatechat") {

	$formaction = "sendingprivatechat.php";
	$placeholder = "Write&nbsp;message&nbsp;within&nbsp;120&nbsp;letters";

}

else{

	$formaction = "searchform.php";
	$placeholder = "Search&nbsp;form";

}

if ($_GET["sort"] == "time") {

		$timeselected = "selected";

	}

	elseif ($_GET["sort"] == "detail") {

		$detailselected = "selected";

	}

	elseif ($_GET["sort"] == "manager") {

		$managerIDselected = "selected";

	}else{

		$titleselected = "selected";

	}

	if ($_GET["order"] == "ASC") {

		$ASCselected = "selected";

	}

	else{

		$DESCselected = "selected";

	}

	if ($_GET["search"]) {

		$search = $_GET["search"];

	}else{

		$search = NULL;

	}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/searchbar.css">
	<title></title>
</head>
<body>
	<div class="searchbarbg">
		<div class="searchbar">
			<table>
				<tr>

					<?php
					if ($page == "privatechat") {
						echo "<form method='POST' action=" . $formaction . ">";
						echo "<td class='searchform'><input placeholder=" . $placeholder . " class='searchinput' type='text' name='message' minlength='1' maxlength='120'></td>";
						echo "<td><input type='hidden' name='chatfriend' value=".  $chatfriend . "></td>";
						echo "<td class='searchbutton'><button type='submit' name='sendbutton'>send</button></td>";

					}else{

						echo "<form method='GET' action=" . $formaction . ">";
						echo "<td class='searchform'><input class='searchinput' placeholder=" . $placeholder . " type='text' name='search' value=" . $search . "></td>";
						echo "<td class='searchbutton'><button type='submit'>search</button></td>";}

					?>

						<?php
						 	if ($page == "myform" || $page == "mycode" || $page == "userform" || $page == "askcode") {

								echo "<td><select name='sort'>";
								echo "<option value='title' $titleselected>Title</option>";
								echo "<option value='detail' $detailselected>Detail</option>";
								echo "<option value='time' $timeselected>Time</option>";
								echo "</select></td><td><select name='order'>";
								echo "<option value='ASC' $ASCselected>ASC</option>";
								echo "<option value='DESC' $DESCselected>DESC</option>";
								echo "</select></td>";

							}

							if ($page == "searchform") {

								echo "<td><select name='sort'>";
								echo "<option value='manager' $managerIDselected>Manager</option>";
								echo "<option value='title' $titleselected>Title</option>";
								echo "<option value='detail' $detailselected>Detail</option>";
								echo "<option value='time' $timeselected>Time</option>";
								echo "</select></td><td><select name='order'>";
								echo "<option value='ASC' $ASCselected>ASC</option>";
								echo "<option value='DESC' $DESCselected>DESC</option>";
								echo "</select></td>";

							}

						?>

					</form>

						<?php

							if ($page == "userform") {
								
								echo "<form action='addfav.php' method='GET'>";
								echo "<td><button type='submit' name='pageno' value='pageno'>Fav</button></td>";
								echo "</form>";

							}
						?>

				</tr>
			</table>
		</div>
</div>
</body>
</html>