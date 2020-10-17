
<!DOCTYPE html>
<html>
<head>
	<?php  
		include'include/head.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/forms.css">
	<link rel="stylesheet" type="text/css" href="css/menu&footer.css">
</head>
<body>


<h1>Cooking_Recipies</h1>
<!--start Registration Form-->

<!--connect php form to post d-->
<form action="process_register.php" method="post">

	<div class="form_body">

		<div class="userprofile">
			<i class="fa fa-user"></i>
		</div>

		<h2>Registration Form</h2>

		<div class="register">

			<p>Fill Up The Form With Correct Values</p>
			<div class="regbox">
				<label for="UserName">UserName::</label>
				<input  id="UserName" type="text" name="UserName" required>
			</div>
			<div class="regbox">
				<label for="Email">Email::</label>
				<input  id="Email" type="email" name="Email" required>
			</div>
			<div class="regbox">
				<label for="Password">Password::</label>
				<input  id="Password" type="password" name="Password" required>
			</div>
			
			<button type="submit" name="create" id="register">Sign Up</button>
			<div class="link">
				<a style="color:blue" href="login.php">login</a>
			</div>

		</div>

	</div>
</form>	
<!--end registration Form-->

</body>
</html>