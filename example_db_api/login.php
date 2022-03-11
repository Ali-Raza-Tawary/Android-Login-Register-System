<?php
include_once ('session.php');
include("dbconnection.php");
$con = dbconnection();

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

	
	$query = "SELECT *From `user`  WHERE uemail= '$email' and upassword = '$password'";
	
	$arr =[];
	$name = [];

	$exe = mysqli_query($con,$query);
	if(mysqli_num_rows($exe)>0){
		
		   $value = $exe->fetch_assoc();

             			$nv=$value['uname'];
						$uv=$value['uid'];
			
          
            $arr["success"] = "true";
			$arr["name"] = $nv;
	}else{
		
		$arr["success"] = "false";
		
	}
	
	print(json_encode($arr));
		





?>