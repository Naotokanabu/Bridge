<!DOCTYPE html>
<html>
<head>
 <h1>MY first PHP pae</h1>
</head>
<body>
 <?php
 


function checker($number){
   if ($number%2 == 0) {
   	echo "This is EVEN number";
   }else{
    echo"This is ODD number";
   }
}
checker(3);



function checker2($chalacter){
       if($chalacter == strrev("$chalacter")){
        echo "THis is Palindrome";
       }else{
        echo "THis is not Palindrome";
       }
}
checker2("hih");


?>	

</body>
</html>