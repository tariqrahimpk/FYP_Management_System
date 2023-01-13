<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
      
      $server="localhost";
      $username="root";
      $password="";
      $db="std_record";
  $conn=    mysqli_connect($server,$username,$password,$db);
  if($conn)
  {
  	echo "sucess";

  }
else
{
	echo "connection failed";
}


	  ?>

</body>
</html>