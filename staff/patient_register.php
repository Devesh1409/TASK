<?php include 'header.php';?>
<body class="hold-transition login-page "style="background-image: url(upload/4.jpg);
background-size: cover;">
<div class="login-box"><br><br>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary card1">
    <div class="card-header text-center">
      <a href="index2.html" class="h1"><b> PATIENT REGISTRATIONS</b></a>
    </div>
   <div class="card-body">
     <form  method="post" action="patient_insert.php">
      	<div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
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
          <input type="number" name="age" class="form-control" placeholder="Age">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="submit" name="submit"  value="Submit" class="btn btn-info ">
            </div>
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
      </form>
<?php include 'footer.php';?>