<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>
<?php
include ("configg.php");
error_reporting(0);
$id=$_GET['rn'];
$query="DELETE FROM stud_reg where stud_id= '$id'";
$data=mysqli_query($con,$query);
if($data)
{
	

	?>
	<div class="alert alert-success" role="alert">
  Deleted successfully
</div>
	<meta http-equiv="refresh" content="1; URL=http://localhost/project1/adminManage.php" />

	<?php
	
}

else
	echo "not Deleted";

?>