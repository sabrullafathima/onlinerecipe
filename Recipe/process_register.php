
<?php 

	include'include/config.php';
	session_start();

	$username=$_POST['UserName'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$tst=$_POST['tst'];

	$sql="select * from user where user_name='$username'";
	$result=$conn->query($sql);

	if ($result->num_rows==1){
		echo "user name already taken";
	}
	else{
		$sql2="insert into user(user_name,user_email,user_password) values('$username','$email','$password')";

		if($conn->query($sql2)===TRUE){
			echo "registration is successful";
			header("location:login.php");
		}
		else{
			echo "Error:".$sql2."<br>".$conn->error;
		}
	}

?>