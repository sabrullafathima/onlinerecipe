 <?php session_start();?>
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
			<h1 class="title"></h1>
			<div class="entry">				
				<form action='process_addsubcategory.php' method='POST'>
						<h1 style="color:black">ADD SUB-CATEGORY </h1>
						<br><br>
						<u style="color:black; font-weight: bold">FOOD CATEGORY </u>
									<br>
										<select  name="parent">
											<?php
											
												require('includes/config.php');
					
													$query="select * from foodcategory ";
					
													$res=mysqli_query($conn,$query);
													
													while($row=mysqli_fetch_assoc($res))
													{
														echo "<option value='".$row['food_category_id']."'>".$row['food_category_name'];
														//PASS ID NOT NAME
													}
					
													mysqli_close($conn);
											?>
										</select>
									
									<br>
							<u style="color:black; font-weight: bold;">SUB-CATEGORY:</u>
									<br><br>
										<input type='text' name= 'subcat' size='25'>
										
										<input type='submit'  value='  ADD  '>
									
									<br><br>	
				</form>
				<hr>
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
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
