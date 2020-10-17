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
			<h1 class="title"></h1>
			<div class="entry" style="min-height:400px">
				<form action='process_addcourse.php' method='POST'>
						<b style="color:black">COURSE</b>
							<br/>
							<input type='text' name='course' size='25'>

							<b style="color:black">ADD FOOD_CATEGORY </b>
							<br/>
							<input type='text' name='cat' size='25'>

							<input type='submit'  name ='add' value='  ADD  '>	

							<br><br>
				</form>						
							
				<hr>					
			</div>
			
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
