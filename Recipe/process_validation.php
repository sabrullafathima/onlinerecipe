
<?php

	include'include/config.php';
	session_start();

	$username=$_POST['UserName'];
	$password=$_POST['password'];

	$sql="select * from user where user_name='$username' && user_password='$password'";

	$result=$conn->query($sql);

	if ($result->num_rows==1){
		
		if($username!=admin){
			header("location:home.php");
		}
		else{
			header("location:admin/index.php");
		}		
	}
	else{
		echo "<p style='color:red'>Invalide username!!</p> Please check the username and password Or Please register";
	}
	
?>
