<?php
session_start();
  include("includes/header.php"); 
   include("config.php");

?>
<!DOCTYPE html>
<html>
<head>
  <title>Fyp Managment System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
 body{
  background-color: rgb(173, 216, 230);
 }
  li a{
    color: white;
  }
 ul{
  border-radius: 10px;
  
 }
  a:hover{
    background-color: rgb(0, 191, 255);
  }
.card-header{
  background-color: gray;
}
  </style>

</head>

<body>
<div class="row">
            <div class="col-md-4">
      
<!--code for vertical navbar-->
       
      
     

      <div class="w-75 p-0 ">
<ul class="nav flex-column " style="background-color:rgb(0, 128, 128); border-radius: 6px;" >

    
  <li class="nav-item py-md-1">
  <a class="nav-link" href="uploadThesis.php" ><i class="fa fa-file-code-o" style="font-size:24px"></i> Upload Progress
        
    </a>

      

 
  <li class="nav-item py-md-1">

    <a class="nav-link active" href="#" ><i class="fa fa-fw fa-envelope"style="font-size: 20px";></i> Email to supervisor </a >
  </li>
   <li class="nav-item py-md-1">
  <a class="nav-link" href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true" style="font-size:24px"></i> Log Out
        
    </a>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</ul>
</div>

      
    </div>

<div class="col-md-4">
  <div class="card-header">
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
   
    <textarea required="" name="desc" cols="60" rows="6" placeholder="Project Decsription" style="margin-top:20px;"></textarea>
    
  

  <div class="row" style="margin-top:20px;">
    <div class="col">
      <input required type="file" name="image" class="form-control">
    </div>
</div>

<div class="row btn btn-primary form_btn" style="margin-top:20px;margin-left:3px;">
    <div class="col" >
      <input type="submit" class="form-control" name="submit" >
    </div>
        </div>

</form>
</div>
</div>
    </div>
  </body>
<?php

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
    move_uploaded_file($filetmp,"$upload/$filename"); ?>
     <div class="alert alert-success" role="alert" >
<p style="text-align: center;" >Sucessfully Inserted</p>
</div>
<?php
  }
  
}


?>


        

    



</html>