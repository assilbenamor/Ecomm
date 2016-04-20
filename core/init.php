<?php 
$db = mysqli_connect('127.0.0.1','root','','mydatabase') ;
if (mysqli_connect_errno()) {
	echo 'Database connection ! details :' . mysqli.connect_error();
	die();
}

 ?>