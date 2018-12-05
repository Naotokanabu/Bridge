<?php session_start();?>
<?php ini_set('display_errors',"Off");?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../css/userpage.css">
	<link rel="stylesheet" href="../../css/makecode.css">
	<link rel="icon" type="image/x-icon" href="../../css/CSSimg/Askicodeicon.png">
	<title>Make code | Askicode</title>
</head>
<body>
<?php include 'menubar.php'; ?>
<div class="header" style="background-image: url(../../CSS/CSSimg/pereanu-sebastian-643348-unsplash.jpg); background-position: center;">

	<?php include 'searchbar.php';?>

</div>

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

<!-- onsubmitをdownloadを押したときだけ実行させたい -->
<form action="addmycode.php" method="POST" >

<div class="titlebar">

<table class="titleformtable">
		<tr>
			<td class="titleformtd"><input type="text" name="title" placeholder="Write title within 50 letters" value="" id="filename" class="titleform" maxlength="50"></td>
			<td><input type="submit" value="save"></td>
			<td><input type="button" value="reset" onclick="disp()"></td>
			<td><input type="button" value="Download" onclick="download()"></td>
		</tr>
</table>

</div>

<div class="textareadiv">

<textarea class="textarea" id="code" name="code" cols="150" rows="10" placeholder="Write your code"></textarea>

</div>

</form>
</body>
</html>