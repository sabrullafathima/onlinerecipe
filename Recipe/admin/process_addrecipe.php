
	<?php
require('includes/config.php');

	
		
		
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);

			$r_img = "upload_image/".$_FILES['img']['name'];	
			$r_nm=$_POST['name'];
			$r_subcat=$_POST['subcat'];
			$r_course=$_POST['course'];
			$r_publisher=$_POST['publisher'];			
			$r_prtime=$_POST['prtime'];
			

			$query="insert into recipe(recipe_name,course_id,sub_category_id,publisher_name,pre_time,recipe_image)
			values('$r_nm','$r_course','$r_subcat','$r_publisher','$r_prtime','$r_img')";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:recipe.php");
		
?>
	
	
	