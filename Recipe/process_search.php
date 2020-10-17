<?php 
	include'include/config.php';

	
	$search=$_POST['search'];
	$sql="SELECT * from recipe inner join subcategory on subcategory.sub_category_id=recipe.sub_category_id inner join course on course.course_id=recipe.course_id inner join foodcategory on foodcategory.food_category_id=subcategory.food_category_id where (recipe.recipe_name like '%$search%' or foodcategory.food_category_name like '%$search%' or subcategory.sub_category_name like '%$search%' or course.course_name like '%$search%' )";
				


	$result=$conn->query($sql);
?>

	<table  width="80%" align="center">
		<?php
			$count=0;
			while($row=mysqli_fetch_assoc($result)){
				
				if($count==0){
					echo '<tr>';
				}						
					echo 
						'<td style="padding:10px" valign="top" width="20%" align="center" >
							<a href="detail.php?recipe_id='.$row['recipe_id'].'">
								<img src="upload_image/'.$row['recipe_image'].'" width="80%" height="200"> 
								<br>
								'.$row['recipe_name'].'
							</a>
						</td>';

					$count++;							
													
					if($count==4){
						echo '</tr>';
						$count=0;
					}
				}
											
		?>
	'</table>'