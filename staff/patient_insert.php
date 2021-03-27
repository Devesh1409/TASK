<?php 
include 'dbcon.php';
if (isset($_POST['submit'])) 
{
	echo $a =$_POST['name'];
	echo $b =$_POST['phone_number'];
	echo $c =$_POST['age'];


	$data ="INSERT INTO patient(name,phone_number,age)values('$a','$b','$c')";
	$result =mysqli_query($con,$data);
}

?>