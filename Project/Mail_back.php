<?php
session_start();
mb_language("Japanese");
mb_internal_encoding("UTF-8");

include 'dbconect.php';

$name  = $_POST["name"];
$email = $_POST["email"];
// var_dump("$name");
// var_dump("$email");
//I can get info


$sql = "SELECT * FROM project WHERE name ='$name' AND email ='$email'";
$project = $conn->query($sql);
// var_dump(count($project) > 0);
// echo "<br>";

if(count($project) > 0){
   while($row = $project->fetch_assoc()){
  // echo $row['password'];
  $content = $row['password'];
  // var_dump("$content");
  //It's working
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $to = $email;
      $title = "Password";
      $content = $content;
      if(mb_send_mail($to, $title, $content)){
        echo "メールを送信しました";
      } else {
        echo "メールの送信に失敗しました";
      };
    }
  }
?>

<!-- mail(送信先,タイトル,本文,追加ヘッダ,追加コマンドラインパラメータ) -->
<?php
header('Location: Login.php');
?> 