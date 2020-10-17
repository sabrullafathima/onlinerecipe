<?php
require('includes/config.php');
	
$course=$_POST['course'];

$sql="select * from course where course_name='$course'";
$result=$conn->query($sql);


$sql2="insert into course(course_name) values('$course')";

		if($conn->query($sql2)===TRUE){
			header("location:course.php");
		}
		else{
			header("location:index.php");
		}
	

$cat=$_POST['cat'];

$sql3="select * from foodcategory where food_category_name='$cat'";
$result2=$conn->query($sql3);


		$sql4="insert into foodcategory(food_category_name) values('$cat')";

		if($conn->query($sql4)===TRUE){
			header("location:course.php");
		}
		else{
			header("location:index.php");
		}


?>
	