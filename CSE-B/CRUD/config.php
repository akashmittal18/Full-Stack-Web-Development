<?php
$hostName='localhost';
$userName='root';
$password='';
$databaseName='cseb';

$conn=mysqli_connect($hostName,$userName,$password,$databaseName);
	if($conn)
	{
	echo "connection succesfull";
	'<br>';
}
else
{
	echo "connection_failed"+
	 mysqli_connect_error();
}
?>