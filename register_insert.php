<?php 
include 'dbcon.php';
if (isset($_POST['submit'])) 
{
	echo $a =$_POST['name'];
	echo $b =$_POST['email'];
	echo $c =$_POST['password'];
	echo $d =$_POST['role'];

	$data ="INSERT INTO user(name,email,password,role)values('$a','$b','$c','$d')";
	$result =mysqli_query($con,$data);
}



?>