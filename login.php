<?php


require('../LoginRegistration/connection.php');

if(isset($_GET['user_name']))
{
	$user_name = isset($_GET['user_name']) ? $_GET['user_name'] : '';
	$user_password = isset($_GET['user_password']) ? $_GET['user_password'] : '';
	
	
			$select	= "select * from user where user_name = '$user_name' AND user_password = '$user_password'";
			
			$run_sel = mysqli_query($conn, $select);
			
			if(mysqli_num_rows($run_sel)>0)
			{
				$status = "OK";
			
			}
			else
			{
				$status = "failed";
			}
			echo json_encode(array("response"=>$status));
	
}
	


?>