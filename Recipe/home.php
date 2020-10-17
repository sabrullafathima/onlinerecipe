<!DOCTYPE html>
<html>
<head>
	<title>cooking Recipe</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div id="header">	
		<div id="menu">
			<?php  
				include'include/menu.php';
			?>
		</div>
	</div>

	<div id="homecontent">

		<div class="parallal1"></div>

		<div class="recipe_container">
			<div class="fresh">
				<?php  
					include'include/fresh_recipe.php';
				?>
			</div>
		</div>

		<div class="parallal2"></div>

		<div class="recipe_container">
			<div class="recipe">
				<?php  
					include'include/top_recipe.php';
				?>
			</div>
		</div>

		<div class="parallal3"></div>

		<div class="recipe_container">
			<div class="recipe">
				<?php  
					include'include/trending_recipe.php';
				?>
			</div>
		</div>

		<div class="parallal4"></div>

		<div class="recipe_container">
			<div class="recipe">
				<?php  
					include'include/new_recipe.php';
				?>
			</div>
		</div>

		<div class="parallal5"></div>

		<div class="recipe_container">
			<div class="recipe">
				<?php  
					include'include/cravingnow.php';
				?>
			</div>
		</div>

		<div class="parallal6"></div>
	</div>


	<div id="footer">
		<?php  
			include'include/footer.php';
		?>
	</div>

</div>
</body>
</html>