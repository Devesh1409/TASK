<?php 
include 'dbcon.php';
if (isset($_POST['submit'])) 
{
	echo $a =$_POST['branch_name'];
	echo $b =$_POST['patient_amount'];
	
	$data ="INSERT INTO branch(branch_name,patient_amount)values('$a','$b')";
	$result =mysqli_query($con,$data);
}

?>