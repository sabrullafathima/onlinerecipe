<?php
require('includes/config.php');
	
$cat=$_POST['cat'];

$sql="select * from foodcategory where food_category_name='$cat'";
$result=$conn->query($sql);

if ($result->num_rows==1){
		echo "category name already taken";
	}
	else{
		$sql2="insert into foodcategory(food_category_name) values('$cat')";

		if($conn->query($sql2)===TRUE){
			header("location:foodcategory.php");
		}
		else{
			echo "Error:".$sql2."<br>".$conn->error;
		}
	}

?>
	