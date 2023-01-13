
<?php
  include("includes/header.php"); 
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/admin.css">

<style>
 body{
  background-color: rgb(173, 216, 230);
 }

  </style>
  <style>
img {
 
  margin-left: auto;
  margin-right: auto;
}
.signup-section{
padding:0.05rem 1rem;
}
</style>
</head>
<body>
    <div class="row">
            <div class="col-md-4">
       <?php include('includes/sidebar.php'); ?>
    </div>

  <div class="col-md-6">
    <div class="container">
    <div class="Login_form">
     <div class="card-header">
          <h3>Student Login</h3>
        </div>
    <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control"style="border-radius: 6px;">
  </div>
  <div class="form-group"id="show_hide_password">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control " style="border-radius: 6px;" >
    <div class="input-group-addon">
        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
      </div>
  </div>
  <button type="submit" name="login" class="btn btn-primary form_btn" > Login</button>
  <br><br><br><br>
<div>
</div>
<div class="signup-section">
Not yet Register?<a href="reg.php" class="text-info">signup</a>.</div>
</div>
</div>
</form>
</div>
  </div>


  <div class="col-sm-4"></div>



</body>

<?php
include("config.php");  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=md5($_POST['password']); 
    $sel="select * from students where std_email='$user_email' AND std_password='$user_pass'"; 
    
    
    $res=mysqli_query($mysqli,$sel);
    $num=mysqli_num_rows($res);
    if($num >=1) {
    $result=mysqli_fetch_array($res);
    $_SESSION['std_id'] = $result['std_id'];
    $_SESSION['std_name'] = $result['std_name'];
    $_SESSION['logged_in'] = true;
    header("location:studentMain1.php");
   }
else
{


echo "<font color=\"red\"><b><center>Invalid Username and Password</center></b></font>";
}
  
}  

?>
<script>
$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>