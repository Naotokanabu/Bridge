<html>
<head>
    <meta charset="utf-8" />
   <link rel="stylesheet" href="../CSS/Mail.css">
</head>
<body>
    <div class = mail>
      <p>Mail Form</p><br><br>
      <form action="Mail_back.php" method="post">
        <p>If you foget your password,plese send your name and email</p><br><br><br>
      <input type="text" name="name" size="40" maxlength='20' pattern="^[1-9A-Za-z]+$" placeholder='please put your name' required size="40"><br><br><br><br>
      <input type="text" name="email" size="40" maxlength='25' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder='please put your email' required size="40"><br><br><br>
      <input type="submit" name="send" value="send">
      </form>
   </div>
 </body>
</html>