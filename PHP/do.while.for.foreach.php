<!DOCTYPE html>
<html>
<head>
 <h1>MY first PHP pae</h1>
</head>
<body>
<?php
$x = 1;

while($x <= 7){
echo "The number is :$x<br>";
$x++;
}
?>
<br>
<?php
$x = 1;

do{
	echo"The number is:$x <br>";
	$x++;
}while($x <= 7);
?>
<br>
<?php
for ($x = 0; $x<= 7; $x++){
	echo"The number is:$x <br>";
}
?>
<br>
<?php
$colors = array("red","green","blue","yellow");

foreach($colors as $value){
	echo"$value<br>";
}
?>
<br>
<!-- <?php
$x = 1;

// while($x <= 10){
// 	echo"-$x";
// 	$x++;
// 	if($x==1)
// 	echo("")
// }
?> -->


</body>
</html>