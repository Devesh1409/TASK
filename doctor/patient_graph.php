<?php session_start();?>
<?php include 'header.php';?><br><br>
<body style="background-image: url(../upload/9.jpg);
background-size: cover;">
<div class ="container"><br><br>
    <center><h1>DOCTOR PROFILE</h1></center><br>
<table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name of Patient</th>
            <th>Date</th>
        
    </tr>
         
         <?php   
          $i =1;
          include "dbcon.php";
          $data = "SELECT * FROM patient ";
          $result = mysqli_query($con,$data);
          while ($a = mysqli_fetch_array($result)) 
          {
          ?> 


          
        <tr>
           <td><?php echo $i++; ?></td>
           <td><?php echo $a['name'] ?></td>
           <td><?php echo $a['created_at']?></td>
         <?php } ?>
     <!--    show.php?id=1 -->
       
        
        </tr>
    </table>
</div>