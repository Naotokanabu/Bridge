<?php
session_start();

include 'dbconect.php';

if (isset($_POST['exsperience']) && is_array($_POST['exsperience'])) {
    $exsperience = implode("、", $_POST["exsperience"]);
}

$password        = $_POST["password"];
$name            = $_POST["name"];
$email           = $_POST["email"];
$country         = $_POST["places"];
// $exsperience     = $_POST["exsperience"];
// var_dump($country);
//I can get info


if (isset($_POST['exsperience']) && is_array($_POST['exsperience'])) {
    $_session["exsperience"] = implode("、", $_POST["exsperience"]);
}

$_session["name"]         = $_POST["name"];
$_session["country"]      = $_POST["places"];
$_session["email"]        = $_POST["email"];
// var_dump($_session["country"]);
// var_dump($_session["exsperience"]);
// var_dump($_session["email"]);

// $sql = "INSERT INTO project (password,name,country,exsperience,email)
// VALUES ('$password','$name','$country','$exsperience','$email')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$sql = "SELECT * FROM project WHERE password ";
$project = $conn->query($sql);

if(count($project) > 0){
  $row = $project->fetch_assoc();
    if($password == $row['password']  ){
        echo"false";
        header('Location:Register.php');
        }else{
         echo"sccess";
            if (isset($_POST['exsperience']) && is_array($_POST['exsperience'])) {
                  $exsperience = implode("、", $_POST["exsperience"]);

                  $sql = "INSERT INTO project (password,name,country,exsperience,email) 
                          VALUES ('$password','$name','$country','$exsperience','$email')";

                        if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }
}
?>
<!-- and $name == $row['name'] actually I wanna do password and name -->

<?php
header('Location: Login.php');
?>  