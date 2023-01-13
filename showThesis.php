<?php
session_start();
  include("includes/header.php"); 
  include("config.php");  
  $sup_id = $_SESSION['id'];
  $select="select * from store_thesis inner join students on store_thesis.std_id=students.std_id where sup_id = '$sup_id'";
  $execute=mysqli_query($mysqli,$select);
    
 
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
            <div class="col-md-4">
      
<!--code for vertical navbar-->
       
      
     

      <?php include("includes/supSidebar.php");  ?>

      
    </div>

    <!--code for index backgroung design-->
    <div class="col-md-8">
      <div class="container">

    <table class="table table-fixed" id="styled-table" >
	<div class="card-header" style="background-color:gray;">
          <h4>uploaded Thesis</h4>
        </div>
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Student Name</th>
      <th scope="col">Project Name</th>
      <th scope="col">Other Grp Member</th>
      <th scope="col">File </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
     $a=1;

       while($record=mysqli_fetch_assoc($execute)) { ?>
    

    <tr>
      <th scope="row"><?php echo $a;  ?></th>
      <td><?php echo $record['std_name'] ?></td>
      <td><?php echo $record['project_name'] ?></td>
      <td><?php echo $record['project_description'] ?></td>

      <td><i class="fa fa-file-archive-o"> <?php echo $record['project_file']?></i></td>

      <td><a href="download.php?file=<?php echo urlencode($record['project_file']); ?>" class="btn btn-primary">Download</a></td>
    </tr>
   
    <?php $a++; }?>
    
    
  </tbody>
</table></div>
</div>

    


  </div>


</html>