<?php  
	include'include/config.php';
	session_start();

			$r_img=$_POST['img'];
			$r_file ="upload_image/bread4.jpg".$_FILES[$r_img]['name'];	
			$r_nm=$_POST['name'];
			$r_cooktm=$_POST['cook_time'];
			$r_pretm=$_POST['pre_time'];
			$r_crs=$_POST['course'];
			$r_subcat=$_POST['subcat'];
			$r_ingre=$_POST['ingredients'];
			$r_direc=$_POST['directions'];
			$sql1="insert into 
					recipe(recipe_name,recipe_image,pre_time,cook_time, course_id,sub_category_id,ingredients,directions) 
					value('$r_nm','$r_file','$r_pretm','$r_cooktm','$r_crs','$r_subcat','$r_ingre','$r_direc')";
	
			mysqli_query($conn,$sql1) or die($sql1."Can't Connect to Query...");
			header("location:addrecipe.php");	
?>

