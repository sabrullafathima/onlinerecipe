
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




	<!--start login form-->
	<h1>Cooking_Recipies</h1>
	
<form action="process_validation.php" method="post">

	<div class="form_body">

		<div class="userprofile">
			<i class="fa fa-user"></i>
		</div>

		<h2>Login Form</h2>

		<div class="login">
			<div class="logbox">
				<i class="fa fa-user"></i>
				<input name="UserName" placeholder="UserName" required>
			</div>
			<div class="logbox">
				<i class="fas fa-lock"></i>
				<input type="password" name="password" placeholder="password" required>
			</div>

			<button type="submit" name="log">Login</button>

			<div class="link">
				<a href="registration.php">Registration</a>
				<a href="forgotpassword.php">ForgotPassword</a>
			</div>

		</div>

	</div>
</form>
<!--end login form-->
	
</body>
</html>