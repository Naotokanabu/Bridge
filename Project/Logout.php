<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<maa charset="UTF=8">
   <link rel="stylesheet" href="../CSS/Logout.css">
   <title>Logout</title>
</head>
<body>
 <div id = main>
	 <div id = title>Thank you</div>
	 <p>We look forward to seeing you again</p>
   </div>
</body>
</html>