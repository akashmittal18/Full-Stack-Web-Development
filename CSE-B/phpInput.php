<?php
include('config.php');
include_once('config.php');
require('config.php');
require_once('config.php');
?>
<?php
if (isset($_POST['btn'])){ 
echo "Dear, ".$_POST['username']."you details are".'<br>'; 
echo $_POST['id'].'<>br';
echo $_POST['username'].'<>br';
echo $_POST['age'].'<>br';
echo $_POST['contact'].'<>br';
echo $_POST['email'].'<>br';
}
else{
	echo "welcome Guest";
}

?>
<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="phpInput.php" method="get">
    	ID: <input name="id",type="text"
    	placeholder="Enter ID"><br>
      Name: <input type="text" name="username"><br>
      age:<input type="text" name="age"
      placeholder="Enter age"><br>
      contact:<input type="text" name="contact"
      placeholder="enter contact"><br>
      <input type="submit" name='btn'>
    </form>
    </body>


</html>