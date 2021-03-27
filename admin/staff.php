<?php include 'header.php';?>
<body class="hold-transition login-page "style="background-image: url(upload/4.jpg);
background-size: cover;">
<div class="login-box"><br><br>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary card">
    <div class="card-header text-center">
      <a href="staff.php" class="h1"><b>STAFF REISTRATION</b></a>
    </div>
   <div class="card-body">
     <form  method="post" action="staff_insert.php">
      	<div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="phone_number" class="form-control" placeholder="Number">
          <div class="input-group-append">
            <div class="input-group-text">
               <span class="fa fa-phone"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
         <select class="form-control" name="role" required="required">
			    <option>Select Role</option>
			   	<option>Admin</option>
			   	<option>Staff</option>
            <option>Doctor</option>
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
              <input type="submit" name="submit"  value="Sign In" class="btn btn-info ">
            </div>
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
      </form>
<?php include 'footer.php';?>