<?php include 'header.php';?>
<div class="login-box"><br><br>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary card1">
    <div class="card-header text-center">
      <a href="branch.php" class="h1"><b> PATIENT REGISTRATIONS</b></a>
    </div>
   <div class="card-body">
     <form  method="post" action="branch_insert.php">
        <div class="input-group mb-3">
          <input type="text" name="branch_name" class="form-control" placeholder="Branch Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="patient_amount" class="form-control" placeholder="Amount per patient">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="icheck-primary">
              <input type="submit" name="submit"  value="Submit" class="btn btn-info ">
            </div>
          </div>
           <div class="row">
          <div class="col-6">
            <div class="icheck-primary">
              <a href="staff.php" class="btn btn-info btn1">CREATE STAFF</a>
            </div>
          </div>
      
          <!-- /.col -->
          <!-- /.col -->
        </div>
      </form>
<?php include 'footer.php';?>