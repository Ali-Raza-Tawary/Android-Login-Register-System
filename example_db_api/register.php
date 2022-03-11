<?php

include("dbconnection.php");
$con = dbconnection();
$arr =[];
if(isset($_GET["name"])){
	
	$name = $_GET["name"];
}else{
	
	return;
}
	if(isset($_GET["email"])){
	
	$email = $_GET["email"];
}else{
	
	return;
}
if(isset($_GET["password"])){
	
	$password = $_GET["password"];
}else{
	
	return;
}
if(isset($_GET["phone"])){
	
	$phone = $_GET["phone"];
}else{
	
	return;
}


	$query = "SELECT `uid`, `uname`, `uemail`, `upassword`, `uphone` FROM `user` WHERE uemail ='$email'";
	$result = mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)>0){
		
		$arr["success"] = "alreadyAccount";
        
		
	} else {
		
	
	
	$query = "INSERT INTO `user`(`uname`, `uemail`, `upassword`, `uphone`) VALUES ('$name','$email','$password','$phone')";
	


	$exe = mysqli_query($con,$query);
	if($exe){
		$arr["success"] = "true";
	}else{
	    $arr["success"] = "false";
		
	}
	
	}
	
	print (json_encode($arr));
	
	




?>