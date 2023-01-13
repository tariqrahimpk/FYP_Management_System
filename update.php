<?php
  include("includes/header.php"); 

?>
<?php
include ("configg.php");
error_reporting(0);
 $rn=$_GET['rn'];
 $sn=$_GET['sn'];
$sr=$_GET['sr'];
$pn=$_GET['pn'];
$sp=$_GET['sp'];

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body{
  background-color: rgb(173, 216, 230);
}</style>
</head>
<body>
   <div class="row">
            <div class="col-md-3">
       <?php include('includes/sidebar2.php'); ?>
    </div>
    <div class="col-sm-8">

	<div class="card py-2">
        <div class="card-header">
          <h3>Update Records</h3>
        </div>
      <div class="card-body">
        <form  action="" method="GET">
        <div class="multi_student_row">
          <div class="row">
          	<div class="col-md-6">
              <div class="form-group">
                <label for="">Student id</label>
                <input type="id" class="form-control" name="student_id" id="student_id" value="<?php echo($rn); ?>"  required>
              </div>
           </div>  
           <div class="col-md-6">
              <div class="form-group">
                <label for="">Student Name</label>
                <input type="text" class="form-control" name="student_name" id="student_name" value="<?php echo($sn); ?>"  required>
              </div>
           </div>  
           <div class="col-md-6">
             <div class="form-group">
              <label for="">Student Reg</label>
              <input type="text" class="form-control" name="student_reg" id="student_reg" value="<?php echo($sr); ?>"  required="">
             </div>
           </div>  
            <div class="col-md-6">
             <div class="form-group">
              <label for="">Project Name</label>
              <input type="text" class="form-control" name="project_name" id="project_name" value="<?php echo($pn); ?>" required>
             </div>
           </div>  
            <div class="col-md-6">
             <div class="form-group">
              <label for="">Supervisor Name</label>
              <input type="text" class="form-control" name="supervison_name" id="supervison_name" value="<?php echo($sp); ?>" required>
             </div>
           </div>  
          </div>
          </div>
        	
          <input type="submit" name="submit" value="update">
        </form>
      </div>
      </div>
</div>
</body>
</html>


<?php
  if($_GET['submit'])
  {
  	$student_id=$_GET['student_id'];
  	$student_name= $_GET['student_name'];
  	$student_reg= $_GET['student_reg'];
  	$project_name=$_GET['project_name'];
  	$supervison_name=$_GET['supervison_name'];

  	$query="update  stud_reg set  student_name='$student_name', student_reg='$student_reg', project_name='$project_name', supervison_name='$supervison_name' where stud_id='$student_id'   ";
  	$data=mysqli_query($con,$query);

if($data)
{
	
  ?>
   <div class="alert alert-success" role="alert" style="text-align:center;">
  Updated Successfully</div>
  <meta http-equiv="refresh" content="2; URL=http://localhost/project1/adminManage.php" />
	
	
	<?php
}

else{
  echo "not updated";
}
	
}
?>