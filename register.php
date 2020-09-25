<?php


require('../LoginRegistration/connection.php');


	$user_name = isset($_GET['user_name']) ? $_GET['user_name'] : '';
	$user_password = isset($_GET['user_password']) ? $_GET['user_password'] : '';
	$name = isset($_GET['name']) ? $_GET['name'] : '';
	
	
			$insert	= "insert into user (user_name, user_password, name) values ('$user_name', '$user_password', '$name')";
						
			$run_insert = mysqli_query($conn, $insert);
			
			if($run_insert)
			{
				$status = "OK";
				
				$row = mysqli_fetch_array($run_insert);
				$id = $row['id'];
			}
			else
			{
				$status = "failed";
			}
			echo json_encode(array("response"=>$status,"id"=>$id));
	


?>