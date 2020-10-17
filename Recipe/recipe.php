<?php 
	include'include/config.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php  
		include'include/head.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/menu&footer.css">
	
</head>
<body>
	<div id="menu" style="background-color: black; height:auto;">
		<nav class="clearfix"> 
			<?php  
				include'include/menu&footer.php';
			?>
		</nav>
	</div>
	<!-------- start content of recipe page-------------->
	<div class="recipe" style="background-color:white;" width="80%;">

			<!-------- select all from recipe-------------->
			<?php
				$sql="select * from recipe";
				$result=$conn->query($sql);
			?>
			   

			<table  width="80%" align="center">
					<?php
						$count=0;
						while($row=mysqli_fetch_assoc($result)){

							if($count==0){
								echo '<tr>';
							}						
							echo '<td style="padding:10px; border-radius: 25px; border:1px solid gray; " valign="top" width="20%" align="center"  >
										<a href="detail.php?recipe_id='.$row['recipe_id'].'" style="color:black;">
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
			</table>

	</div>
	<!-------- end content of recipe page-------------->
</body>
</html>