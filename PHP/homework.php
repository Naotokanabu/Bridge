<!DOCTYPE html>
<html>
<head>
 <h1>MY first PHP pae</h1>
 <link rel="stylesheet" href="../css/3.2.css">

</head>
<body>
<?php
echo"<table>";
for($i=1; $i<=4; $i++){
	echo"<tr>";
	for($j=1; $j <=4; $j++){
		echo"<td bgcolor = 'white'></td>";
	    echo"<td bgcolor = 'black'></td>";
	    if($j==4){
	    	echo"</tr>";
	    }
	}
	    for($k=1; $k <=4 ; $k++){
	    	echo"<td bgcolor = 'black'></td>";
	    	echo"<td bgcolor = 'white'></td>";
            if($k==4){
            	echo"</tr>";
            }
	    }
}
echo"</table>";
?>
<br>
<?php

for($i=1; $i <=5; $i++){
	for($k=1; $i>=$k ;$k++){
	 echo"*";
	}
     echo"<br>";
}

for($i=1; $i <=4; $i++){
	for($k=1; 5-$i>=$k ;$k++){
	 echo"*";
	}
     echo"<br>";
	# code...
}
?>

</body>
</html>