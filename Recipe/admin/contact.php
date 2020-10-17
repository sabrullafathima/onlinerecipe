<?php 
session_start();
require('includes/config.php');

	$sql="select * from contact";
	$result=mysqli_query($conn,$sql) or die("Can't Execute Query...");
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
						<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b>
						<td style="color:darkgreen" WIDTH='20%'><b><u>NAME</u></b>
						<td style="color:darkgreen" WIDTH='20%'><b><u>EMAIL</u></b>
						<td style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b>			
					</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($result))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['c_nm'].'
										<td>'.$row['c_email'].'
										<td><a href="process_del_contact.php?delete='.$row['c_id'].'"><img src="images/drop.png" ></a>
									</tr>';
							$count++;
							}
						?>
					</TABLE>		
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
