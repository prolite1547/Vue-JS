<?php
	
	
	$server_name = "localhost";
	$database = "ranking";
	$userid = "root";
	$password = "";
	
	$conn = mysqli_connect($server_name,$userid,$password,$database);
	
	if(mysqli_connect_error()){
		die("Connection Failed".mysqli_connect_error());
	}
	
	$sql = "Select id,user_fname,user_name,user_pass from r_accounts";
	$result = mysqli_query($conn,$sql);
	$data = array();
	
	
	while($row = mysqli_fetch_assoc($result)){
		$data[] = $row;
	}
	
	
	echo json_encode($data);
    

	
?>