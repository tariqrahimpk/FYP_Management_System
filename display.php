v<!DOCTYPE html>
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
	<style>
		 body{
  background-color: rgb(173, 216, 230);
}
	</style>
</head>

<body>

<div class="row">
        
        <div class="col-sm-4 ">   <img src="logo13.png" height="150" width="200" alt="CoolBrand">


        </div>
        
       
       </div>  

<div class="container">
  <table class="table table-fixed">
    <thead>
      <tr>
      	  <th class="col-xs-6">id</th>
        <th class="col-xs-3">Student Name</th>
        <th class="col-xs-3">Student Reg</th>
         <th class="col-xs-6">Project Name</th>
        <th class="col-xs-6">Supervisor</th>
       
      </tr>
    </thead>
    <tbody>
    	    <?php
              include 'config.php';
          
              $Selectquery="SELECT * FROM stud_reg";
              $query=mysqli_query($mysqli,$Selectquery);
               $num=mysqli_num_rows($query);
               $data=mysqli_fetch_array($query);

               while ( $data=mysqli_fetch_array($query)) {
 	              ?>
                      
                   <tr>
                   	  <td class="col-xs-3"><?php echo $data['stud_id'];?></td>
        <td class="col-xs-3"><?php echo $data['student_name'];?></td>
        <td class="col-xs-3"><?php echo $data['student_reg'];?></td>
        <td class="col-xs-3"><?php echo $data['project_name'];?></td>
       <td class="col-xs-3"><?php echo $data['supervison_name'];?></td>
      </tr>
      <?php
              }
              ?>

    </tbody>
  </table>
</div>
</body>
</html>

