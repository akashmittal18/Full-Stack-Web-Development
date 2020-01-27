<?php
include('configure.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title> INPUT FORM</title>
</head>
<body>
 <form action="details.php" method="post">
  ID: <input type="text" name="id" placeholder="enter id"><br>
  Name: <input type="text" name="username" placeholder="enter name"><br>
  Age:<input type="text" name="age" placeholder="enter age"><br>
  Contact:<input type="text" name="contact" placeholder="enter contact"><br>
  Email:<input type="text" name="email" placeholder="enter the email"><br>
  <br>
  <input type="submit" name="btn">
 </form>
</body>
</html>