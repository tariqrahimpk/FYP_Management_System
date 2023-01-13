<?php
session_start();
include('includes/header.php');


   include("config.php");


if(isset($_POST['submit']))
{
$pro_name=$_POST['pro_name'];
$project_supervisor=$_POST['project_supervisor'];
$desc=$_POST['desc'];
$student_id = $_SESSION['std_id'];
$filename=$_FILES['image']['name'];
$filetype=$_FILES['image']['type'];
$filesize=$_FILES['image']['size'];
$filetmp=$_FILES['image']['tmp_name'];

  $upload = "file_folder";
  $query="insert into store_project set project_name='$pro_name',project_description='$desc',sup_id='$project_supervisor', project_file='$filename',std_id='$student_id'";
  $execute=mysqli_query($mysqli,$query);
  if($execute){
    move_uploaded_file($filetmp,"$upload/$filename"); 
    $_SESSION['msg']='Your file has been uploaded successfully';
    $_SESSION['col']='success';
?>
<meta http-equiv="refresh" content="3; URL=http://localhost/project1/uploadProgress.php" />

<?php
  }}
 ?>
 


<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="table.css">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
 <div class="row">
    <div class="col-md-4">
<?php 
include('includes/sidebar3.php');?>
    </div>
<div class="col-md-6" style="background-color: PeachPuff;">
       <div class="card-header" style=";">
          <h3>Upload Progress</h3>
        </div>
    <form method="POST" action="" enctype="multipart/form-data">
  <div class="row">
    <div class="col">
      <input required type="text" class="form-control" name="pro_name" placeholder="Project name">
    </div>
    
  </div>
  <div class="row" style="margin-top:20px;">
    <div class="col">
    <select required="" class="form-control" name="project_supervisor">
        <option>Please Select Supervisor</option>
        <?php
        $sel="select * from supervisor";
        $exe=mysqli_query($mysqli,$sel); 
        while($rec=mysqli_fetch_assoc($exe)) { ?>
        <option  value="<?php echo $rec['sup_id']; ?>"><?php echo $rec['sup_name']; ?></option>
       <?php }?>
</select>
    </div>
    </div>
   
    <textarea required="" name="desc" cols="79" rows="5" placeholder="Prgress Decsription" style="margin-top:20px;"></textarea>
    
  

  <div class="row" style="margin-top:20px;">
    <div class="col">
      <input required type="file" name="image" class="form-control">
    </div>
</div>

<div class="row btn btn-primary form_btn" style="margin-top:20px;margin-left:3px;">
    <div class="col" style="position:center;" >
     <button type="submit" name="submit" class="btn btn-primary form_btn" > Submit</button>
    </div>
        </div>

</form>
    </div>
<div class="col-md-4"> 
    </div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php  if(isset($_SESSION['msg']) && $_SESSION['msg'] !='') {?>
<script>swal({
  title: "<?php echo $_SESSION['msg'];?>",
  
  icon: "<?php echo $_SESSION['col']?>",
});</script>
<?php 
unset($_SESSION['msg']);
}?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



