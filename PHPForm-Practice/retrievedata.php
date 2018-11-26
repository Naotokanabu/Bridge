<?php
 include 'dbconnect.php';
    
 $sql = "SELECT * FROM myinfo";
 $result = $conn->query($sql);
// var_dump($result);

 if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
 	  echo "Name: " . $row["name"] . "<br>";
 	  echo "Email: " . $row["email"] . "<br>";
 	  echo "Address in Japan: " . $row["jpaddress"] . "<br>";
 	  echo "About Myself: " . $row["aboutmyself"] . "<br>";
 	  echo "Gender: " . $row["gender"] . "<br><br><br>";
         }
     } else {
      echo "0 results";
     }
?>