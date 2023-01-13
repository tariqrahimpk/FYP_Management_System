<?php
  include("includes/header.php"); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>display data</title>

	<link rel="stylesheet" href="table.css">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
    body{
      background-color: rgb(173, 216, 230);
    }
	
   div.card-header{
    background-color: gray;
   }
	</style>
</head>

<body>
 <div class="row">
            <div class="col-md-3">
       <?php include('includes/sidebar2.php'); ?>
    </div>
    <div class="col-sm-8">
<div class="container">
  <div class="card-header">
          <h3>Delete / Update Records</h3>
        </div>
  <table class="table table-fixed">
    <thead>
      <tr>
      	  <th class="col-xs-6">id</th>
        <th class="col-xs-3">Student Name</th>
        <th class="col-xs-3">Student Reg</th>
         <th class="col-xs-6">Project Name</th>
        <th class="col-xs-6">Supervisor</th>
       
         <th class="col-xs-6"  style="text-align: center;" colspan="2">Operation</th>
      </tr>
    </thead>
    <tbody>
    	    <?php
              include 'config.php';
               include ("configg.php");
     error_reporting(0);
     $query="SELECT * FROM stud_reg";
     $data=mysqli_query($con,$query);
     $total=mysqli_num_rows($data);
         if($total!=0)
     {
      

              while ($result=mysqli_fetch_assoc($data)) {
        # code...

                      
                  echo "
        <tr>
        <td>".$result['stud_id']."</td>
        <td>".$result['student_name']."</td>
        <td>".$result['student_reg']."</td>
        <td>".$result['project_name']."</td>
        <td>".$result['supervison_name']."</td>
        <td><a href='update.php?rn=$result[stud_id]&sn=$result[student_name]&sr=$result[student_reg]&pn=$result[project_name]
        &sp=$result[supervison_name]'>Update</td>
        <td><a href='delete.php?rn=$result[stud_id]'>Delete</td>  
        </tr>
        ";
      }

     }

  ?>

    </tbody>
  </table>
  <script>
    function checkdelete()
    {
      return Confirm('are you want to detele this record');
    }
  </script>
</div>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>

