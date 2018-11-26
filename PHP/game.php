<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php

// for($i=0; $i<=70; $i++){
//     echo"<br>";
//     if($i >= 10){
//     	echo"<span style = 'color:red'>$i</span>";
//     }elseif($i <= 9){
//         echo"<span style= 'color:black'>$i</span>";
// }	    
// }


// $cars = array("Toyota","Nissan","Honda");
// echo"I like".$cars[0].",".$cars[1]."and".$cars[2].".";

function  cheker($number){
   if($number%2== 0){
   	echo"This is even number";
   }else{
   	echo"This is odd number";
   }
}

cheker(4);
?>

</body>
</html>