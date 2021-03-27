<?php session_start();?>
<?php include 'header.php';?><br><br>
<body style="background-image: url(../upload/9.jpg);
background-size: cover;">
<div class ="container"><br><br>
	<center><h1>Admin Profile</h1></center><br>
  <a href="doctor.php" class="btn btn-info btn2 float-sm-right">CREATE DOCTOR</a><br><br>
<table class="table table-bordered">
		<tr>
        <th>#</th>
  			<th>Name</th>
  			<th>Email</th>
  			<th>Phone</th>
		    <th>Role</th>
		    <th>Date</th>
        
	</tr>
         
         <?php   
          include "dbcon.php";
          $id = $_SESSION['u_id'];
          $data = "SELECT * FROM user WHERE u_id = $id";
          $result = mysqli_query($con,$data);
          while ($a = mysqli_fetch_array($result)) 
          {
          ?> 


          
        <tr>
           <td><?php echo $a['u_id'] ?></td>
           <td><?php echo $a['name'] ?></td>
		   <td><?php echo $a['email'] ?></td>
		   <td><?php echo $a['phone_number'] ?></td>
           <td><?php echo $a['role']?></td>
           <td><?php echo $a['created_at']?></td>
          
     
         <?php } ?>
     <!--    show.php?id=1 -->
       
        
        </tr>
	</table>
</div>