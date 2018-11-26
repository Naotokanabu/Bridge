<!DOCTYPE html>
<html>
<head>
 <h1>MY first PHP pae</h1>
</head>
<body>
<?php
$cars =array("Matuda","Toyota","Nissan");
echo"I like ".$cars[0],",".$cars[1]," and ",$cars[2].".";
?>
<br>
<?php
$arrlength = count($cars);
sort($cars);
for($x = 0; $x < $arrlength; $x++){
	echo $cars[$x];
	echo "<br>";
}
?>
<br>
<?php

$number =array("10","17","22","2","7","1","11");
$arrlength	= count($number);
sort($number);
for($x = 0; $x < $arrlength; $x++){
	echo $number[$x];
	echo"<br>";
}
?>
<?php

$number =array("10","17","2","7","1","11");
$arrlength	= count($number);
rsort($number);
for($x = 0; $x < $arrlength; $x++){
	echo $number[$x];
	echo"<br>";
}
?>

<!-- 
<?php
sort($cars);
?>

 -->

</body>
</html>