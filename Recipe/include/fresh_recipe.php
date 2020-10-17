<?php  
	include'include/config.php';
	session_start();

	$sql="select * from recipe where course_id=1";
	$result=$conn->query($sql);
?>
<a href="fresh_recipe.php"><h2 style="font-size:15px; color:white; margin-top: 0; margin-left:0;" >
	<i  class="fa fa-star" aria-hidden="true" style="font-size:20px" id="star2"></i> 
		What Is Fresh?
	<i  class="fa fa-star" aria-hidden="true" style="font-size:20px;" id="star1"></i>
</h2></a>
	<table width="45%" border="0" style="padding-left: 60px;">
		<?php  
			$count=0;
			while($row=mysqli_fetch_assoc($result)){
				
				if ($count==0) {
					echo '<tr>';
				}
				echo'	<td valign="top" width="15%" align="center" style="padding:5px;">
							
										<a href="detail.php?recipe_id='.$row['recipe_id'].'" style="font-size:10px; color:white;" >
											<img src="upload_image/'.$row['recipe_image'].'" width="150px" height="150px">
											<br> 

											 <div class="container">
											 	'.$row['recipe_name'].'
											 </div>

											  <div class="container">by:
											 	'.$row['publisher_name'].'
											 </div>

											  <div class="container">
											 	<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											 </div>
										</a>
									
							<br>							
						</td>';					
					$count++;
					if ($count==6) {
						'</tr>';
						$count=0;
					}
			}
		?>
	</table>
	</div class="sidefreshbar">
				<?php  
					include'include/sidefreshbar.php';
				?>
	<div>


	
	