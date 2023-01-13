<?php
  include("includes/header.php"); 

  include("configg.php");  
       
       if(isset($_POST['submit'])){

          $studName = $_POST['student_name'];
          $studReg = $_POST['student_reg'];
          $projectName = $_POST['project_name'];
          $supervisonName = $_POST['supervison_name'];
       
       foreach ($studName as $index => $value) {
        $_name      = $value;
        $_studReg     = $studReg[$index];
        $_projectName = $projectName[$index];
        $_superName   = $supervisonName[$index];

        $sql="INSERT INTO stud_reg (student_name, student_reg, project_name,supervison_name) values('$_name','$_studReg','$_projectName','$_superName') ";
        $data=mysqli_query($con,$sql);
       }
       if($data){
        $_SESSION['msg']='Project has been assign successfully';
    $_SESSION['col']='success';


       }
       }?>


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
<link rel="stylesheet" type="text/css" href="admin.css">

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
</style>
</head>
  <body>
    <div class="row">
            <div class="col-md-2">
       
    </div>
    <div class="col-md-8">

      <div class="card py-2">
        <div class="card-header">
          <h3>Assign Project</h3>
        </div>
      <div class="card-body">
        <form  action='<?php $_SERVER['SCRIPT_NAME']; ?>' method="POST">
        <div class="multi_student_row">
          <div class="row">
           <div class="col-md-6">
              <div class="form-group">
                <label for="">Student Name</label>
                <input type="text" class="form-control" name="student_name[]" id="student_name" placeholder="Student Name" required>
              </div>
           </div>  
           <div class="col-md-6">
             <div class="form-group">
              <label for="">Student Reg</label>
              <input type="text" class="form-control" name="student_reg[]" id="student_reg" placeholder="Student Reg" required="">
             </div>
           </div>  
            <div class="col-md-6">
             <div class="form-group">
              <label for="">Project Name</label>
              <input type="text" class="form-control" name="project_name[]" id="project_name" placeholder="Project Name" required>
             </div>
           </div>  
            <div class="col-md-6">
             <div class="form-group">
              <label for="">Supervisor Name</label>
              <input type="text" class="form-control" name="supervison_name[]" id="supervison_name" placeholder="Supervisor Name" required>
             </div>
           </div>  
          </div>
          </div>
        	<div class="text-primary form-group add_more_student ">Add More Student</div>
          <button type="submit" name="submit" class="btn btn-sm btn-primary pull-right">Student Reg</button>
        </form>
      </div>
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

  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script>
     	var stduentcount = 1;
     	$(document).ready(function(){
     		stduentcount++;
        $('.add_more_student').click(function(){
          $('.multi_student_row').append(' <div class="card testing py-2"><div class="card-header"> <h3>Student Reg</h3></div><div class="card-body"><div class="row"><div class="col-md-6"><div class="form-group"><label for="">Student Name</label><input type="text" class="form-control" name="student_name[]" id="student_name" placeholder="Student Name"></div></div><div class="col-md-6"><div class="form-group"><label for="">Student Reg</label><input type="text" class="form-control" name="student_reg[]" id="student_reg" placeholder="Student Reg"></div></div><div class="col-md-6"><div class="form-group"><label for="">Project Name</label><input type="text" class="form-control" name="project_name[]" id="project_name" placeholder="Project Name"></div></div><div class="col-md-6"><div class="form-group"><label for="">Supervisor Name</label><input type="text" class="form-control" name="supervison_name[]" id="supervison_name" placeholder="Supervisor Name"></div></div></div></div><span class="btn btn-danger remove">Remove</span></div>');
        });
     });


     $(document).on('click', '.remove', function(){
     	$(this).parent('.testing').remove();
     });
     
    </script>
