
<?php
if (isset($_GET['result'])) {
	if ($_GET['result']=='success') {
		 header('location:all_recipe.php');
	}else{
		echo "error. You have deleted this course unsuccesfully.";
	}
}
?>
