<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<?php include 'dbconnect.php';?>
<?php $page = "editpage";?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/userpage.css">
	<link rel="stylesheet" href="../../css/editcode.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>Edit code | Askicode</title>
</head>
<body>
<?php include 'menubar.php'; ?>
<div class="header" style="background-image: url(../../CSS/CSSimg/joel-filipe-195321-unsplash.jpg); background-position: bottom;">

	<?php include 'searchbar.php';?>

</div>

<?php

	$ID = $_SESSION["ID"];
	$filename = $_POST["filename"];

?>

<script type="text/javascript">
<!--

function disp(){

	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
	if(window.confirm('Are you sure?')){

		location.href = "makecode.php"; // example_confirm.html へジャンプ

	}
	// 「OK」時の処理終了

	// 「キャンセル」時の処理開始
	else{

		window.alert('Canceled.'); // 警告ダイアログを表示

	}
	// 「キャンセル」時の処理終了

}

	function download(filename, text) {

	  var filename = document.getElementById('filename').value;
	  var text = document.getElementById('code').value;
	  var pom = document.createElement('a');
	  pom.setAttribute('href', 'data:text/plain;charset=utf-8,' + 

	encodeURIComponent(text));
	  pom.setAttribute('download', filename);

	  pom.style.display = 'none';
	  document.body.appendChild(pom);

	  pom.click();

	  document.body.removeChild(pom);



	 }

// -->
</script>

<form action="addmycode.php" method="POST">

<div class="titlebar">

<table class="titleformtable">
		<tr>
			<td class="titleformtd"><input type="text" name="title" placeholder="Write title" value="<?php echo $filename;?>" id="filename" class="titleform"></td>
			<td><input type="submit" value="save"></td>
			<td><input type="button" value="reset" onclick="disp()"></td>
			<td><input type="button" value="Download" onclick="download()"></td>
		</tr>
</table>

</div>

<div class="textareadiv">

<textarea class="textarea" id="code" name="code" cols="150" rows="10" placeholder="Write your code"><?php readfile("../../userdata/codes/" . $ID . "-" . $filename . ".txt"); ?></textarea>

</div>

<?php

	$editcode = $_POST["editcode"];

?>

<input type="hidden" name="editcode" value="<?php echo $editcode ;?>">

</form>

</body>
</html>

