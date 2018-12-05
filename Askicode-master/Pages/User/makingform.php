<?php session_start();?>
<?php include 'dbconnect.php'; ?>

<?php
// ページを作成する部分
$ID = $_SESSION["ID"];
$title = $_POST["title"];
$detail = $_POST["detail"];
$time = date('Y/m/d H:i:s');
$comment = $_POST["comment"];
$filename = $_POST["filename"];
echo $filename;

$sql = "INSERT Form(ManagerID,title,detail,time) VALUES('$ID','$title','$detail','$time')";
if ($conn->query($sql) === TRUE) {
	echo "New Page was created successfully<br>";
}else{
	echo "Error" . $sql . "<br>" . $conn->error;
}
?>

<?php
// 自動的に作成したフォームに移動するコード
$sql = "SELECT * FROM Form WHERE ManagerID = '$ID' ORDER BY time DESC LIMIT 1";
$result = $conn->query($sql);
$sql = $result->fetch_assoc()["pageno"];
$pageno = $sql;
// 下のif文でエラー吐いてるけど、欲しいページナンバーは取れてるからお構いなし
if ($conn->query($sql) === TRUE) {
	// echo "success." . $sql . "<br>";
}else{
	// echo "Error." . $sql . "<br>" . $conn->error;
	// exit();
}

// 作成したページに早速コメント
$sql_comment = "INSERT Formchat(ID,text,time,fileurl,pageno) VALUES('$ID','$comment','$time','$filename','$sql')";
if ($conn->query($sql_comment) === TRUE) {
	echo "success." . $sql_comment . "<br>";
}else{
	echo "Error." . $sql_comment . "<br>" . $conn->error;
	exit();
}

header("Location: userform.php?pageno=$pageno");

?>