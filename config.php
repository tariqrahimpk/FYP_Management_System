<?php

$databaseHost='localhost';
$databaseName='database';
$databaseUsername='root';
$databasePassword='';
$mysqli=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(empty($mysqli)){
	echo "database are not connected!";
}else{
	echo "";
}
?>




