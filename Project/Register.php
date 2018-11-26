<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<!-- <maa charset="UTF=8"> -->
<link rel="stylesheet" href="../CSS/Register.css">
</head>
<body>

<form action ="Register_back.php" method ="POST">
	<div id =main>
	  <div id =profile>Profile</div>
	   <p>Password</p>
			  <input type="int" name="password" size="40"> 
	   <p>Name</p>
		      <input type="text" name="name" size="40">
		<p>Email</p>
			  <input type="text" name="email" size="40"><br><br><br>
<?php 
echo "Country"."<br>";
if(isset($_POST['places'])) {  
  //$_POST['places']がすでに定義されている（値が送信されている）場合
  echo htmlspecialchars($_POST['places'], ENT_QUOTES, 'UTF-8');
}
?><br>
 <!-- country -->
<!-- <form method="post" action="" class="form_sample"> -->
<select name="places" size="1">
  <option value="North_america">North Amrica</option>
  <option value="South_america">South Amrica</option>
  <option value="Asia">Asia</option>
  <option value="Oceania">Oceania</option>
  <option value="Europe">Europe</option>Africa
  <option value="Africa">Africa</option>
</select>
<!-- <input type="submit" value="送信"> -->
<!-- </form> --><br><br>


<br>
<!-- <form method="post" action=""> -->
<input type="checkbox" name="exsperience[]" value="javascript"> javascript
<input type="checkbox" name="exsperience[]" value="python"> python
<input type="checkbox" name="exsperience[]" value="java"> java<br>
<input type="checkbox" name="exsperience[]" value="c++"> c++
<input type="checkbox" name="exsperience[]" value="c"> c
<input type="checkbox" name="exsperience[]" value="php"> php
<input type="checkbox" name="exsperience[]" value="c#"> c#
<input type="checkbox" name="exsperience[]" value="ruby"> ruby<br><br>
<!-- <input type="submit" value="送信"> -->
<!-- </form> -->

     	<input type="submit" name="send" value="send">
   </div>
  </form>

</body>
</html>