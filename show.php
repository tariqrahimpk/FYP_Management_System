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
     .header {
            position: sticky;
            top:0;
        }

#styled-table{
  border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
#styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
#styled-table th,
#styled-table td {
    padding: 12px 15px;
}
#styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

#styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

#styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
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
          <h3>Projects Details</h3>
        </div>
  <table class="table table-fixed" id="styled-table"">
    <thead style="position: sticky;top: 0";>
      <tr>
      	  <th class="header" scope="col">id</th>
        <th class="header" scope="col">Student Name</th>
        <th class="header" scope="col">Student Reg</th>
         <th class="header" scope="col">Project Name</th>
        <th class="header" scope="col">Supervisor</th>
       
         
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
        </tr>
        ";
      }

     }


  ?>

    </tbody>
  </table>
</div>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>

