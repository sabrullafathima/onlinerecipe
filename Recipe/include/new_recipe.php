<?php  
	include'include/config.php';
	
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


	$sql="select * from recipe where sub_category_id=2";
	$result=$conn->query($sql);

	
		
?>
<a href="#"><h2 style="font-size:16px; color:white; margin-top: 0; margin-left:0;" ><i class="fas fa-sparkles"></i>NEWEST RECIPES
</h2></a>
		<table border="0" width="80%" style="margin-left: 80px; margin-right: 80px;" >
			<tr>
				<?php 
					$count=1;
					while($row=mysqli_fetch_assoc($result)){
						
						echo '<td  border="2" valign="top" width="15%" align="center" style="padding:5px; ">
									<div class="coupon">
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
									</div>
							</td>';
					
						$count++;
						if ($count>5) {
							break;
						}

				}

				?>
			</tr>
		</table>

	
