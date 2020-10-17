<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu2.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title" >Add Recipe</h1>
		</div>
		
		<div class="entry" >
				<form action='process_addrecipe.php' method='POST' enctype="multipart/form-data">
				
						<br><b>Recipe Name:</b><br>
						<input type='text' name='name' size='40'>
						<br><br>

						<br><b>Publisher:</b><br>
						<input type='text' name='publisher' size='40'>
						<br><br>

						<b>Course:</b><br>
						<select  name="course">
							<?php
								$sql1="select * from course";
								$result1=mysqli_query($conn,$sql1);
									while($row=mysqli_fetch_assoc($result1))
										{
											echo '<option value="'.$row['course_id'].'"> --->'.$row['course_name'];	 	
										}				
							?>
						</select>
						<br><br>

						<b>Category:</b><br>
						<select  name="subcat">
							<?php
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
						<br><br>

						<b>PrapareTime:</b><br>
						<textarea cols="6" rows="2" name='prtime' ></textarea>
						<br><br>
						
						<b>Image:</b><br>
						<input type='file' name='img' size='35'>
						<br><br>
	
						<input  type='submit'  value='   OK   '  >
				</form>
			</div>
			
	</div>
	<!-- end content -->
	
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->

<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>


