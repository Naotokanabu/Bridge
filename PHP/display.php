<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<body>
	<?php
	echo "Hello!" . $_SESSION["login"] . ".Nice to meet you!"."<br>";
	?>
　　</body>
</html>
