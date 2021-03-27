<?php session_start();?>
<?php include 'dbcon.php';
if (isset($_POST['submit'])) 
{
    $a = $_POST['email'];
    $b = $_POST['password'];

    $data = "SELECT * FROM user WHERE email ='$a' && password = '$b' ";
    $result = mysqli_query($con,$data);

    $total = mysqli_num_rows($result);
    $new = mysqli_fetch_array($result);
    
    if ($total==1) 
    { 
         $role = $new['role'];
         // echo $role;
        
         header("Location:admin/dashboard.php");
        if($role =='Admin')
        {
             $_SESSION['u_id']=$new['u_id'];
             $_SESSION['name']=$new['name'];

          header("Location:admin/dashboard.php");
        }
        elseif ($role =='Staff')
        {
           $_SESSION['u_id']=$new['u_id'];
           $_SESSION['name']=$new['name'];
          header("Location:staff/dashboard.php"); 
        } 
        elseif ($role =='Doctor')
        {
           $_SESSION['u_id']=$new['u_id'];
           $_SESSION['names']=$new['name'];
          header("Location:doctor/dashboard.php"); 
        } 
    }
    else
    {
      echo "<script> alert('please check your username or password')</script>";
    } 
}

?>
