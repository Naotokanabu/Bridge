<?php session_start();?>
<?php include 'dbconnect.php'; ?>

<?php

	// 扱いが面倒なので関数の入れ替え
	$ID = $_POST["ID"];
	$password = $_POST["password"];
	$Adminchecked = $_POST["admin"];
	$IDcheck = 0;
	$passwordcheck = 0;

	// IDがデータベースにあるかチェック　あればIDcheck=1を返す
	$sql = "SELECT * FROM Personal";
	$result = $conn->query($sql);

	while ($row = $result ->fetch_assoc()) {
		// echo $row["ID"] . "<br>";
		// echo "$Admin";
		if ($row["ID"] == $_POST["ID"]) {
			echo "ID is correct<br>";
			$IDcheck = 1;

			if ($row["Admin"] == 1 && $Adminchecked == "checked") {

				$Admin = $row["Admin"];

			}

			break;

		}

	}

	// IDに紐付いたパスワードと入力されたパスワードをチェック　一致していれば$passwordcheck=1を返す
	$sql = "SELECT password FROM Personal WHERE ID ='$ID'";
	$result = $conn->query($sql);
	$sql = $result->fetch_assoc()["password"];
	// var_dump($sql);
	if ($sql === $password) {

		echo "Password is correct<br>";
		$passwordcheck = 1;

	}

	// IDがデータベースに存在し、かつパスワードが一致していれば、IDを持ち込んでログイン
	// そうでなければ$_SESSION["check"]=1を返し、ログインページへ
	if ($IDcheck == 1 && $passwordcheck == 1) {
		// 一緒にnumberも送ったほうが楽かも
		$_SESSION["ID"] = $_POST["ID"];
		// $ID = $_SESSION["ID"];
		// echo "$ID";

		if ($Admin == 1) {

			echo "You are also Admin.<br>";
			$_SESSION["admin"] = $Admin;
			header("Location:Admin/adminhome.php");
			exit();

		}

		echo "You are User.";
		header("Location:User/userhome.php");

	}

	else{

		$_SESSION["check"] = 1;
		header("Location:login.php");

	}

?>