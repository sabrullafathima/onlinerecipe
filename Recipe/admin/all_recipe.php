<?php 
session_start();
require('includes/config.php');

	
	
$sql ="SELECT * FROM recipe";
$result2=$conn->query($sql);

if(isset($_GET['delete'])){
  $recipe_id = $_GET['delete'];
  $res="DELETE FROM recipe WHERE recipe_id = $recipe_id";
  mysqli_query($conn,$res) ;

  $_SESSION['message']="Record has been deleted";
  $_SESSION['mesg_type']="danger";
  header("location:all_recipe.php");
 }


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
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
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">		
				<table border='1' WIDTH='100%'>
						<tr>
							<td colspan="7"><a href="addrecipe.php">Add New Recipe</a></td>
						</tr>

						<tr>
							<td WIDTH='10%' style="color:darkgreen"><b><u>NO</u></b></td>
							<td style="color:darkgreen" WIDTH='50%'><b><u>NAME</u></b></td>
							<td style="color:darkgreen" WIDTH='25%'><b><u>IMAGE</u></b></td>
							<td style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></td>
							<td style="color:darkgreen" WIDTH='25%'><b><u>EDIT</u></b></td>
						</tr>

						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($result2))
							{
							echo '
								<tr>
									<td> 
										'.$count.'
									</td>

									<td>
										'.$row['recipe_name'].'
									</td>

									<td>
										<img src="../upload_image/'.$row['recipe_image'].'" WIDTH="40px;">
									</td>

									<td>
									 <a href="all_recipe.php?delete=<?'.$row['recipe_id'].'">
											<img src="images/drop.png">
										</a>
									</td>

									<td>
									 <a href="all_recipe.php?recipe_id=<?'.$row['recipe_id'].'">
											<img src="images/edit2.png">
										</a>
									</td>	
								</tr>';

								$count++;
							}
						?>
					</TABLE>		
				</div>	
			</div>	
		</div>
	<!-- end content -->
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
