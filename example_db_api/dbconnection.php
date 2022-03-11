<?php
function dbconnection(){
	
$con = mysqli_connect("localhost","root","","example_db");

if($con){
	
	return $con;
	
}else{
	
echo "Connection False";
}
}




?>