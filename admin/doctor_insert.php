<?php 
include 'dbcon.php';
if (isset($_POST['submit']))
{
	$a =$_POST['name'];
	$b =$_POST['email'];
	$c =$_POST['password'];
    $d =$_POST['phone_number'];
	$e =$_POST['role'];

	$data ="INSERT INTO user(name,email,password,phone_number,role)values('$a','$b','$c','$d','$e')";
	$result =mysqli_query($con,$data);
}   