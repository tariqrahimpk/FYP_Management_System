<?php
  include("includes/header.php"); 
include 'config.php';
if (isset($_POST['save'])) {
    # code...
    $full_name=$_POST['full_name'];
   $email=$_POST['email'];
   $pass=($_POST['pass']);

   $sel="SELECT * FROM supervisor where sup_email='$email'";
   $sql=mysqli_query($mysqli,$sel);
   $num=mysqli_num_rows($sql);
if($num>0)
{
  $_SESSION['msg']='Email already exist';
    $_SESSION['col']='error';
   
  }

else {

 $query="INSERT INTO supervisor set sup_name='$full_name', sup_email='$email',sup_password='$pass'";
 $sql=mysqli_query($mysqli,$query);
if($sql){ 
            
        $_SESSION['msg']='User Registered Successfully';
    $_SESSION['col']='success';
      
      }
      else{
         
         $_SESSION['msg']='Insertion  process have been failed';
    $_SESSION['col']='error';
        
}

 } 
}


if (isset($_POST['save_student'])) {
  # code...
  $full_name=$_POST['full_name'];
 $email=$_POST['email'];
 $pass=md5($_POST['pass']);

 $sel="SELECT * FROM students where std_email='$email'";
 $sql=mysqli_query($mysqli,$sel);
 $num=mysqli_num_rows($sql);
if($num>0)
{
 $_SESSION['msg']='Email already exist';
    $_SESSION['col']='error'; 
  
}

else {

$query="INSERT INTO students set std_name='$full_name', std_email='$email',std_password='$pass'";
$sql=mysqli_query($mysqli,$query);
if($sql){ 
         
     $_SESSION['msg']='User Registered Successfully';
    $_SESSION['col']='success';
   
    }
    else{
       
     $_SESSION['msg']='Insertion process has been failed';
    $_SESSION['col']='error';
      
}


}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to Finance Portal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
  body{
    background-color: green;
  }
</style>
</head>
<body>
  <div class="row">
            <div class="col-md-4">
       <?php include('includes/sidebar2.php'); ?>
    </div>
    <div class="col-md-6" style="background-color: PeachPuff;>
<div class="signup-form">
  <div class="card-header">
          <h3>Student/ Supervisor Registration</h3>
        </div>
    <form action="register_user.php" method="post" enctype="multipart/form-data">
		
		
        <div class="form-group">
			<div class="row">
				<div class="col"><input required  type="text" class="form-control" name="full_name" placeholder="Full Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input required type="email" class="form-control" name="email" placeholder="Email" id="password" required="required">
        </div>
		<div class="form-group">
            <input required  type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input required  type="password" class="form-control" name="cpass" id="confirm_password" placeholder="Confirm Password" required="required">
        </div>
        <div class="row">
		<div class="col form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Submit Supervisor</button>
        </div>
        <div class="col form-group">
            <button type="submit" name="save_student" class="btn btn-success btn-lg btn-block">Submit Student</button>
        </div>
</div>
       
    </form>
	
</div>
</div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php  if(isset($_SESSION['msg']) && $_SESSION['msg'] !='') {?>
<script>swal({
  title: "<?php echo $_SESSION['msg'];?>",
  
  icon: "<?php echo $_SESSION['col']?>",
});</script>
<?php 
unset($_SESSION['msg']);
}?>
</body>
</html>





  