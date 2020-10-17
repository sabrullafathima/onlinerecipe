<?php  
	include'include/config.php';
	session_start();

	$recipe_id=$_GET['recipe_id'];
	$sql="SELECT * 
		from recipe 
		inner join foodcategory
		on foodcategory.food_category_id=recipe.recipe_id 
		where(recipe.recipe_id=$recipe_id)";
		
	$result=$conn->query($sql);
	$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>recipe _detailes</title>
		<?php  
			include'include/head.php';
		?>

</head>
<body>
	<div id="menu" style="background-color: black; height:auto;">
		<nav class="clearfix"> 
			<?php  
				include'include/menu.php';
			?>
		</nav>
	</div>


	<div id="content" style="margin-left: 150px;">
		<a href="recipes.php">
			RECIPES
		</a>
		/
		<a href="recipes.php">
			<?php 
				echo $row['food_category_name'];
			 ?>
		</a>

		<h1 style="font-size: 30px;">
			<?php echo $row['recipe_name'] ?>
		</h1>

		<table border="2" width="45">
			<tr>
				<td colspan="6">
					<img src="upload_image/<?php echo $row['recipe_image']; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="6" style="background-color: #5fdde5; padding:8px; text-align: center;">
					<a style=" font-size: 20px; color: black;">
						SAVE RECIPE
					</a>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="2">
					<p>READY IN:<?php echo $row['cook_time'] ?></p>
				</td>
				<td colspan="1">
					
				</td>
				<td colspan="3">
					
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<p>INGREDIENTS:</p>
				</td>
				<td colspan="3">
					<p>DIRECTIONS:</p>
				</td>
			</tr>
			<?php 
				$count=0;
				while ($row=mysqli_fetch_assoc($result)) {
			?>
					<tr>
						<td colspan="1">
							<?php 
								echo $row['ingredient_quantity'];
							?>
						</td>
						<td colspan="2">
							<?php 
								echo $row['measurement_name'];
							?>   
							<a style="color: red; font-size: 10px;">
								<?php 
									echo $row['ingredient_name'];
								?>
							</a>
						</td>
						<td colspan="3">
							
						</td>
					</tr>

			<?php 
				$count++;
				
				}
			?>
			
		</table>
	</div>


	<div id="footer">
		<?php  
			include'include/footer.php';
		?>
	</div>

</body>
</html>