<?php
include 'dbcon.php';

if (isset($_GET['u_id'])) 
{
    $id=$_GET['u_id'];
  $i = "SELECT * FROM user WHERE u_id = $id";
  $result = mysqli_query($con,$i);

  $a = mysqli_fetch_array($result);
}

?>
<!-- update code -->
<?php

include 'dbcon.php';
if(isset($_POST['update']))
{
  echo $a= $_POST['name'];
  echo $b= $_POST['email'];
  echo $c= $_POST['password'];
  echo $d= $_POST['phone_number'];
  echo $e= $_POST['role'];
  
  $data = "UPDATE user SET name = '$a',email='$b',password='$c',phone_number='$d',role='$e' where u_id= $id";
  $Update = mysqli_query($con,$data);

  if ($Update)
  {
    header("Location:dashboard.php");//back to display
  }
}

?>
<?php include 'header.php';?>
<body class="hold-transition login-page "style="background-image: url(upload/4.jpg);
background-size: cover;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary card2">
    <div class="card-header text-center">
      <a href="index2.html" class="h1"><b>UPDATE PROFILE</b></a>
    </div>
   <div class="card-body">
     <form  method="post" >
      	<div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $a['name']?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $a['email']?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $a['password']?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="phone_number" class="form-control" placeholder="Number" value="<?php echo $a['phone_number']?>">
          <div class="input-group-append">
            <div class="input-group-text">
               <span class="fa fa-phone"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
         <select class="form-control" name="role" required="required" value="<?php echo $a['role']?>">
			    <option>Select Role</option>
			   	<option
           <?php
                         if ($a['role']=='Admin')
                          {
                          echo "selected";
                          }




                       ?>

          >Admin</option>
			   	<option
            <?php
                         if ($a['role']=='Staff')
                          {
                          echo "selected";
                          }




                       ?>
          >Staff</option>
            <option
              <?php
                         if ($a['role']=='Doctor')
                          {
                          echo "selected";
                          }




                       ?>
            >Doctor</option>
		</select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="submit" name="update"  value="update" class="btn btn-info ">
            </div>
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
      </form>
<?php include 'footer.php';?>