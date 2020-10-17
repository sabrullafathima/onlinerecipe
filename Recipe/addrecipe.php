<!DOCTYPE html>
<html>
<head>
	<?php  
		include'include/head.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/menu&footer.css">
	<link rel="stylesheet" type="text/css" href="css/addrecipe.css">
</head>
<body>
	<!--start menu-->
	<div id="menu" class="pagesmenu">
		<nav class="clearfix"> 
			<?php  
				include'include/menu.php';
			?>
		</nav>
	</div>
	<!--end menu-->

	<!--start content-->
	<div id="content">
		<h1>ADD A RECIPE</h1>
		<!--start form------>
		<form class="addrecipe" action="process_addrecipe.php" method="post">
			<!--start recipe name------>
			<div class=inputwrap>	
				<input class="addrecipe" type="text" name="name" placeholder="Recipe Name.." >
				<i class="fa fa-info-circle"></i>
				<p class="hidemsg">
				Please chooce your recipe name wisely. If you change the name after your recipe is published, it will not match the URL (web page address) in your browser window. maximum 64 charecters
				</p>
			</div>

		<!--start course----->
		<h2>COURSE</h2>
		<hr>
			<select  name="course">
				<?php
					include'include/config.php';
					$sqlcourse="select * from course ";
					$resultcourse=mysqli_query($conn,$sqlcourse);
						while($rowcourse=mysqli_fetch_assoc($resultcourse))
							{
								echo '<option value="'.$rowcourse['course_id'].'"> ---> '.$rowcourse['course_name'];	
							}
						mysqli_close($conn);
				?>
			</select>

		<!--start category----->
		<h2>CATEGORIES</h2>
		<hr>
			<select  name="subcat">
				<?php
					include'include/config.php';
					$sql1="select * from foodcategory ";
					$result1=mysqli_query($conn,$sql1);
						while($row=mysqli_fetch_assoc($result1))
							{
								echo "<option disabled>".$row['food_category_name'];

								$sql2 = "select * from subcategory where food_category_id = ".$row['food_category_id'];
								$result2 = mysqli_query($conn,$sql2) or die("Can't Execute Query..");
								while($row2 = mysqli_fetch_assoc($result2))
									{			
									echo '<option value="'.$row2['sub_category_id'].'"> ---> '.$row2['sub_category_name'];	 									
									}	
							}
						mysqli_close($conn);
				?>
			</select>

			<!--start image----->
			<div class="camera">
				<img src="images/icon2.png">
				<div class="choocefile">
					<a><input type='file' name='img' size='35' value="ADD YOUR PHOTO"></a>
				</div>	
			</div>	
			<div id="time">


			<!--start timing------>
			<h3>PRE TIME::</h3>	
			<div class="time">
				<input class="time" type="text"  name="pre_time" placeholder="....">
				
			</div>
			<h3>COOK TIME::</h3>
			<div class="time">
				<input  class="time" type="text"  name="cook_time" placeholder="....">
				
			</div>
			<p>.........................................................<p>
			<!--start INGREDIENTS----->
			<h2>INGREDIENTS</h2>
				<hr>
				<p>Enter your ingredients one at a time or paste them into the box below and hit enter.</p>
				<textarea name="ingredients" type="text" placeholder="EX: 1 cup suger"></textarea>
				</div>

			<!--start DIRECTIONS----->
			<h2>DIRECTIONS</h2>
				<hr>
				<p>Enter your directions one step at a time or paste them into the
				 box below and hit enter. Don’t worry, we will number them for you.
				</p>
				<textarea name="directions" type="text" placeholder="EX: place all ingredients in blender"></textarea>

			<!--start save recipe----->
			
					When you click Save, additional changes cannot be made until your recipe is published.
					By clicking Save, you agree to our 
					<a style="color:purple; font-size: 10px; text-decoration: underline;" href="#">
						terms of service
					</a>
				</p>
				<button class="save" type="submit" name="submit">SAVE</button>
				<p style="float: right; margin-top:50px; padding-bottom: 30px; ">or 
					<a href="#" style="color: purple; font-size: 10px;" >
						cencel
					</a>
				</p>
		</form>
		<!--start form------>	
	</div>
	<!--end content-->

	<!--start footer-->
	<div id="footer">
		<?php  
			include'include/footer.php';
		?>
	</div>
	<!--end footer-->
</body>
</html>